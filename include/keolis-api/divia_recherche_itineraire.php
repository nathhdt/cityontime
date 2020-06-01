<?php
if (isset($_POST['type-submit'])) {

    //Récupération des infos de la Form
    $depart = $_POST['depart'];
    $arrivee = $_POST['arrivee'];
    echo 'Départ: '.$depart.'<br>Arrivée: '.$arrivee;
}
?>