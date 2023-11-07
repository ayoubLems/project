<?php
// définition du chemin de la racine du site web
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/projet/";

// connexion à la base de données
require_once($path . 'connect.php');

// Initialisation de la session
session_start();

// Vérification des autorisations de l'utilisateur
if (!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['role'] == 'admin'|| $_SESSION['role'] == 'customer')) {
	// Si l'utilisateur n'est pas connecté ou n'a pas les autorisations nécessaires, affichez un message d'erreur et arrêtez l'exécution du script
	echo "Unauthorized Access";
	return;
}

// Requête SQL pour récupérer tous les produits
$ReadSql = "SELECT * FROM `produits`";
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
			<th>Prod No.</th> 
			<th>Type de produit</th> 
			<th>Price</th> 
			<th>Description</th>
			<th>Action</th>
		</tr> 
	</thead> 
	<tbody> 
	<?php 
	// Boucle while pour afficher chaque produit récupéré de la base de données
	while($r = mysqli_fetch_assoc($res)){
	?>
		<tr> 
			<th scope="row"><?php echo $r['id']; ?></th> 
			<td><?php echo $r['type']; ?></td> 
			<td><?php echo $r['price']; ?></td> 
			<td><?php echo $r['description']; ?></td> 
			<td>
				<a href="update.php?id=<?php echo $r['id']; ?>"><button type="button" class="btn btn-info">Edit</button></a>

				<button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal<?php echo $r['id']; ?>">Delete</button>

				<!-- Modal pour confirmer la suppression d'un produit -->
				  <div class="modal fade" id="myModal<?php echo $r['id']; ?>" role="dialog">
				    <div class="modal-dialog">
				      <div class="modal-content">
				        <div class="modal-header">
                          <!-- Titre du modal -->
                          <h5 class="modal-title">Delete matching</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
				        </div>
				        <div class="modal-body">
				          <!-- Message de confirmation -->
				          <p>Are you sure?</p>
				        </div>
				        <div class="modal-footer">
                          <!-- Bouton Annuler pour fermer le modal -->
				          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                          <!-- Bouton pour supprimer définitivement le produit -->
				          <a href="delete.php?id=<?php echo $r['id']; ?>"><button type="button" class="btn btn-danger"> Yes, Delete</button></a>
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