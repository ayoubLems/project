<?php
require_once ('connect.php'); //inclure le fichier connect.php qui contient les informations de connexion à la base de données

// Initialisation de la session
session_start();

if(isset($_POST) & !empty($_POST)){ //vérifier si le formulaire de soumission a été envoyé
	$product_no = ($_POST['product_no']); //récupérer la valeur de l'input 'product_no'
	$customer_email = ($_POST['customer_email']); //récupérer la valeur de l'input 'customer_email'
	$Date_du_matching = ($_POST['Date_du_matching']); //récupérer la valeur de l'input 'Date_du_matching'

    // Exécuter la requête d'insertion
	$query = "INSERT INTO `matching` (product_no, customer_email, Date_du_matching) VALUES ('$product_no', '$customer_email', '$Date_du_matching')";
	$res = mysqli_query($connection, $query); //exécuter la requête et stocker le résultat dans une variable
	if($res){
		if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { //vérifier si l'utilisateur est connecté et le rediriger vers la page de visualisation du Matching
			header('location: components/matching/view.php');
		}else {
			header('location: index.php'); //rediriger l'utilisateur vers la page d'accueil s'il n'est pas connecté
		}
	}else{
		$fmsg = "Failed to Insert data."; //afficher un message d'erreur en cas d'échec de l'insertion des données
		print_r($res->error_list); //afficher les erreurs liées à la requête
	}
}

?>
<?php require('templates/header.php') ?> <!--inclure le fichier header.php qui contient le code HTML pour la section 'head'-->

<select name="choix">

	<optgroup label="Ressource inerte">
		<option value="11">- Mélanges bitumineux (sans goudron)</option>
		<option value="12">-   Terres non polluées (hors terre végétale)</option>
		<option value="13">-	Béton</option>
		<option value="14">-	Pierr</option>
		<option value="15">-	Tuiles et ardoises</option>
		<option value="16">-	Briques</option>
		<option value="17">-	Carrelages et faïences</option>
		<option value="18">-	Mélange d’inertes listés ci-dessus sans DND</option>
		<option value="19">-	Autres inertes</option>
	</optgroup>

	<optgroup label="Ressource non dangereuse non inerte">
	<option value="2">-	Plâtre</option>
	<option value="12">-	Plaques et carreaux</option>
	<option value="13">-	Enduit et support inerte</option>
	<option value="14">-	Bois</option>
	<option value="15">-	Bois A (emballages, palettes)</option>
	<option value="16">-	Bois B (peints, meubles)</option>
	<option value="17">o	Cuivre</option>
	<option value="18">o	Aluminium</option>
	<option value="19">o	Ferreux</option>
	<option value="12">o	Zinc</option>
	<option value="13">o	Autres métaux non ferreux</option>
	<option value="14">o	PVC souple</option>
	<option value="15">o	PVC rigide</option>
	<option value="16">o	PP</option>
	<option value="16">o	PE</option>
	<option value="16">o	Autres plastiques</option>
	<option value="16">o	Moquette</option>
	<option value="16">o	Linoléum</option>
	<option value="16">o	Autres revêtements de sol</option>
	<option value="16">o	Panneaux sandwich</option>
	<option value="16">o	Complexes plâtre + isolant</option>
	<option value="16">o	Complexe d'étanchéité sans goudron</option>
	<option value="16">o	Autres matériaux complexes</option>
	<option value="16">-	Fenêtres et autres ouvertures vitrées : bois/alu/pvc et simple vitrage ou double vitrage</option>
	<option value="16">-	Mélange de DND listés ci-dessus</option>
	<option value="16">-	Végétaux</option>
	<option value="16">-	Terre végétale</option>
	<option value="16">-	Autres matériaux ou déchets non dangereux</option>
	</optgroup>

	<optgroup label="Ressource d’équipement">
	<option value="2">Équipements sanitaires (lavabos, éviers, WC…)</option>
	<option value="16"></option>
	<option value="16"></option>
	<option value="16"></option>
	<option value="16"></option>
	</optgroup>


	</select>

<div class="d-flex">
	<img src="img/materiaux.jpeg" class="hotelimg">
</div>
<div class="d-flex mt-4 mx-4">
    <h2>Bienvenue dans le boncoin du batiments
    	<b><?php // vérifier la connexion de l'utilisateur et afficher son nom d'utilisateur
		if ($user_logged) {
			$user_id = ($_SESSION['id']);
			$select_sql = "SELECT name FROM `users` WHERE id='$user_id'";
			$result = mysqli_query($connection, $select_sql);
			if ($result->num_rows > 0) {
				$row = mysqli_fetch_assoc($result);
				echo $row["name"];
				if (!$row["name"]) {
					 echo "Invité";
				}
			}
		} else {
		    echo "Invité";
		}
    	?></b> 	
    </h2>
</div>

<div class="d-flex my-2">
<?php // afficher un message de succès ou d'échec
  	if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
</div>

<div class="row main-section">
  <?php 
	$SelSql = "SELECT * FROM `produits`";
	$res = mysqli_query($connection, $SelSql); //exécuter la requête de sélection et stocker le

		$num_of_rows = mysqli_num_rows($res);
		if ($num_of_rows > 0) {
	    	// output data of each row
		    while($num_of_rows > 0) {
		    	$num_of_rows--;
		    	$r = mysqli_fetch_assoc($res);
		        include('templates/produit.php');
		    }
		} else {
		    echo "<p>No Product Available</p>";
		}
	?>
	</div>

<?php require('templates/footer.php') ?>
