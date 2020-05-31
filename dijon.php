<!DOCTYPE html>
<html lang="fr">

<head>
  <title>CityOnTime - Dijon</title>

  <!-- Header -->
  <?php include("header.inc"); ?>
</head>

<body class="shards-app-promo-page--1">
  <div class="welcome d-flex justify-content-center flex-column">

    <!-- Navigation -->
    <?php include("navbar.inc"); ?>

    <!-- Bloc ville -->
    <div class="inner-wrapper mt-auto mb-auto container">
      <div class="row">
        <div class="container mb-5">
          <div class="section-title col-lg-8 col-md-10 ml-auto mr-auto">
            <h3 class="section-title text-center my-5" style="color:#fafafa">Dijon</h3>
          </div>
          <div class="example col-lg-8 col-md-10 ml-auto mr-auto">
            <h5 style="color:#fafafa">Itinéraire</h5>





            <div class="row mb-5">
              <div class="col-md-12">
                <form action="include/php/dijon/itineraire.php" method="POST" id="editerville-form">
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="form1-name" class="col-form-label" style="color:#fafafa">Départ</label>
                      <select class="custom-select" id="form1-state" name="choixville">
                        <option value="0" selected="selected">REPUBLIQUE</option>
                        <option value="1">DARCY</option>
                        <option value="2">UNIVERSITE</option>
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="form1-name" class="col-form-label" style="color:#fafafa">Arrivée</label>
                      <select class="custom-select" id="form1-state" name="choixville">
                        <option value="0" selected="selected">AUDITORIUM</option>
                        <option value="1">FOCH GARE</option>
                        <option value="2">QUETIGNY</option>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <div>
                        <button type="submit" class="btn btn-secondary" style="font-size: 12px" name='type-submit'>Rechercher</button>
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
  <!-- Fin bloc ville -->

  <!-- Footer -->
  <?php include("footer.inc"); ?>

</body>

</html>