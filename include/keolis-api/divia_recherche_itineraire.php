<?php
if (isset($_POST['type-submit'])) {
    //Setup
    require '../php/dbh.php';

    //Récupération des infos de la Form
    $depart = $_POST['depart'];
    $arrivee = $_POST['arrivee'];

    //Informations
    echo "Départ: " . $depart . "<br>Arrivée: " . $arrivee . "<br><br><br>##########<br>";





    //Liste des lignes sur le départ
    $stmt = $connection->prepare('SELECT `ligne_nom` FROM `cot_divia_arrets` WHERE `arret`= ?');
    $stmt->bind_param("s", $depart);
    $stmt->execute();
    $result = $stmt->get_result();
    $listeLignesDepart = [];

    while ($row = $result->fetch_array(MYSQLI_NUM)) {
        array_push($listeLignesDepart, $row[0]);
    }

    //Liste des lignes sur l'arrivée
    $stmt = $connection->prepare('SELECT `ligne_nom` FROM `cot_divia_arrets` WHERE `arret`= ?');
    $stmt->bind_param("s", $arrivee);
    $stmt->execute();
    $result = $stmt->get_result();
    $listeLignesArrivee = [];

    while ($row = $result->fetch_array(MYSQLI_NUM)) {
        array_push($listeLignesArrivee, $row[0]);
    }

    //Suppression des doublons de la liste des lignes départ/arrivée
    $listeLignesDepart = array_unique($listeLignesDepart);
    $listeLignesArrivee = array_unique($listeLignesArrivee);

    //Echo des lignes départ/arrivée
    echo "<br><br>LIGNES A " . $depart . ":<br><br>"; //Départ

    foreach ($listeLignesDepart as $lld) {
        echo " - " . $lld . "<br>";
    }
    echo "<br><br>LIGNES A " . $arrivee . ":<br><br>"; //Arrivée
    foreach ($listeLignesArrivee as $lla) {
        echo " - " . $lla . "<br>";
    }





    //Recherche des lignes annexes aux lignes DEPART
    $listeArretsAccessiblesDepuisDepart = [];

    echo "<br><br>##########<br><br><br>ARRÊTS ANNEXES A " . $depart . "<br><br>";
    foreach ($listeLignesDepart as $lld) {
        //Liste des arrêts de la ligne
        $stmt = $connection->prepare('SELECT `arret` FROM `cot_divia_arrets` WHERE `ligne_nom`= ?');
        $stmt->bind_param("s", $lld);
        $stmt->execute();
        $result = $stmt->get_result();

        while ($row = $result->fetch_array(MYSQLI_NUM)) {
            array_push($listeArretsAccessiblesDepuisDepart, $row[0]);
        }
    }
    //Suppression des doublons de la liste des arrêts accessibles depuis le départ
    $listeArretsAccessiblesDepuisDepart = array_unique($listeArretsAccessiblesDepuisDepart);

    //Affichage des arrêts accessibles depuis le départ
    foreach ($listeArretsAccessiblesDepuisDepart as $laadd) {
        echo " - " . $laadd . "<br>";
    }





    //Recherche des lignes annexes aux lignes ARRIVEE
    $listeArretsAccessiblesDepuisArrivee = [];

    echo "<br><br>##########<br><br><br>ARRÊTS ANNEXES A " . $arrivee . "<br><br>";
    foreach ($listeLignesArrivee as $lla) {
        //Liste des arrêts de la ligne
        $stmt = $connection->prepare('SELECT `arret` FROM `cot_divia_arrets` WHERE `ligne_nom`= ?');
        $stmt->bind_param("s", $lla);
        $stmt->execute();
        $result = $stmt->get_result();

        while ($row = $result->fetch_array(MYSQLI_NUM)) {
            array_push($listeArretsAccessiblesDepuisArrivee, $row[0]);
        }
    }
    //Suppression des doublons de la liste des arrêts accessibles depuis le départ
    $listeArretsAccessiblesDepuisArrivee = array_unique($listeArretsAccessiblesDepuisArrivee);

    //Affichage des arrêts accessibles depuis le départ
    foreach ($listeArretsAccessiblesDepuisArrivee as $laada) {
        echo " - " . $laada . "<br>";
    }





    //Correspondances viables entre les arrêts listés ici
    $correspondances = array_intersect($listeArretsAccessiblesDepuisDepart, $listeArretsAccessiblesDepuisArrivee);
    if ($correspondances !== false) {
        echo '<br><br>##########<br><br>CORRESPONDANCES DISPONIBLES (1 SEUL CHANGEMENT)<br><br>';
        foreach ($correspondances as $k => $v) {
            echo " - $v<br>";
        }
    }




    
}
