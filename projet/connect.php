<?php
$connection = mysqli_connect('localhost', 'root', ''); 
// Connexion à la base de données avec l'utilisateur 'root' sur le serveur 'localhost'
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection)); 
    // Arrêter le script si la connexion a échoué et afficher l'erreur MySQL
}
$select_db = mysqli_select_db($connection, 'projet'); 
// Sélectionner la base de données 'projet'
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection)); 
    // Arrêter le script si la sélection de la base de données a échoué et afficher l'erreur MySQL
}

