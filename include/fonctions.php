<?php

function ConversionHotelSQL($hotelSQL) {
    $forfaitsOBJ  = new stdClass();
    $forfaitsOBJ ->destination = $hotelSQL["destination"];
    $forfaitsOBJ ->villedepart = $hotelSQL["villedepart"];


    $forfaitsOBJ->hotel = new stdClass();
    $forfaitsOBJ->hotel ->nom = $hotelSQL["nom"];
    $forfaitsOBJ->hotel ->coordonnees = $hotelSQL["coordonnees"];
    $forfaitsOBJ->hotel ->etoiles = $hotelSQL["etoiles"];
    $forfaitsOBJ->hotel ->chambres = $hotelSQL["chambres"];
    
    $forfaitsOBJ->hotel ->caracteristiques = explode(";", $hotelSQL["caracteristiques"]);
        
    $forfaitsOBJ->datedepart = $hotelSQL["datedepart"];
    $forfaitsOBJ->dateretour = $hotelSQL["dateretour"];
    $forfaitsOBJ->prix = $hotelSQL["prix"];
    $forfaitsOBJ->rabais = $hotelSQL["rabais"];
    $forfaitsOBJ->vedette = $hotelSQL["vedette"];

    return $forfaitsOBJ;
}   

?>