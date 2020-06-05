<?php
session_start();
$user =  isset($_SESSION['email']);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <title>CityOnTime - Crédits</title>

  <!-- Header -->
  <?php include("header.inc"); ?>
</head>

<body class="shards-app-promo-page--1" style="background-color:#212529!important;-webkit-user-select: none;">
  <div class="welcome d-flex justify-content-center flex-column">

    <!-- Navigation -->
    <?php include("navbar.inc"); ?>

    <!-- Bloc crédits -->
    <div class="inner-wrapper mt-auto mb-auto container">
      <div class="row">
        <div class="container mb-5">
          <div class="section-title col-lg-8 col-md-10 ml-auto mr-auto">
            <h3 class="section-title text-center my-5" style="color:#fafafa">Crédits</h3>
          </div>
          <div class="example col-lg-8 col-md-10 ml-auto mr-auto">
            <div class="row mb-5">
              <div class="col-md-12">
                <div class="section-title col-lg-8 col-md-10 ml-auto mr-auto" style="color:#fafafa;text-align:center;">
                  <p><a target="_blank" href="https://designrevision.com/downloads/shards/">Shards UI toolkit</a><br>
                    <a target="_blank" href="https://fontawesome.com/">FontAwesome 5.13</a><br>
                    <a target="_blank" href="https://getbootstrap.com/">Bootstrap 4.3.1</a><br>
                    <a target="_blank" href="https://gist.github.com/outadoc/40060db45c436977a912/">API Keolis (par outadoc)</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Fin bloc crédits -->

  <!-- Footer -->
  <?php include("footer.inc"); ?>

</body>

</html>