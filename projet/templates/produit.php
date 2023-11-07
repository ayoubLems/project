
<?php include('connect.php'); ?>
<div class="col-3 my-2">
	<div class="card m-auto produit" style="width: 20rem;">
		<img class="card-img-top" src="img/produits/<?php echo $r['image']; ?>" alt="Card Image Caption">
		<div class="card-body">
			<h4 class="card-title"><?php echo $r['type']; ?></h4>
			<p class="card-text"><?php echo $r['description']; ?></p>
		

			
			<!-- Button trigger modal -->
			<button type="button" class="btn book-button" data-toggle="modal" data-target="#confirmOrder<?php echo $r["id"]; ?>">
				<span class="text-white"><i class=" text-white"></i> Je suis interesse</span>
			</button>

			<!-- Modal -->
			<div class="modal" id="confirmOrder<?php echo $r["id"]; ?>" tabindex="-1" role="dialog" aria-labelledby="confirmTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<form method="post">
							<input type="number" name="product_no" value="<?php echo $r["id"]; ?>" hidden>
							<div class="modal-header">
								<h3 class="modal-title" id="confirmTitle">Mattching offres et demandes</h3>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<div class="form-group">
									<label>Email Address</label>
									<input type="email" name="customer_email" class="form-control" 
									value="<?php 
									if ($user_logged) { 
										echo $_SESSION['email'];
									}
									?>" required="true">
								</div>
								<div class="form-group">
									<label>nom_client</label>
									<input type="text" name="nom_client" class="form-control" value="nom"/>
								</div>
								<div class="form-group">
									<label>prix_estime</label>
									<input type="number" name="prix_estime" class="form-control" value="0"/>
								</div>
								<div class="form-group">
									<label>Commentaire</label>
									<input type="char" name="commentaire" class="form-control" placeholder="commentaire"/>
								</div>
								<div class="form-group">
									<label>Date_du_matching</label>
									<input type="Date" name="Date_du_matching" class="form-control" placeholder="Date"/>
								</div>


							</div>
							
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
								<button type="submit" class="btn btn-primary">Confirm</button>
							</div>
							</form>
							<?php
$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'projet');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}

// Vérifier si le formulaire a été soumis
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Récupérer les données soumises
    $product_no = $_POST['product_no'];
    $customer_email = $_POST['customer_email'];
    $nom_client = $_POST['nom_client'];
    $prix_estime = $_POST['prix_estime'];
    $commentaire = $_POST['commentaire'];
    $Date_du_matching = $_POST['Date_du_matching'];

	echo "Le formulaire est soumis.";
	


    // Insérer les données dans la base de données
    $query = "INSERT INTO matching (product_no, customer_email, nom_client, prix_estime, commentaire, Date_du_matching) VALUES ('$product_no', '$customer_email', '$nom_client', '$prix_estime', '$commentaire', '$Date_du_matching')";
    $result = mysqli_query($connection, $query);

    // Vérifier si l'insertion a réussi
    if($result){
        echo "Les données ont été enregistrées avec succès.";
    }else{
        echo "Une erreur s'est produite lors de l'enregistrement des données : " . mysqli_error($connection);
    }
}

?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

