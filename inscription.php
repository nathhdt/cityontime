<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
$user = $_SESSION['email'];
if (empty($user)) { } else {
  header('Location: index');
  exit();
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <title>CityOnTime - Inscription</title>

  <!-- Header -->
  <?php include("header.inc"); ?>

</head>

<body class="shards-app-promo-page--1" style="background-color:#212529!important;-webkit-user-select: none;">
  <div class="welcome d-flex justify-content-center flex-column">

    <!-- Navigation -->
    <?php include("navbar.inc"); ?>

    <!-- Bloc inscription -->
    <div class="inner-wrapper mt-auto mb-auto container">
      <div class="row">
        <div class="container mb-5">
          <div class="section-title col-lg-8 col-md-10 ml-auto mr-auto">
            <h3 class="section-title text-center my-5" style="color:#fafafa">Inscription</h3>
          </div>
            <div class="example col-lg-8 col-md-10 ml-auto mr-auto">
              <div class="row mb-5">
                <div class="col-md-12">
                <form class="form-signin" action="include/php/inscription" method="POST" id="signin-form" autocomplete="off">
                    <div class="row">
                      <div class="form-group col-md-6">
                        <label for="form1-name" class="col-form-label" style="color:#fafafa">Nom</label>
                        <input type="text" class="form-control" placeholder="Nom" name="inscription-nom">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="form1-name2" class="col-form-label" style="color:#fafafa">Prénom</label>
                        <input type="text" class="form-control" placeholder="Prénom" name="inscription-prenom">
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-6">
                        <label for="form1-email" class="col-form-label" style="color:#fafafa">E-mail</label>
                        <input type="email" class="form-control" placeholder="E-mail" name="inscription-email">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="form1-password" class="col-form-label" style="color:#fafafa">Mot de passe</label>
                        <input type="password" class="form-control" placeholder="Mot de passe" name="inscription-motdepasse">
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-6">
                        <label for="form1-state" style="color:#fafafa">Ville</label>
                        <select class="custom-select" name="inscription-ville">
                          <option value="0" selected="selected">Choisir une ville</option>
                          <option value="Dijon">Dijon</option>
                          <option value="Angers">Angers</option>
                          <option value="Nantes">Nantes</option>
                        </select>
                      </div>
                      <div class="form-group col-md-6">
                        <div>
                          <button type="submit" class="btn btn-secondary" name="inscription-submit" style="margin-top:26px;">Inscription</button>
                        </div>
                      </div>
                    </div>
                  </form>
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