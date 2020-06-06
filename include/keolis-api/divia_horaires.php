<?php
require 'include/php/dbh.php';
$codeville = '217';
$ref_id = $_GET['ref'];

//Récupération de l'XML par l'API Keolis
$horaires_data = simplexml_load_file('http://timeo3.keolis.com/relais/' . $codeville . '.php?xml=3&refs=' . $ref_id . '&ran=1');

//Setup variables
$ligne = '';
$arret = '';
$direction = '';

//Liste des lignes & arrpets
foreach ($horaires_data->horaires as $val) {
        $ligne = $horaires_data->horaires->horaire->description->ligne;
        $arret = $horaires_data->horaires->horaire->description->arret;
        $direction = $horaires_data->horaires->horaire->description->vers;
    }

//Nombre d'horaires disponibles à afficher
foreach ($horaires_data->horaires->horaire->passages->attributes() as $a => $value) {
    $nombrePassages = $value;
}

//Tableau avec les horaires
$horaires_xml = array();

//On récupère les horaires
$j = 0;
foreach ($horaires_data->horaires->horaire->passages->passage as $character) {
    //Calcul heure entre maintenant et bus
    $heure = $horaires_data->heure;
    $heureXML = $horaires_data->horaires->horaire->passages->passage[$j]->duree;

    $heureBus = DateTime::createFromFormat('H:i', $heureXML);
    $heureMaintenant = DateTime::createFromFormat('H:i', $heure);

    $minutes = $heureBus->format('i') - $heureMaintenant->format('i');

    array_push($horaires_xml, $minutes);

    $j++;
}
