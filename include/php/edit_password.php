<?php
session_start();
$user = $_SESSION["email"];
if (isset($_POST['type-submit'])) {
    require 'dbh.php';

    //Vérification ancien mot de passe
    if (empty($_POST["oldpw"]) || empty($_POST["newpw"]) || empty($_POST["confnewpw"])) {
            header('Location: ../../profil.php');
            exit();
    } else {
        $request = "SELECT count(*) FROM cot_users where email = '" . $user . "' and password = '" . $_POST['oldpw'] . "' ";
        $exec_request = mysqli_query($connection, $request);
        $reponse      = mysqli_fetch_array($exec_request);
        $count = $reponse['count(*)'];

        if ($count != 0) // Nom d'utilisateur et mot de passe corrects
            {
                //Ancien mot de passe ok
            } else {
                header('Location: ../../profil.php?oldpw=false');
                //Ancien mot de passe différent !
            }
    }

    //Vérification que les 2 mdp entrés sont les mêmes
    if ($_POST["newpw"] == $_POST["confnewpw"]) {
        //Les mots de passe correspondent
    } else {
        header('Location: ../../profil.php?diff=true');
        //Les mots de passe sont différents !
    }

    //Si on passe les tests et que tout est ok, exécution modification mdp
    //Exécution de la requête
    $stmt = $connection->prepare('UPDATE `cot_users` SET `password`= ? WHERE `email`= ?');
    $stmt->bind_param('ss', $_POST["newpw"], $user);
    $stmt->execute();

    //Redirection avec popup
    header('Location: ../../profil.php?success=true');

}
mysqli_close($connection);
