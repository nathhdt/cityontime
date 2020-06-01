<?php
if (isset($_POST['type-submit'])) {

    //Récupération des infos de la Form
    $arret = $_POST['arret'];
    $direction = $_POST['direction'];
    echo 'Arrêt: '.$arret.'<br>Direction: '.$direction;
}
?>