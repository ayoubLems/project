<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/projet/";

// Connexion à la base de données
require_once($path . 'connect.php');

// Initialisation de la session
session_start();

// Vérification des autorisations de l'utilisateur
if (!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['role'] == 'customer')) {
	echo "Accès non autorisé";
	return;
}

// Vérification si des données ont été envoyées via la méthode POST
if(isset($_POST) & !empty($_POST)){
	$type = ($_POST['type']);
	$price = ($_POST['price']);
	$description = ($_POST['description']);

	// Stockage et téléversement de l'image
    $image = $_FILES['image']['name']; 
    $dir="../img/produits/";
    $temp_name=$_FILES['image']['tmp_name'];
    if($image!="")
    {
        // Vérification si le fichier existe déjà
        if(file_exists($dir.$image))
        {
            $image= time().'_'.$image;
        }
        $fdir= $dir.$image;
        move_uploaded_file($temp_name, $fdir);
    }

    // Exécution de la requête pour insérer les données dans la base de données
	$query = "INSERT INTO `produits` ( type, price, description, image) VALUES ('$type', '$price', '$description', '$image')";
	$res = mysqli_query($connection, $query);
	if($res){
		// Redirection vers la page de visualisation des produits
		header('location: view.php');
	}else{
		$fmsg = "Échec de l'insertion de données.";
		print_r($res->error_list);
	}
}
?>
<?php require_once($path . 'templates/header.php') ?>
<div class="container">
<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
	<h2 class="my-4">Ajouter un produit</h2>
	<form method="post" enctype="multipart/form-data">
		<div class="form-group">
            <label>Type</label>
			<input type="text" id="id" class="form-control" name="type" value="" required/>
        </div> 
        <div class="form-group">
            <label>Prix</label>
			<input type="number" class="form-control" name="price" value="" required/>
        </div> 
        <div class="form-group">
            <label>Description</label>
			<input type="text" class="form-control" name="description" value=""/>
        </div> 
        <div class="form-group">
            <label>Image</label>
			<input type="file" class="form-control" name="image" accept=".png,.gif,.jpg,.webp" required/>
        </div> 
		<input type="submit" class="btn btn-primary" value="Ajouter le produit" />
	</form>
</div>
<?php require_once($path . 'templates/footer.php') ?>


