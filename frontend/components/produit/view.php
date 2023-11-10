<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/projet/";

require_once($path . 'backend/connect.php');

session_start();

if (!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'customer'))) {
    echo "Unauthorized Access";
    return;
}

$ReadSql = "SELECT * FROM `produit`";
$res = mysqli_query($connection, $ReadSql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/projet/frontend/css/style_view.css">
    <title>Catalogue des produits</title>
</head>
<body>
    <?php require($path . 'frontend/templates/header.php') ?>
    <div class="container-fluid my-4">
        <div class="row my-2">
            <h2>Catalogue des produits</h2>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <?php
                    $field_names = array();
                    while ($field = mysqli_fetch_field($res)) {
                        $field_names[] = $field->name;
                    }

                    foreach ($field_names as $field_name) {
                        echo "<th>" . $field_name . "</th>";
                    }
                    ?>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($r = mysqli_fetch_assoc($res)) {
                ?>
                    <tr>
                        <?php
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

    <?php require($path . 'frontend/templates/footer.php') ?>
</body>
</html>
