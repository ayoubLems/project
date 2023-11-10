<?php
require_once "connect.php";
 
$email = $password = $confirm_password = "";
$email_err = $password_err = $confirm_password_err = "";
 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = trim($_POST["name"]);
    
    
    if(empty(trim($_POST["email"]))){
        $email_err = "Veuillez entrer un email.";
    } else{
        $sql = "SELECT id FROM users WHERE email = ?";
        
        if($stmt = mysqli_prepare($connection, $sql)){
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            $param_email = trim($_POST["email"]);
            
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $email_err = "Cet email est déjà enregistré.";
                } else{
                    $email = trim($_POST["email"]);
                }
            } else{
                echo "Oups ! Quelque chose s'est mal passé. Veuillez réessayer plus tard.";
            }

            mysqli_stmt_close($stmt);
        }
    }
    
    if(empty(trim($_POST["password"]))){
        $password_err = "Veuillez entrer un mot de passe.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Le mot de passe doit comporter au moins 6 caractères.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Veuillez confirmer le mot de passe.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Les mots de passe ne correspondent pas.";
        }
    }

    $age = trim($_POST["age"]);
    if (empty($age) || !filter_var($age, FILTER_VALIDATE_INT) || $age < 0 || $age > 150) {
        $age_err = "Veuillez entrer un âge valide.";
    }

    $taille = $_POST["taille"];
    $sexe = $_POST["sexe"];
    $sport = $_POST["sport"];
    
    
    if (empty($email_err) && empty($password_err) && empty($confirm_password_err) && empty($age_err)) {
        $sql = "INSERT INTO users (name, email, password, age, taille, sexe, sport) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($connection, $sql);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "sssisis", $param_name, $param_email, $param_password, $param_age, $param_taille, $param_sexe, $param_sport);

            $param_name = $name;
            $param_email = $email;
            $param_password = password_hash($password, PASSWORD_DEFAULT); 
            $param_age = $age;
            $param_taille = $taille;
            $param_sexe = $sexe;
            $param_sport = $sport;

            if (mysqli_stmt_execute($stmt)) {
                header("location: login.php");
            } else {
                echo "Quelque chose s'est mal passé. Veuillez réessayer plus tard.";
                print_r($stmt->error_list);
            }

            mysqli_stmt_close($stmt);
        }
    }

    mysqli_close($connection);
}
?>

<?php require('../frontend/templates/header.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" type="text/css" href="/projet/frontend/css/style2.css">
</head>
<body>
<div class="login-container">
    <div class="login-panel">
        <div class="login-image"></div>
        <h2>Inscription</h2>
        <p>Veuillez remplir ce formulaire pour créer un compte.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Nom</label>
                <input type="text" name="name" class="form-control" value="">
            </div>    
            <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="<?php echo $email; ?>" required>
                <span class="help-block"><?php echo $email_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Mot de passe</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>" required>
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirmer le mot de passe</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>" required>
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <label>Age</label>
                <input type="number" name="age" class="form-control <?php echo (!empty($age_err)) ? 'has-error' : ''; ?>" value="<?php echo $age; ?>">
                <span class="help-block"><?php echo $age_err; ?></span>
            </div>
            <div class="form-group">
                <label>Taille (cm)</label>
                <select name="taille" class="form-control">
                    <?php for ($i = 100; $i <= 230; $i++): ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?> cm</option>
                    <?php endfor; ?>
                </select>
            </div>
            <div class="form-group">
                <label>Sexe</label>
                <select name="sexe" class="form-control">
                    <option value="1">Homme</option>
                    <option value="2">Femme</option>
                    <option value="3">Autre</option>
                </select>
            </div>
            <div class="form-group">
                <label>Pratique sportive</label>
                <select name="sport" class="form-control">
                    <option value="faible">Faible</option>
                    <option value="moyen">Moyen</option>
                    <option value="eleve">Élevé</option>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" class="btn" value="Soumettre">
                <input type="reset" class="btn" value="Réinitialiser">
            </div>
            <p>Vous avez déjà un compte ? <a href="login.php">Connectez-vous ici</a>.</p>
        </form>
    </div>
</div>
</body>
</html>

<?php require('../frontend/templates/footer.php') ?>
