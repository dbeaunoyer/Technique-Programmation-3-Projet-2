<?php
include_once 'include/config.php';
include_once 'include/fonctions.php';

header("Content-Type: application/json; Charset=UTF-8");
header('Access-Control-Allow-Origin: *');


//la préparation


    $mysqli = new mysqli($host, $username, $password, $database);
    if ($mysqli->connect_errno) {
        echo "Échec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        exit(); 
    }


$resultat_requete = $mysqli->query("SELECT * FROM grossistes"); 
$donnees_tableau = $resultat_requete->fetch_all(MYSQLI_ASSOC); 
echo json_encode($donnees_tableau, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);	

$mysqli->close(); 



?>