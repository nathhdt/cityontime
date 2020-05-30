<?php
session_start();
if (isset($_POST['type-submit'])) {
    require 'dbh.php';

    //Utilisateur
    $user = $_SESSION['email'];
    //Ville sélectionnée
    $ville = $_POST['choixville'];
    $nomville = '';

    //Récupération nom de la ville en fct. de l'index du select HTML
    if ($ville == 0) {
        $nomville = 'Dijon';
    } elseif ($ville == 1) {
        $nomville = 'Angers';
    } else {
        $nomville = 'Nantes';
    }

    //Exécution de la requête
    $stmt = $connection->prepare('UPDATE `cot_users` SET `city`= ? WHERE `email`= ?');
    $stmt->bind_param('ss', $nomville, $user);
    $stmt->execute();

    //Redirection avec popup
    header('Location: ../../profil.php?success=true');
}
mysqli_close($connection);
?>