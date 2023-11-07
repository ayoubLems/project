<?php
// Définit le chemin du dossier racine du serveur dans la variable $path en utilisant la superglobale $_SERVER
$path = $_SERVER['DOCUMENT_ROOT'];
// Ajoute "/projet/" au chemin racine
$path .= "/projet/";

// Inclut le fichier "connect.php" qui contient les informations de connexion à la base de données
require_once($path . 'connect.php');

// Récupère l'ID à supprimer en utilisant la superglobale $_GET
$id = $_GET['id'];

// Crée une requête SQL pour supprimer la ligne avec l'ID correspondant dans la table "matching"
$DelSql = "DELETE FROM `matching` WHERE id=$id";

// Exécute la requête SQL en utilisant la méthode mysqli_query() de PHP et stocke le résultat dans la variable $res
$res = mysqli_query($connection, $DelSql);

// Vérifie si la requête s'est bien déroulée en évaluant le résultat de la méthode mysqli_query()
if($res){
	// Redirige l'utilisateur vers la page "view.php" si la requête a réussi
	header('location: view.php');
}else{
	// Affiche un message d'erreur si la requête a échoué
	echo "Failed to delete";
}
?>