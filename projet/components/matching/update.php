<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/projet/";

// Le fichier connect.php contient les informations pour se connecter à la base de données
require_once($path . 'connect.php');

// Initialise la session PHP
session_start();

// Vérifie que l'utilisateur est connecté, sinon affiche "Unauthorized Access"
if (!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)) {
	echo "Unauthorized Access";
	return;
}

// Récupère l'identifiant de l'élément à modifier depuis l'URL
$id = $_GET['id'];

// Sélectionne les données correspondant à cet identifiant depuis la table "matching"
$SelSql = "SELECT * FROM `matching` WHERE id=$id";
$res = mysqli_query($connection, $SelSql);
$r = mysqli_fetch_assoc($res);

// Vérifie si le formulaire a été soumis et traite les données soumises
if(isset($_POST) & !empty($_POST)){
	$product_no = ($_POST['product_no']);
	$customer_email = ($_POST['customer_email']);
	$Date_du_matching = ($_POST['Date_du_matching']);

	// Met à jour les données correspondant à cet identifiant dans la table "matching"
	$UpdateSql = "UPDATE `matching` SET product_no='$product_no', customer_email='$customer_email',Date_du_matching='$Date_du_matching' WHERE id='$id' ";
	$res = mysqli_query($connection, $UpdateSql);

	// Redirige vers la page de visualisation si la mise à jour a réussi, sinon affiche un message d'erreur
	if($res){
		header('location: view.php');
	}else{
		$fmsg = "Failed to Update data.";
	}
}
?>

<!-- Inclut les fichiers d'en-tête et de pied de page -->
<?php require($path . 'templates/header.php') ?>

	<div class="mt-4">
		<!-- Affiche un message d'erreur si la mise à jour a échoué -->
		<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>

		<!-- Formulaire permettant de modifier les données correspondant à cet identifiant -->
		<form method="post" class="mx-auto w-25">
            <div class="form-group">
                <label>Product Number</label>
				<input type="text" class="form-control" name="product_no" value="<?php echo $r['product_no']; ?>"/>
            </div> 
            <div class="form-group">
                <label>Customer Email</label>
				<input type="text" class="form-control" name="customer_email" value="<?php echo $r['customer_email']; ?>"/>
            </div> 
            <div class="form-group">
				<label>Date_du_matching</label>
				<input type="date" name="Date_du_matching" class="form-control" value="<?php echo $r['Date_du_matching']; ?>"/>
			</div>
			<input type="submit" class="btn btn-primary" value="Update" />
		</form>
	</div>
	
<!-- Inclut le fichier de pied de page -->
<?php require($path . 'templates/footer.php') ?>
