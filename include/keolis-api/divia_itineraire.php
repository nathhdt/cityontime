<?php
require 'include/php/dbh.php';
$codeville = '217';
$ref_id = $_GET['ref'];

//Récupération de l'XML par l'API Keolis
$horaires_data = simplexml_load_file('http://timeo3.keolis.com/relais/217.php?xml=3&refs='.$ref_id.'&ran=1');

//Setup variables
$ligne = '';
$arret = '';
$direction = '';

//Liste des lignes & arrpets
$i = 0;
foreach($horaires_data->horaires->horaire->description as $val)
{
    $ligne = $horaires_data->horaires->horaire->description->ligne;
    $arret = $horaires_data->horaires->horaire->description->arret;
    $direction = $horaires_data->horaires->horaire->description->vers;
}
?>