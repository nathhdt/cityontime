<?php
session_start();
$user =  isset($_SESSION['email']);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <title>CityOnTime - Trouvez votre itinéraire en quelques clics !</title>

  <!-- Header -->
  <?php include("header.inc"); ?>

</head>

<body class="shards-app-promo-page--1" style="background-color:#212529!important;-webkit-user-select: none;">
  <div class="welcome d-flex justify-content-center flex-column">
    <!-- Navigation -->
    <?php include("navbar.inc"); ?>
    
    <!-- Bloc accueil -->
    <div class="inner-wrapper mt-auto mb-auto container">
      <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-12 mt-auto mb-auto mr-3">
          <h1 class="welcome-heading display-4 text-white">Vos tramways & bus en temps réel !</h1>
          <p></p>
          <a href="#choisirmaville" class="btn btn-lg btn-success"><i class="fas fa-city"></i> Choisir ma ville</a>
          <div class="d-block mt-4">
            <a href="https://www.divia.fr/" target="_blank"><img class="w-25 mt-2 mr-3" src="images/transports/divia.png" alt="Divia"></a>
            <a href="https://www.irigo.fr/" target="_blank"><img class="w-25 mt-2 mr-3" src="images/transports/irigo.png" alt="Irigo"></a>
            <a href="https://www.tan.fr/" target="_blank"><img class="w-25 mt-2 mr-3" src="images/transports/tan.png" alt="Tan"></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-5 col-sm-12 ml-auto">
          <img class="iphone-mockup ml-auto" src="images/app.png" style="max-width:100%;">
        </div>
      </div>
    </div>
  </div>

  <!-- Choix de ville -->
  <div class="blog section section-invert py-4" id="choisirmaville">
    <h3 class="section-title text-center m-5">Dans quelle ville vous situez-vous ?</h3>
    <div class="container">
      <div class="py-4">
        <div class="row">
          <div class="card-deck">
            <div class="col-md-12 col-lg-4">
              <div class="card mb-4">
                <img class="card-img-top" src="images/villes/dijon.jpg" alt="Dijon">
                <div class="card-body">
                  <h4 class="card-title">Dijon</h4>
                  <p class="card-text">Dijon est la capitale de la Bourgogne, région historique du centre-est de la France et l'un des principaux territoires viticoles du pays.</p>
                  <a class="btn btn-success" href="dijon">J'y suis !</a>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-lg-4">
              <div class="card mb-4">
                <img class="card-img-top" src="images/villes/angers.jpg" alt="Angers">
                <div class="card-body">
                  <h4 class="card-title">Angers</h4>
                  <p class="card-text">Angers est une ville de l'ouest de la France, située à côté de la Maine, ancien siège médiéval en périphérie de la vallée de la Loire.</p>
                  <a class="btn btn-light disabled" href="angers">Bientôt disponible</a>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-lg-4">
              <div class="card mb-4">
                <img class="card-img-top" src="images/villes/nantes.jpg" alt="Nantes">
                <div class="card-body">
                  <h4 class="card-title">Nantes</h4>
                  <p class="card-text">Nantes est une commune de l'ouest de la France, située au sud du Massif armoricain, qui s'étend sur les rives de la Loire.</p>
                  <a class="btn btn-light disabled" href="nantes">Bientôt disponible</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Signet -->
  <div class="contact section-invert py-4">
    <h3 class="section-title text-center m-5">CityOnTime sur votre écran d'accueil</h3>
    <div class="container py-4">
      <div class="row justify-content-md-center px-4">
        <div class="contact-form col-sm-12 col-md-10 col-lg-7 p-4 mb-4 card">
          <div class="row">
            <div class="col">
              <div class="text-center">
                <img src="images/ios-share.png" style="margin-bottom:10px;max-width:40px;">
                <label>Appuyez sur cet icône pour ajouter le site en tant que signet !</label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <?php include("footer.inc"); ?>

</body>

</html>