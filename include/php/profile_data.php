<?php
$user = $_SESSION['email'];
if (empty($user)) {
  header('Location: index.php');
}
require 'dbh.php';

$stmt = $connection->prepare('SELECT `nom`, `prenom`, `email`, `city` FROM `cot_users` WHERE `email` = ?');
        $stmt->bind_param("s", $user);
        $stmt->execute();

$result = $stmt->get_result();

$prenom = '';
$nom = '';
$email = '';
$ville = '';

while ($row = $result->fetch_array(MYSQLI_NUM))
{
  $prenom =  $row[0];
  $nom = $row[1];
  $email =  $row[2];
  $ville = $row[3];
}
?>

<?php

session_start();
$user = $_SESSION['email'];
if (empty($user)) {
  header('Location: index.php');
}
?>