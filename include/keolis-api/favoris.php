<?php
require 'include/php/dbh.php';

//On récupère les favoris de l'utilisateur
$stmt = $connection->prepare('SELECT `city`, `ref` FROM `cot_favoris` WHERE `email`= ?');
$stmt->bind_param("s", $user);
$stmt->execute();

$result = $stmt->get_result();

//Tableux de données ville/refs depuis base de données
$city = [];
$ref = [];
while ($row = $result->fetch_array(MYSQLI_NUM)) {
  array_push($city, $row[0]);
  array_push($ref, $row[1]);
}

//On récupère les horaires
$codeville = '';
$transport = '';

//Tableaux des données favoris
$listeLignes = [];
$listeArrets = [];
$listeDirections = [];
$listeHoraires = [];
$liensArrets = [];

//Pour chaque réf. de la base de données
$j = 0;
foreach ($ref as $curr_ref) {
  //Quelle ville
  if ($city[$j] == 'Dijon') {
    $codeville = '217';
    $transport = 'divia';
  }

  //Récupération de l'XML par l'API Keolis
  $horaires_data = simplexml_load_file('http://timeo3.keolis.com/relais/' . $codeville . '.php?xml=3&refs=' . $curr_ref . '&ran=1');

  //Liste des lignes & arrets
  foreach ($horaires_data->horaires as $val) {
    array_push($listeLignes, $horaires_data->horaires->horaire->description->ligne);
    array_push($listeArrets, $horaires_data->horaires->horaire->description->arret);
    array_push($listeDirections, $horaires_data->horaires->horaire->description->vers);
    array_push($liensArrets, 'horaires?ref='.$curr_ref);
  }

  //On récupère les horaires
  $k = 0;
  foreach ($horaires_data->horaires->horaire->passages->passage as $character) {
    //On récupère les horaires bus/maintenant
    $now = strtotime($horaires_data->heure);
    $bus = strtotime($horaires_data->horaires->horaire->passages->passage[$k]->duree);

    //Différence de temps
    $time = $bus - $now;

    //Conversion en minutes
    $mn = $time / 60;

    //On envoie une unique valeur dans le tableau pour affichage
    if ($k == 0) {
      array_push($listeHoraires, $mn);
    } 
    $k++;
  }
  $j++;
}
//$j = nombre de favoris
?>