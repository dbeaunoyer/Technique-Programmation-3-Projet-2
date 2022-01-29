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




    switch($_SERVER['REQUEST_METHOD'])
    {
    case 'GET':  // GESTION DES DEMANDES DE TYPE GET
        if(isset($_GET['id'])) { 
            if ($requete = $mysqli->prepare("SELECT * FROM forfaits WHERE id=?")) {  
              $requete->bind_param("i", $_GET['id']); 
              $requete->execute(); 
    
              $resultat_requete = $requete->get_result(); 
              $hotelSQL = $resultat_requete->fetch_assoc(); 
    
              // Conversion de l'objet au format JSON désiré
              $hotelObj = ConversionHotelSQL ($hotelSQL);
    
              echo json_encode($hotelObj, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    
              $requete->close(); 
            }
            } else { 
				$requete = $mysqli->query("SELECT * FROM forfaits");
                $listeForfaitsObj = [];
                while ($hotelSQL = $requete->fetch_assoc()){
                    $forfaitsOBJ = ConversionHotelSQL ($hotelSQL);
                    array_push($listeForfaitsObj, $forfaitsOBJ);
                }
                echo json_encode($listeForfaitsObj, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); // Transmission de l’objet au format JSON
                $requete->close();
			} 
			break;

                                                                  // GESTION DES DEMANDES DE TYPE POST //
            
case 'POST':  
	$reponse = new stdClass();
	$reponse->message = "Ajout d'un forfait: ";
	
	$corpsJSON = file_get_contents('php://input');
	$data = json_decode($corpsJSON, TRUE); 

    $destination = $data['destination'];
    $villedepart = $data['villedepart'];
    $nom = $data['hotel']['nom'];
    $coordonnees = $data['hotel']['coordonnees'];
    $etoiles = $data['hotel']['etoiles'];
    $chambres = $data['hotel']['chambres'];
    $caracteristiques = $data['hotel']['caracteristiques'];
    $datedepart = $data['datedepart'];
    $dateretour = $data['dateretour'];
    $prix = $data['prix'];
    $rabais = $data['rabais'];
    $vedette = $data['vedette'];


    if(isset($destination) 
    && isset($villedepart) 
    && isset($nom) 
    && isset($coordonnees)  
    && isset($etoiles) 
    && isset($chambres) 
    && isset($caracteristiques) 
    && isset($datedepart) 
    && isset($dateretour) 
    && isset($prix) 
    && isset($rabais) 
    && isset($vedette))  {

    $caracteristiques_str = implode(';', $caracteristiques);

    if ($requete = $mysqli->prepare("INSERT INTO forfaits (destination, villedepart, nom, coordonnees, etoiles, chambres, caracteristiques, datedepart, dateretour, prix, rabais, vedette) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);")) {      
        
        //destination s
        //villedepart s
        //nomvarchar s  
        //coordonnees s
        //etoilesint i
        //chambresint i
        //caracteristiques s
        //datedepartdate s
        //dateretourdate s
        //prixdecimal	d
        //rabaisdecimal d
        //vedettetinyint i
        
        $requete->bind_param("ssssiisssddi", 
                        $destination, 
                        $villedepart, 
                        $nom, 
                        $coordonnees, 
                        $etoiles, 
                        $chambres, 
                        $caracteristiques_str, 
                        $datedepart, 
                        $dateretour, 
                        $prix, 
                        $rabais, 
                        $vedette);
        if($requete->execute()) { 
            $reponse->message .= "Succès";  
        } else {
            $reponse->message .=  "Erreur dans l'exécution de la requête";  
        }

        $requete->close(); 
    } else  {
    $reponse->message .=  "Erreur dans la préparation de la requête";  
    } 
} else {
        $reponse->message .=  "Erreur dans le corps de l'objet fourni";  
}
echo json_encode($reponse, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

break;

                               



                                                            // GESTION DES DEMANDES DE TYPE PUT 


case 'PUT': 
    $reponse = new stdClass(); 
    $reponse->message = "Édition d'un forfait': "; 

    if(isset($_GET['id'])) { 

            $corpsJSON = file_get_contents('php://input'); 
            $data = json_decode($corpsJSON, TRUE); 

            $destination = $data['destination'];
            $villedepart = $data['villedepart'];
            $nom = $data['hotel']['nom'];
            $coordonnees = $data['hotel']['coordonnees'];
            $etoiles = $data['hotel']['etoiles'];
            $chambres = $data['hotel']['chambres'];
            $caracteristiques = $data['hotel']['caracteristiques'];
            $datedepart = $data['datedepart'];
            $dateretour = $data['dateretour'];
            $prix = $data['prix'];
            $rabais = $data['rabais'];
            $vedette = $data['vedette'];
        
            $caracteristiques_str = implode(';', $caracteristiques);

                if(isset($destination) 
                    && isset($villedepart)
                    && isset($nom)
                    && isset($coordonnees)
                    && isset($etoiles)
                    && isset($chambres)
                    && isset($caracteristiques_str)
                    && isset($datedepart)
                    && isset($dateretour)
                    && isset($prix)
                    && isset($rabais)
                    && isset($vedette)) {
     

                        if ($requete = $mysqli->prepare("UPDATE forfaits SET destination=?, villedepart=?, nom=?, coordonnees=?, etoiles=?, chambres=?, caracteristiques=?, datedepart=?, dateretour=?, prix=?, rabais=?, vedette=?  WHERE id=?")) 
                        
                    //destination s
                    //villedepart s
                    //nomvarchar s  
                    //coordonnees s
                    //etoilesint i
                    //chambresint i
                    //caracteristiques s
                    //datedepartdate s
                    //dateretourdate s
                    //prixdecimal	d
                    //rabaisdecimal d
                    //vedettetinyint i
                    // Id i 
                        
                        
                        {
                                $requete->bind_param("ssssiisssddii", 
                                $destination, 
                                $villedepart, 
                                $nom, 
                                $coordonnees, 
                                $etoiles, 
                                $chambres, 
                                $caracteristiques_str, 
                                $datedepart, 
                                $dateretour, 
                                $prix, 
                                $rabais, 
                                $vedette,
                                $_GET['id']); 

                        if($requete->execute()) { $reponse->message .= "Succès"; } else { $reponse->message .= "Erreur dans l'exécution de la requête :" .$requete->error; }
                        $requete->close();
                    } else { $reponse->message .= "Erreur dans la préparation de la requête";
                } 
                } else {$reponse->message .= "Erreur dans le corps de l'objet fourni";} 
        } else {$reponse->message .= "Erreur dans les paramètres (aucun identifiant fourni)"; } 
        
    echo json_encode($reponse, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); 


break; 


                                                                // GESTION DES DEMANDES DE TYPE DELETE // 

case 'DELETE':  
    $reponse = new stdClass(); 
    $reponse->message = "Suppression d'un forfait': "; 

    if(isset($_GET['id'])) { 
        // CODE PERMETTANT DE SUPPRIMER L'ENREGISTREMENT CORRESPONDANT À L'IDENTIFIANT PASSÉ EN PARAMÈTRE 


        
        if(isset($_GET['id'])) { 
            if ($requete = $mysqli->prepare("DELETE FROM forfaits WHERE id=?")) { 
                $requete->bind_param("i", $_GET['id']); 
                
                    if($requete->execute()) { $reponse->message .= "Succès"; }

                    else { $reponse->message .= "Erreur dans l'exécution de la requête :" .$requete->error; }
                    $requete->close();
                } else { $reponse->message .= "Erreur dans la préparation de la requête";
            } 
            } else {$reponse->message .= "Erreur dans le corps de l'objet fourni";} 
    } else {$reponse->message .= "Erreur dans les paramètres (aucun identifiant fourni)"; }
        echo json_encode($reponse, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
            
break;
default:
	$reponse = new stdClass();
	$reponse->message = "Opération non supportée";	
	echo json_encode($reponse, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
}

$mysqli->close(); 



?>