<?php
session_start();
$user = $_SESSION['email'];
if (empty($user)) {
  header('Location: ../../favoris.php');
}

require '../php/dbh.php';

//On récupère la réf.
$ref_id = $_GET['ref'];
//On récupère la vile
$ville = $_GET['ville'];

echo $ref_id;
echo $ville;

//On ajoute le favori dans la base de données
$stmt = $connection->prepare('INSERT INTO `cot_favoris`(`email`, `city`, `ref`) VALUES (?,?,?)');
$stmt->bind_param("sss", $user, $ville, $ref_id);
$stmt->execute();

mysqli_close($connection);

header('Location: ../../favoris.php');
?>