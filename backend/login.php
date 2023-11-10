<?php
// Initialisation de la session
session_start();

// Vérifie si l'utilisateur est déjà connecté, si oui, le redirige vers la page d'accueil
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: index.php");
    exit;
}

// Inclure le fichier de configuration
require_once "connect.php";

// Définir les variables et les initialiser avec des valeurs vides
$email = $password = "";
$email_err = $password_err = "";

// Traitement des données du formulaire lorsque le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Vérifie si l'email est vide
    if (empty(trim($_POST["email"]))) {
        $email_err = "Veuillez entrer votre email.";
    } else {
        $email = trim($_POST["email"]);
    }

    // Vérifie si le mot de passe est vide
    if (empty(trim($_POST["password"]))) {
        $password_err = "Veuillez entrer votre mot de passe.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Valider les identifiants
    if (empty($email_err) && empty($password_err)) {
        // Prépare une déclaration select
        $sql = "SELECT id, email, password, role FROM users WHERE email = ?";

        if ($stmt = $connection->prepare($sql)) {
            // Lie les variables à la déclaration préparée en tant que paramètres
            $stmt->bind_param("s", $param_email);

            // Définir les paramètres
            $param_email = $email;

            // Tentative d'exécution de la déclaration préparée
            if ($stmt->execute()) {
                // Stocke le résultat
                $stmt->store_result();

                // Vérifie si l'email existe, si oui, vérifie le mot de passe
                if ($stmt->num_rows == 1) {
                    // Lie les variables de résultat
                    $stmt->bind_result($id, $email, $hashed_password, $role);
                    if ($stmt->fetch()) {
                        if (password_verify($password, $hashed_password)) {
                            // Le mot de passe est correct, commence une nouvelle session
                            session_start();

                            // Stocke les données dans les variables de session
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["email"] = $email;
                            $_SESSION["role"] = $role;

                            // Redirige l'utilisateur vers la page d'accueil
                            header("location: ../frontend/components/produit/view.php");
                        } else {
                            // Affiche un message d'erreur si le mot de passe n'est pas valide
                            $password_err = "Le mot de passe que vous avez entré n'est pas valide.";
                        }
                    }
                } else {
                    // Affiche un message d'erreur si l'email n'existe pas
                    $email_err = "Aucun compte trouvé avec cet email.";
                }
            } else {
                echo "Oups ! Quelque chose s'est mal passé. Veuillez réessayer plus tard.";
            }

            // Ferme la déclaration
            $stmt->close();
        }
    }

    // Ferme la connexion
    $connection->close();
}
?>

<?php require('../frontend/templates/header.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" type="text/css" href="../frontend/css/style2.css"> 
</head>
<body>
<div class="login-container">
    <div class="login-panel">
        <div class="login-image"></div>
        <h2>Connexion</h2>
        <p>Veuillez remplir vos identifiants pour vous connecter.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
                <span class="help-block"><?php echo $email_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Mot de passe</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn" value="Connexion">
            </div>
            <p>Vous n'avez pas de compte ? <a href="register.php">Inscrivez-vous maintenant</a>.</p>
            <p>Mot de passe oublié ? <a href="reset-password.php">Réinitialisez-le</a>.</p>
        </form>
    </div>
</div>
</body>
</html>

<?php require('../frontend/templates/footer.php') ?>
