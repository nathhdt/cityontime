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
      <?php include("navbar.inc");
      include("include/keolis-api/divia_favoris.php"); ?>

      <!-- Bloc favoris -->
      <div class="inner-wrapper mt-auto mb-auto container">
        <?php if ($j == 0) : ?>
          <div class="row">
            <div class="container mb-5">
              <div class="section-title col-lg-8 col-md-10 ml-auto mr-auto">
                <h3 class="section-title text-center my-5" style="color:#fafafa">Vous n'avez encore aucun favoris !</h3>
              </div>
              <p class="text-muted col-md-6 text-center mx-auto">Recherchez les horaire de passage d'un arrêt pour l'ajouter ici.</p>
            </div>
          </div>
          <div class="example col-md-10 ml-auto mr-auto">
          <?php endif; ?>

          <?php

          //Calcul du nombre de rows
          $division = $j / 4;
          $division = ceil($division);

          for ($i = 0; $i < $division; $i++) {
            ?>

            <div class="row">

              <?php
              for ($i2 = 0; $i2 < $j; $i2++) {
                ?>




                <div class="color-wrapper col-lg-3 col-md-6 col-sm-6">
                  <div class="color">
                    <div class="swatch">
                    <a href="../<?php echo $liensArrets[$i2]; ?>" style="display: block;margin-bottom: 22px;">
                      <img src="images/transports/divia/<?php echo $listeLignes[$i2]; ?>.png" style="border-radius:.280rem;max-height:25px;margin-top:20px;">
                      <span class="title" style="margin-top:16px;"><?php echo $listeHoraires[$i2]; ?> mn</span>
                    </a>
                    </div>
                    <span class="title"><?php echo $listeArrets[$i2]; ?></span>
                    <span class="direction"><?php echo $listeDirections[$i2]; ?></span>
                  </div>
                </div>

              <?php
            }
            ?>
            </div>
          <?php
        }
        ?>
        </div>
      </div>

      <!-- Footer -->
      <?php include("footer.inc"); ?>

  </body>

  </html>
<?php endif; ?>