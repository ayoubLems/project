<?php
// Récupère le chemin racine du serveur web
$path = $_SERVER['DOCUMENT_ROOT'];
// Ajoute le sous-chemin "/projet/" au chemin racine
$path .= "/projet/";

// Inclut le fichier "connect.php" qui contient les informations de connexion à la base de données
require_once($path . 'connect.php');

// Initialise la session
session_start();

// Vérifie si l'utilisateur est connecté et a le rôle d'administrateur
if (!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['role'] == 'admin')) {
	echo "Unauthorized Access";
	return;
}

// Récupère l'identifiant du produit à modifier depuis la variable GET
$id = $_GET['id'];

// Crée une requête SQL pour récupérer les informations du produit avec l'identifiant récupéré
$SelSql = "SELECT * FROM `produits` WHERE id=$id";
$res = mysqli_query($connection, $SelSql);
$r = mysqli_fetch_assoc($res);

// Si des données ont été soumises via la méthode POST
if(isset($_POST) & !empty($_POST)){
	// Récupère les données soumises depuis les champs de formulaire
	$type = ($_POST['type']);
	$price = ($_POST['price']);
	$description = ($_POST['description']);
	// Stocke et télécharge l'image soumise
    $image = $_FILES['image']['name']; 
    $dir="../img/produits/";
    $temp_name=$_FILES['image']['tmp_name'];
    if($image!="")
    {
        if(file_exists($dir.$image))
        {
            $image= time().'_'.$image;
        }
        $fdir= $dir.$image;
        move_uploaded_file($temp_name, $fdir);
    }else {
    	$image = $r['img'];
    }

    // Crée une requête SQL pour mettre à jour les données du produit avec l'identifiant récupéré
	$query = "UPDATE `produits` SET type='$type', price='$price', description='$description', image='$image' WHERE id='$id'";
	
	// Exécute la requête SQL en utilisant la connexion à la base de données
	$res = mysqli_query($connection, $query);
	if($res){
		// Redirige l'utilisateur vers la page "view.php" en cas de succès
		header('location: view.php');
	}else{
		// Sinon, affiche un message d'erreur
		$fmsg = "Failed to Insert data.";
		print_r($res->error_list);
	}
}
?>
<?php require_once($path . 'templates/header.php') ?>

	<div class="container">
	<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
		<h2 class="my-4">Add New Product</h2>
		<form method="post" enctype="multipart/form-data">
			<div class="form-group">
                <label>Type</label>
				<input type="text" class="form-control" name="type" value="<?php echo $r['type'];?>" required/>
            </div> 
            <div class="form-group">
                <label>New Price</label>
				<input type="text" class="form-control" name="price" value="<?php echo $r['price'];?>" required/>
            </div> 
            <div class="form-group">
                <label>Description</label>
				<input type="text" class="form-control" name="description" value="<?php echo $r['description'];?>"/>
            </div> 
            <div class="form-group">
                <label>New Image</label>
				<input type="file" class="form-control" name="image" accept=".png,.gif,.jpg,.webp"/>
            </div> 
			<input type="submit" class="btn btn-primary" value="Update" />
		</form>
	</div>
	
<?php require_once($path . 'templates/footer.php') ?>