<?php
// Définir le chemin de la racine du site web
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/projet/";

// Inclure le fichier de connexion à la base de données
require_once($path . 'backend/connect.php');

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Initialisation de la session
session_start();

// Vérification des autorisations de l'utilisateur
if (!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'customer'))) {
    // Si l'utilisateur n'est pas connecté ou n'a pas les autorisations nécessaires, afficher un message d'erreur et arrêter l'exécution du script
    echo "Unauthorized Access";
    return;
}

// Initialiser les variables pour stocker les valeurs nutritionnelles du produit
$product_name_fr = "";
$nutrition_data_per = "";
$energy_kcal_value_kcal = "";
$fat_value_g = "";
$saturated_fat_value_g = "";
$carbohydrates_value_g = "";
$sugars_value_g = "";
$fiber_value_g = "";
$proteins_value_g = "";
$salt_value_g = "";
$sodium_value_g = "";

// Vérifier si un identifiant de produit a été transmis via GET
if (isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];

    // Requête SQL pour récupérer les valeurs nutritionnelles du produit correspondant à partir de la base de données
    $query = "SELECT product_name_fr, nutrition_data_per, energy_kcal_value_kcal, fat_value_g, saturated_fat_value_g, carbohydrates_value_g, sugars_value_g, fiber_value_g, proteins_value_g, salt_value_g, sodium_value_g FROM produit WHERE id = $product_id";
    $result = mysqli_query($connection, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        // Récupérer les valeurs nutritionnelles du produit
        $product_name_fr = $row['product_name_fr'];
        $nutrition_data_per = $row['nutrition_data_per'];
        $energy_kcal_value_kcal = $row['energy_kcal_value_kcal'];
        $fat_value_g = $row['fat_value_g'];
        $saturated_fat_value_g = $row['saturated_fat_value_g'];
        $carbohydrates_value_g = $row['carbohydrates_value_g'];
        $sugars_value_g = $row['sugars_value_g'];
        $fiber_value_g = $row['fiber_value_g'];
        $proteins_value_g = $row['proteins_value_g'];
        $salt_value_g = $row['salt_value_g'];
        $sodium_value_g = $row['sodium_value_g'];
    }
}

// Traitement du formulaire
// Traitement du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $product_id = $_POST['product_id'];
    $product_name_fr = $_POST['product_name_fr'];
    $energy_100g = $_POST['energy_100g'];
    $fat_value_g = $_POST['fat_value_g'];
    $saturated_fat_value_g = $_POST['saturated_fat_value_g'];
    $carbohydrates_value_g = $_POST['carbohydrates_value_g'];
    $sugars_value_g = $_POST['sugars_value_g'];
    $fiber_value_g = $_POST['fiber_value_g'];
    $proteins_value_g = $_POST['proteins_value_g'];
    $salt_value_g = $_POST['salt_value_g'];
    $sodium_value_g = $_POST['sodium_value_g'];

    // Stocker les données dans des variables de session
    $_SESSION['product_name_fr'] = $product_name_fr;
    $_SESSION['energy_kcal_value_kcal'] = $energy_100g; 
    $_SESSION['fat_value_g'] = $fat_value_g;
    $_SESSION['saturated_fat_value_g'] = $saturated_fat_value_g;
    $_SESSION['carbohydrates_value_g'] = $carbohydrates_value_g;
    $_SESSION['sugars_value_g'] = $sugars_value_g;
    $_SESSION['fiber_value_g'] = $fiber_value_g;
    $_SESSION['proteins_value_g'] = $proteins_value_g;
    $_SESSION['salt_value_g'] = $salt_value_g;
    $_SESSION['sodium_value_g'] = $sodium_value_g;

    // Effectuez ici le traitement nécessaire, par exemple, enregistrez les données dans la base de données

    // Rediriger vers la page accueil.php après le traitement
    header("Location: /projet/backend/index.php");
    exit;
}


?>

<?php require($path . 'frontend/templates/header.php') ?>
<link rel="stylesheet" type="text/css" href="/projet/frontend/css/style_ajouter.css">


<div class="container-fluid my-4">
    <div class="row my-2">
        <h2>Ajouter un aliment</h2>
    </div>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
        <div class="form-group">
            <label for="product_name_fr">Nom du produit</label>
            <input type="text" class="form-control" id="product_name_fr" name="product_name_fr" value="<?php echo $product_name_fr; ?>">
        </div>

        <div class="form-group">
            <label for="energy_100g">Énergie pour 100g (kcal)</label>
            <input type="number" class="form-control" id="energy_100g" name="energy_100g" value="<?php echo $energy_kcal_value_kcal; ?>" >
        </div>

        <div class="form-group">
            <label for="fat_value_g">Gras (g)</label>
            <input type="number" class="form-control" id="fat_value_g" name="fat_value_g" value="<?php echo $fat_value_g; ?>">
        </div>

        <div class="form-group">
            <label for="saturated_fat_value_g">Gras saturés (g)</label>
            <input type="number" class="form-control" id="saturated_fat_value_g" name="saturated_fat_value_g" value="<?php echo $saturated_fat_value_g; ?>">
        </div>

        <div class="form-group">
            <label for="carbohydrates_value_g">Glucides (g)</label>
            <input type="number" class="form-control" id="carbohydrates_value_g" name="carbohydrates_value_g" value="<?php echo $carbohydrates_value_g; ?>">
        </div>

        <div class="form-group">
            <label for="sugars_value_g">Sucres (g)</label>
            <input type="number" class="form-control" id="sugars_value_g" name="sugars_value_g" value="<?php echo $sugars_value_g; ?>">
        </div>

        <div class="form-group">
            <label for="fiber_value_g">Fibres (g)</label>
            <input type="number" class="form-control" id="fiber_value_g" name="fiber_value_g" value="<?php echo $fiber_value_g; ?>">
        </div>

        <div class="form-group">
            <label for="proteins_value_g">Protéines (g)</label>
            <input type="number" class="form-control" id="proteins_value_g" name="proteins_value_g" value="<?php echo $proteins_value_g; ?>">
        </div>

        <div class="form-group">
            <label for="salt_value_g">Sel (g)</label>
            <input type="number" class="form-control" id="salt_value_g" name="salt_value_g" value="<?php echo $salt_value_g; ?>">
        </div>

        <div class="form-group">
            <label for="sodium_value_g">Sodium (mg)</label>
            <input type="number" class="form-control" id="sodium_value_g" name="sodium_value_g" value="<?php echo $sodium_value_g; ?>">
        </div>

        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</div>

<?php require($path . 'frontend/templates/footer.php') ?>
