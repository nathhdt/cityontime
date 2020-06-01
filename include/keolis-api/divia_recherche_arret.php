<?php
if (isset($_POST['type-submit'])) {

    //Récupération des infos de la Form
    $arret = $_POST['arret'];
    $direction = $_POST['direction'];
    $ligne = substr($direction, 0,2);
    $direction = substr($direction, 5);

    require '../php/dbh.php';

    $stmt = $connection->prepare('SELECT `arret_ref` FROM `cot_divia_arrets` WHERE `arret`= ? AND `direction`= ? AND `ligne_nom`= ?');
            $stmt->bind_param("sss", $arret, $direction, $ligne);
            $stmt->execute();
    
    $result = $stmt->get_result();
    
    $row = $result->fetch_array(MYSQLI_NUM);

    $arret_ref = $row[0];


    //Redirection vers la page horaires
    header('Location: ../../horaires?ref='.$arret_ref);
}
?>