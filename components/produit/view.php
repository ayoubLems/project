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
<?php require($path . 'templates/header.php') ?>
<div class="container-fluid my-4">
	<div class="row my-2">
		<h2>Catalogue des produits</h2>	
	</div>
	<table class="table "> 
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
	while($r = mysqli_fetch_assoc($res)){
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
		</tr> 
		<?php } ?>
	</tbody> 
	</table>
</div>

<?php require($path . 'templates/footer.php') ?>
