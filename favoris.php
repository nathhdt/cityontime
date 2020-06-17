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
      include("include/keolis-api/favoris.php"); ?>

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
        <?php else: ?>
          <div class="row">
            <div class="container mb-5">
              <div class="section-title col-lg-8 col-md-10 ml-auto mr-auto">
                <h3 class="section-title text-center my-5" style="color:#fafafa">Favoris</h3>
              </div>
            </div>
          </div>
        <div class="example col-md-10 ml-auto mr-auto">
        <?php endif; ?>
            <div class="row">
              <?php
              for ($i2 = 0; $i2 < $j; $i2++) {
              ?>
                <div class="color-wrapper col-lg-3 col-md-6 col-sm-6">
                  <div class="color">
                    <div class="swatch">
                    <a href="../<?php echo $liensArrets[$i2]; ?>" style="display: block;">
                      <img src="images/transports/<?php echo $transport; ?>/<?php echo $listeLignes[$i2]; ?>.png" style="border-radius:.280rem;max-height:25px;margin-top:24px;">
                      <span class="title" style="margin-top:16px;margin-bottom:18px;font-weight:bold;">
                      <?php
                      if ($listeHoraires[$i2] !== 0 && empty($listeHoraires[$i2])) {
                        echo "<script>alert('".$listeHoraires[$i2]."');</script>";
                        echo "<i class='fas fa-times'></i>";
                      } else {
                        echo $listeHoraires[$i2]." mn";
                      }
                      ?>
                      </span>
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
        </div>
      </div>

      <!-- Footer -->
      <?php include("footer.inc"); ?>

  </body>

  </html>
<?php endif; ?>