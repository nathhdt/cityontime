<?php
session_start();
if (isset($_POST['inscription-submit'])) {
    require 'dbh.php';
    $nom = mysqli_real_escape_string($connection, htmlspecialchars($_POST['inscription-nom']));
    $prenom = mysqli_real_escape_string($connection, htmlspecialchars($_POST['inscription-prenom']));
    $email = mysqli_real_escape_string($connection, htmlspecialchars($_POST['inscription-email']));
    $motdepasse = mysqli_real_escape_string($connection, htmlspecialchars($_POST['inscription-motdepasse']));
    $ville = mysqli_real_escape_string($connection, htmlspecialchars($_POST['inscription-ville']));

    $stmt = $connection->prepare('INSERT INTO `cot_users`(`nom`, `prenom`, `email`, `password`, `city`) VALUES (?,?,?,?,?)');
        $stmt->bind_param("sssss", $nom, $prenom, $email, $motdepasse, $ville);
        $stmt->execute();

    header('Location: ../../inscrit');
}
mysqli_close($connection);
?>