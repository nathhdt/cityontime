<!DOCTYPE html>
<html lang="fr">

<head>
  <title>CityOnTime - Profil</title>

  <!-- Header -->
  <?php include("header.inc"); ?>
</head>

<body class="shards-app-promo-page--1">

<?php if (isset($_GET["success"]) == 'true') : ?>
  <div class="mb5">
    <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-bottom: 0rem;">
      <button type="button" class="close" data-dismiss="alert">
      <span aria-hidden="true">×</span></button>
      <i class="fa fa-exclamation-circle"></i>
      Modifications enregistrées avec succès !
    </div>
  </div>
<?php else : ?>

<?php endif; ?>

<?php if (isset($_GET["oldpw"]) == 'false') : ?>
  <div class="mb5">
    <div class="alert alert-warning alert-dismissible fade show" role="alert" style="margin-bottom: 0rem;">
      <button type="button" class="close" data-dismiss="alert">
      <span aria-hidden="true">×</span></button>
      <i class="fa fa-exclamation-triangle"></i>
      <strong>Attention:</strong> l'ancien mot de passe entré ne correspond pas.
    </div>
  </div>
<?php else : ?>

<?php endif; ?>

<?php if (isset($_GET["diff"]) == 'true') : ?>
  <div class="mb5">
    <div class="alert alert-warning alert-dismissible fade show" role="alert" style="margin-bottom: 0rem;">
      <button type="button" class="close" data-dismiss="alert">
      <span aria-hidden="true">×</span></button>
      <i class="fa fa-exclamation-triangle"></i>
      <strong>Attention:</strong> le nouveau mot de passe et sa confirmation ne correspondent pas.
    </div>
  </div>
<?php else : ?>

<?php endif; ?>

<div class="welcome d-flex justify-content-center flex-column">



    <!-- Navigation -->
    <?php include("navbar.inc"); ?>

    

    <!-- Données -->
    <?php include("include/php/profile_data.php"); ?>

    <!-- Bloc profil -->
    <div class="inner-wrapper mt-auto mb-auto container">
      <div class="row">
        <div class="container mb-5">
          <div class="section-title col-lg-8 col-md-10 ml-auto mr-auto">
            <h3 class="section-title text-center my-5" style="color:#fafafa">Profil</h3>
          </div>
          <div class="example col-lg-8 col-md-10 ml-auto mr-auto">
            <h5 style="color:#fafafa">Informations de compte</h5>
            <div class="row mb-5">
              <div class="col-md-12">
                <form action="include/php/edit_city" method="POST" id="editerville-form">
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="form1-name" class="col-form-label" style="color:#fafafa">Nom</label>
                      <input type="text" class="form-control" placeholder="<?php echo $nom; ?>" disabled>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="form1-name2" class="col-form-label" style="color:#fafafa">Prénom</label>
                      <input type="text" class="form-control" placeholder="<?php echo $prenom; ?>" disabled>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="form1-email" class="col-form-label" style="color:#fafafa">E-mail</label>
                      <input type="email" class="form-control" placeholder="<?php echo $email; ?>" disabled>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="form1-email" class="col-form-label" style="color:#fafafa">Ville</label>
                      <select class="custom-select" id="form1-state" name="choixville">
<?php if ($ville == 'Dijon'): ?>
  <option value="0" selected="selected">Dijon</option>
  <option value="1">Angers</option>
  <option value="2">Nantes</option>
<?php elseif ($ville == 'Angers'): ?>
  <option value="0">Dijon</option>
  <option value="1" selected="selected">Angers</option>
  <option value="2">Nantes</option>
<?php else: ?>
  <option value="0">Dijon</option>
  <option value="1">Angers</option>
  <option value="2" selected="selected">Nantes</option>
<?php endif; ?>

                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <div>
                        <button type="submit" class="btn btn-secondary" style="font-size: 12px" name='type-submit'>Modifier</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="example col-lg-8 col-md-10 ml-auto mr-auto">
            <h5 style="color:#fafafa">Mot de passe</h5>
            <div class="row mb-5">
              <div class="col-md-12">
                <form action="include/php/edit_password" method="POST" id="editermotdepasse-form">
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="form1-name" class="col-form-label" style="color:#fafafa">Ancien mot de passe</label>
                      <input type="password" class="form-control" placeholder="Ancien mot de passe" name="oldpw">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="form1-name" class="col-form-label" style="color:#fafafa">Nouveau mot de passe</label>
                      <input type="password" class="form-control" placeholder="Nouveau mot de passe" name="newpw">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="form1-name" class="col-form-label" style="color:#fafafa">Confirmation mot de passe</label>
                      <input type="password" class="form-control" placeholder="Confirmation mot de passe" name="confnewpw">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <div>
                        <button type="submit" class="btn btn-secondary" style="font-size: 12px" name='type-submit'>Modifier</button>
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
  <!-- Fin bloc profil -->

  <!-- Footer -->
  <?php include("footer.inc"); ?>

</body>

</html>