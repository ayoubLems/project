<?php
$path = $_SERVER['DOCUMENT_ROOT']; //chemin racine du serveur web
$path .= "/projet/"; //chemin vers le dossier du projet

require_once($path . 'connect.php'); //inclusion du fichier de connexion à la base de données

// Initialize the session
session_start(); //initialisation de la session

// Vérifie si l'utilisateur est authentifié en tant qu'administrateur
if (!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['role'] == 'admin')) {
	echo "Unauthorized Access"; //affiche un message d'erreur si l'utilisateur n'est pas autorisé à accéder à la page
	return; //termine l'exécution du script
}

// Si l'utilisateur est authentifié en tant qu'administrateur
if ($_SESSION['role'] == 'admin') {
	$ReadSql = "SELECT * FROM `matching` ORDER BY id"; //requête SQL pour récupérer tous les matchings dans la base de données
	# code...
}else {
	$email =$_SESSION['email'];
	$ReadSql = "SELECT * FROM `matching` WHERE customer_email='$email' ORDER BY id"; //requête SQL pour récupérer les matchings associés à l'e-mail de l'utilisateur connecté
}

$res = mysqli_query($connection, $ReadSql); //exécute la requête SQL et stocke les résultats dans la variable $res

?>

<?php require($path . 'templates/header.php') ?> <!-- inclusion du fichier d'en-tête HTML -->

	<div class="container-fluid my-4">
		<div class="row my-2">
			<h2>Matching</h2>	
		</div>
		<table class="table "> 
		<thead> 
			<tr> 
				<th>matching No.</th> 
				<th>product no.</th> 
				<th>Customer Email</th> 
				<th>Nom client</th>
				<th>Prix estime</th>  
				<th>commentaire</th> 
				<th>Date du matching</th> 
				<th>Action</th>
			</tr> 
		</thead> 
		<tbody> 
		<?php 
		while($r = mysqli_fetch_assoc($res)){ //boucle pour afficher chaque ligne de résultat dans un tableau HTML
		?>
			<tr> 
				
			<th scope="row"><?php echo $r["id"]; ?></th>  
				<td><?php echo $r["product_no"]; ?></td> 
				<td><?php echo $r["customer_email"]; ?></td>
				<td><?php echo $r["nom_client"]; ?></td> 
				<td><?php echo $r["prix_estime"]; ?></td>
				<td><?php echo $r["commentaire"]; ?></td>
				<td><?php echo $r["Date_du_matching"]; ?></td> 
				<td>
					<a href="update.php?id=<?php echo $r["id"]; ?>"><button type="button" class="btn btn-info">Edit</button></a> <!-- bouton pour éditer une ligne de matching -->
					<button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal">Delete</button> <!-- bouton pour supprimer une ligne de matching -->

					<!-- Modal pour la suppression d'une ligne de matching -->
					  <div class="modal fade" id="myModal" role="dialog
					  <div class="modal-dialog">
					    
					      <!-- Modal content-->
					      <div class="modal-content">
					        <div class="modal-header">
                            <h5 class="modal-title">Delete matching</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
					        </button>
					        </div>
					        <div class="modal-body">
					          <p>Are you sure?</p>
					        </div>
					        <div class="modal-footer">
					          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					          <a href="delete.php?id=<?php echo $r["id"]; ?>"><button type="button" class="btn btn-danger"> Yes, Delete</button></a>
					        </div>
					      </div>
					      
					    </div>
					  </div>

				</td>
			</tr> 
		<?php } ?>
		</tbody> 
		</table>
	</div>  


<div id="confirm" class="modal hide fade">
  <div class="modal-body">
    Are you sure?
  </div>
  <div class="modal-footer">
    <button type="button" data-dismiss="modal" class="btn">Cancel</button>
  </div>
</div>

<?php require($path . 'templates/footer.php') ?>