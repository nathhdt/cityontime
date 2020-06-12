<?php
session_start();
$user = $_SESSION["email"];
if (isset($_POST['type-submit'])) {
    require 'dbh.php';

    //Vérification ancien mot de passe
    $oldPass = $_POST["oldpw"];
    $newPass = $_POST["newpw"];
    $confNewPass = $_POST["confnewpw"];

    //Hashs MD5
    $oldPass_md5 = md5($oldPass);
    $newPass_md5 = md5($newPass);
    $confNewPass_md5 = md5($confNewPass);

    if (empty($oldPass) || empty($newPass) || empty($confNewPass)) {
        header('Location: ../../profil.php');
        exit();
    } else {
        $request = "SELECT count(*) FROM cot_users WHERE email = '" . $user . "' AND password = '" . $oldPass_md5 . "' ";
        $exec_request = mysqli_query($connection, $request);
        $reponse      = mysqli_fetch_array($exec_request);
        $count = $reponse['count(*)'];

        if ($count != 0)
            {
                //Ancien mot de passe ok
                //Vérification que les 2 mdp entrés sont les mêmes
                if ($newPass == $confNewPass) {
                    //Les mots de passe correspondent

                    //Si on passe les tests et que tout est ok, exécution modification mdp
                    //Exécution de la requête
                    $stmt = $connection->prepare('UPDATE `cot_users` SET `password`= ? WHERE `email`= ?');
                    $stmt->bind_param('ss', $newPass_md5, $user);
                    $stmt->execute();

                    //Redirection avec popup
                    header('Location: ../../profil.php?success=true');
                } else {
                    header('Location: ../../profil.php?diff=true');
                    exit();
                    //Les mots de passe sont différents !
                }
            } else {
            //Ancien mot de passe différent !
            header('Location: ../../profil.php?oldpw=false');
            exit();
        }
    }
}
mysqli_close($connection);
