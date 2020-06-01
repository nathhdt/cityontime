<?php

require 'include/php/dbh.php';

$stmt = $connection->prepare('SELECT `ligne_nom`, `arret`, `direction` FROM `cot_divia_arrets`');
        $stmt->execute();

$result = $stmt->get_result();

//var directions = [$liste_directions]

$liste_arrets = '["';
$liste_directions = '["';



//Arrêts
while ($row = $result->fetch_array(MYSQLI_NUM))
{
  $liste_arrets = $liste_arrets.$row[1].'", "';
  $liste_directions = $liste_directions.$row[0].' - '.$row[2].'", "';
}

//Corrections syntaxe tableaux
$liste_arrets = substr($liste_arrets, 0, -3);
$liste_arrets = $liste_arrets.']';
$liste_directions = substr($liste_directions, 0, -3);
$liste_directions = $liste_directions.']';

echo $liste_arrets;
echo ',';
echo $liste_directions;

?>