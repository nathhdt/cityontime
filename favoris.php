<?php
session_start();
$user =  isset($_SESSION['email']);
if (empty($user)) : ?>
  <!DOCTYPE html>
  <html lang="fr">

  <head>
    <title>CityOnTime - Favoris</title>

    <!-- Header -->
    <?php include("header.inc"); ?>

  </head>

  <body class="shards-app-promo-page--1" style="background-color:#212529!important;-webkit-user-select: none;">
    <div class="welcome d-flex justify-content-center flex-column">

      <!-- Navigation -->
      <?php include("navbar.inc"); ?>

      <!-- Bloc favoris -->
      <div class="inner-wrapper mt-auto mb-auto container">
        <div class="row">
          <div class="container mb-5">
            <div class="section-title col-lg-8 col-md-10 ml-auto mr-auto">
              <h3 class="section-title text-center my-5" style="color:#fafafa">Connectez-vous ou inscrivez-vous pour afficher vos favoris</h3>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <?php include("footer.inc"); ?>

  </body>

  </html>
<?php else : ?>
  <!DOCTYPE html>
  <html lang="fr">

  <head>
    <title>CityOnTime - Favoris</title>

    <!-- Header -->
    <?php include("header.inc"); ?>

  </head>

  <body class="shards-app-promo-page--1" style="background-color:#212529!important;-webkit-user-select: none;">
    <div class="welcome d-flex justify-content-center flex-column">

      <!-- Navigation -->
      <?php include("navbar.inc"); ?>

      <!-- Bloc favoris -->
      <div class="inner-wrapper mt-auto mb-auto container">
        <div class="row">
          <div class="container mb-5">
            <div class="section-title col-lg-8 col-md-10 ml-auto mr-auto">
              <h3 class="section-title text-center my-5" style="color:#fafafa">Vous n'avez encore aucun favoris !</h3>
            </div>
            <p class="text-muted col-md-6 text-center mx-auto">Recherchez les horaire de passage d'un arrêt pour l'ajouter ici.</p>
          </div>
        </div>

        <div class="example col-md-10 ml-auto mr-auto">
          <div class="row">
            <div class="color-wrapper col-lg-3 col-md-6 col-sm-6">
              <div class="color">
                <div class="swatch">
                  <img src="images/transports/divia/03.png" style="border-radius:.280rem;max-height:25px;margin-top:20px;">
                  <span class="title" style="margin-top:16px;">9 mn</span>
                </div>
                <span class="title">Dallas CRI</span>
                <span class="direction">Epirey Cap Nord</span>
              </div>
            </div>
            <div class="color-wrapper col-lg-3 col-md-6 col-sm-6">
              <div class="color">
                <div class="swatch">
                  <img src="images/transports/divia/T1.png" style="border-radius:.280rem;max-height:25px;margin-top:20px;">
                  <span class="title" style="margin-top:16px;">5 mn</span>
                </div>
                <span class="title">Auditorium</span>
                <span class="direction">QUETIGNY Centre</span>
              </div>
            </div>
            <div class="color-wrapper col-lg-3 col-md-6 col-sm-6">
              <div class="color">
                <div class="swatch">
                  <img src="images/transports/divia/03.png" style="border-radius:.280rem;max-height:25px;margin-top:20px;">
                  <span class="title" style="margin-top:16px;">9 mn</span>
                </div>
                <span class="title">Dallas CRI</span>
                <span class="direction">Epirey Cap Nord</span>
              </div>
            </div>
            <div class="color-wrapper col-lg-3 col-md-6 col-sm-6">
              <div class="color">
                <div class="swatch">
                  <img src="images/transports/divia/03.png" style="border-radius:.280rem;max-height:25px;margin-top:20px;">
                  <span class="title" style="margin-top:16px;">9 mn</span>
                </div>
                <span class="title">Dallas CRI</span>
                <span class="direction">Epirey Cap Nord</span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="color-wrapper col-lg-3 col-md-6 col-sm-6">
              <div class="color">
                <div class="swatch">
                  <img src="images/transports/divia/03.png" style="border-radius:.280rem;max-height:25px;margin-top:20px;">
                  <span class="title" style="margin-top:16px;">9 mn</span>
                </div>
                <span class="title">Dallas CRI</span>
                <span class="direction">Epirey Cap Nord</span>
              </div>
            </div>
            <div class="color-wrapper col-lg-3 col-md-6 col-sm-6">
              <div class="color">
                <div class="swatch">
                  <img src="images/transports/divia/03.png" style="border-radius:.280rem;max-height:25px;margin-top:20px;">
                  <span class="title" style="margin-top:16px;">9 mn</span>
                </div>
                <span class="title">Dallas CRI</span>
                <span class="direction">Epirey Cap Nord</span>
              </div>
            </div>
            <div class="color-wrapper col-lg-3 col-md-6 col-sm-6">
              <div class="color">
                <div class="swatch">
                  <img src="images/transports/divia/03.png" style="border-radius:.280rem;max-height:25px;margin-top:20px;">
                  <span class="title" style="margin-top:16px;">9 mn</span>
                </div>
                <span class="title">Dallas CRI</span>
                <span class="direction">Epirey Cap Nord</span>
              </div>
            </div>
            <div class="color-wrapper col-lg-3 col-md-6 col-sm-6">
              <div class="color">
                <div class="swatch">
                  <img src="images/transports/divia/03.png" style="border-radius:.280rem;max-height:25px;margin-top:20px;">
                  <span class="title" style="margin-top:16px;">9 mn</span>
                </div>
                <span class="title">Dallas CRI</span>
                <span class="direction">Epirey Cap Nord</span>
              </div>
            </div>
          </div>
        </div>



      </div>



      <!-- Footer -->
      <?php include("footer.inc"); ?>

  </body>

  </html>
<?php endif; ?>