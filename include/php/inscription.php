<?php
//Check reCAPTCHA v3
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['recaptcha_response'])) {

    //Requête POST à Google
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = '6LcE8QAVAAAAAG3QXF3_Xrc7stagUp9Pi44pEC7P';
    $recaptcha_response = $_POST['recaptcha_response'];

    //On décode la réponse JSON de Google
    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);

    //Check du score client
    if ($recaptcha->score >= 0.5) {
        //>= 0.5, pas un bot
        session_start();
        require 'dbh.php';
        $nom = mysqli_real_escape_string($connection, htmlspecialchars($_POST['inscription-nom']));
        $prenom = mysqli_real_escape_string($connection, htmlspecialchars($_POST['inscription-prenom']));
        $email = mysqli_real_escape_string($connection, htmlspecialchars($_POST['inscription-email']));
        $motdepasse = mysqli_real_escape_string($connection, htmlspecialchars($_POST['inscription-motdepasse']));
        $ville = mysqli_real_escape_string($connection, htmlspecialchars($_POST['inscription-ville']));

        //Hash MD5
        $motdepasse_md5 = md5($motdepasse);

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
                $stmt->bind_param("sssss", $nom, $prenom, $email, $motdepasse_md5, $ville);
                $stmt->execute();

                //Page inscrit
                header('Location: ../../inscrit');
            }
        }
        mysqli_close($connection);
    } else {
        //<= 0.5, bot !
        header('Location: ../../inscription?captcha=false');
        exit();
    }
}
