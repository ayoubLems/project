<?php
// Récupère le chemin racine du serveur web
$path = $_SERVER['DOCUMENT_ROOT'];
// Ajoute le sous-chemin "/projet/" au chemin racine
$path .= "/projet/";

// Inclut le fichier "connect.php" qui contient les informations de connexion à la base de données
require_once($path . 'connect.php');

// Récupère l'identifiant du produit à supprimer depuis la variable GET
$id = $_GET['id'];

// Crée une requête SQL pour supprimer le produit avec l'identifiant récupéré
$DelSql = "DELETE FROM `produits` WHERE id=$id";

// Exécute la requête SQL en utilisant la connexion à la base de données
$res = mysqli_query($connection, $DelSql);

// Si la requête s'est exécutée avec succès, redirige l'utilisateur vers la page "view.php"
if($res){
	header('location: view.php');
}else{
	// Sinon, affiche un message d'erreur
	echo "Failed to delete";
}
?> 