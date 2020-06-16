<?php
session_start();
$user = $_SESSION['email'];

require '../php/dbh.php';

//On récupère la réf.
$ref_id = $_GET['ref'];
//On récupère la vile
$ville = $_GET['ville'];

//On ajoute le favori dans la base de données
$stmt = $connection->prepare('DELETE FROM `cot_favoris` WHERE `email`= ? AND `city`= ? AND `ref`= ?');
$stmt->bind_param("sss", $user, $ville, $ref_id);
$stmt->execute();

mysqli_close($connection);

header('Location: ../../horaires?ref='.$ref_id);
?>