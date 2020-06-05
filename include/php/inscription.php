<?php
session_start();
if (isset($_POST['inscription-submit'])) {
    require 'dbh.php';
    $nom = mysqli_real_escape_string($connection, htmlspecialchars($_POST['inscription-nom']));
    $prenom = mysqli_real_escape_string($connection, htmlspecialchars($_POST['inscription-prenom']));
    $email = mysqli_real_escape_string($connection, htmlspecialchars($_POST['inscription-email']));
    $motdepasse = mysqli_real_escape_string($connection, htmlspecialchars($_POST['inscription-motdepasse']));
    $ville = mysqli_real_escape_string($connection, htmlspecialchars($_POST['inscription-ville']));

    echo $nom.'<br>';
    echo $prenom.'<br>';
    echo $email.'<br>';
    echo $motdepasse.'<br>';
    echo $ville.'<br>';

    //Check si form complète
    if (empty($nom) || empty($prenom) || empty($email) || empty($motdepasse) || $ville == '0') {
        //Form pas complétée
        header('Location: ../../inscription?incomplet=true');
        exit();
    } else {
        //Check si utilisteur existe déjà
        $request = "SELECT count(*) FROM cot_users WHERE email = '" . $email . "' ";
        $exec_request = mysqli_query($connection, $request);
        $reponse      = mysqli_fetch_array($exec_request);
        $count = $reponse['count(*)'];

        if ($count != 0) //Utilisateur existe !
            {
                //Ancien mot de passe ok
                header('Location: ../../inscription?email=true');
                exit();
            } else {
            //On introduit l'utilisateur dans la BDD
            $stmt = $connection->prepare('INSERT INTO `cot_users`(`nom`, `prenom`, `email`, `password`, `city`) VALUES (?,?,?,?,?)');
            $stmt->bind_param("sssss", $nom, $prenom, $email, $motdepasse, $ville);
            $stmt->execute();

            //Page inscrit
            header('Location: ../../inscrit');
        }
    }
}
mysqli_close($connection);
