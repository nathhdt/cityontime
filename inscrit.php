<?php
session_start();
if (isset($_SESSION['email'])) {
  header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <title>CityOnTime - Vous êtes inscrit !</title>

  <!-- Header -->
  <?php include("header.inc"); ?>

</head>

<body class="shards-app-promo-page--1" style="background-color:#212529!important;-webkit-user-select: none;">
  <div class="welcome d-flex justify-content-center flex-column">

    <!-- Navigation -->
    <?php include("navbar.inc"); ?>

    <!-- Bloc inscrit -->
    <div class="inner-wrapper mt-auto mb-auto container">
      <div class="row">
        <div class="container mb-5">
          <div class="section-title col-lg-8 col-md-10 ml-auto mr-auto">
            <h3 class="section-title text-center my-5" style="color:#fafafa">Vous êtes inscrit ! Connectez-vous à partir de la barre de navigation</h3>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <?php include("footer.inc"); ?>

</body>

</html>