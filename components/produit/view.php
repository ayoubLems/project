<?php
// définition du chemin de la racine du site web
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/projet/";

// connexion à la base de données
require_once($path . 'connect.php');

// Initialisation de la session
session_start();

// Vérification des autorisations de l'utilisateur
if (!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'customer'))) {
    // Si l'utilisateur n'est pas connecté ou n'a pas les autorisations nécessaires, affichez un message d'erreur et arrêtez l'exécution du script
    echo "Unauthorized Access";
    return;
}

// Requête SQL pour récupérer tous les champs de la table "produit"
$ReadSql = "SELECT * FROM `produit`";
$res = mysqli_query($connection, $ReadSql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/projet/css/style_view.css">
    <title>Catalogue des produits</title>
</head>
<body>
    <?php require($path . 'templates/header.php') ?>
    <div class="container-fluid my-4">
        <div class="row my-2">
            <h2>Catalogue des produits</h2>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <?php
                    // Récupération des noms des champs de la table "produit"
                    $field_names = array();
                    while ($field = mysqli_fetch_field($res)) {
                        $field_names[] = $field->name;
                    }

                    // Affichage des noms des champs comme en-têtes de colonnes
                    foreach ($field_names as $field_name) {
                        echo "<th>" . $field_name . "</th>";
                    }
                    ?>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Boucle while pour afficher chaque produit récupéré de la base de données
                while ($r = mysqli_fetch_assoc($res)) {
                ?>
                    <tr>
                        <?php
                        // Affichage des valeurs de chaque champ dans une ligne
                        foreach ($field_names as $field_name) {
                            echo "<td>" . $r[$field_name] . "</td>";
                        }
                        ?>
                        <td>
                            <a href="ajouter.php?product_id=<?php echo $r['id']; ?>"><button type="button" class="btn btn-primary">Ajouter aliment</button></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
	
	<style>
		body {
			font-family: 'Arial', sans-serif;
			background-color: #f0f0f0;
			margin: 0;
			padding: 0;
		}

		.container {
			max-width: 1200px;
			margin: 0 auto;
			padding: 20px;
		}

		.table-container {
			background-color: #fff;
			border-radius: 8px;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
			overflow: hidden;
		}

		.table-container table {
			width: 100%;
			border-collapse: collapse;
		}

		.table-container th, .table-container td {
			padding: 12px 15px;
			text-align: left;
			border-bottom: 1px solid #ddd;
		}

		.table-container th {
			background-color: #003973;
			color: #fff;
		}

		.table-container tr:nth-child(even) {
			background-color: #f2f2f2;
		}

		.table-container tr:hover {
			background-color: #e5e5e5;
		}

		.btn {
			background-color: #003973;
			border: none;
			color: white;
			padding: 10px 20px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			margin: 4px 2px;
			cursor: pointer;
			border-radius: 16px;
			transition: background-color 0.3s;
		}

		.btn:hover {
			background-color: #E5E5BE;
		}
	</style>

    <?php require($path . 'templates/footer.php') ?>
</body>
</html>
