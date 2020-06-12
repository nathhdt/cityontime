<?php
session_start();
if (isset($_POST['signin-submit'])) {
  require 'dbh.php';
  $email = mysqli_real_escape_string($connection,htmlspecialchars($_POST['uem']));
  $password = mysqli_real_escape_string($connection,htmlspecialchars($_POST['pwd']));

  //Hash MD5 pwd
  $password_md5 = md5($password);

  if (empty($email) || empty($password))
    {
      header('Location: ' . $_SERVER['HTTP_REFERER']);
      exit();
    }
  else
    {

      $request = "SELECT count(*) FROM cot_users where
               email = '".$email."' and password = '".$password_md5."' ";
        $exec_request = mysqli_query($connection,$request);
        $reponse      = mysqli_fetch_array($exec_request);
        $count = $reponse['count(*)'];

        if($count!=0) // Nom d'utilisateur et mot de passe corrects
        {
           $_SESSION['email'] = $email;
           header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
        else
        {
           header('Location: ' . $_SERVER['HTTP_REFERER'] . '?code=1'); // Utilisateur ou mot de passe incorrect
          exit();
        }
    }
}
mysqli_close($connection);
?>
