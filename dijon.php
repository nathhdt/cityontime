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
                <form autocomplete="off" action="include/keolis-api/divia_recherche.php" method="POST" id="editerville-form">
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="form1-name" class="col-form-label" style="color:#fafafa">Départ</label>
                      <input id="inputDepart" type="text" class="form-control" placeholder="République..." style="position:relative;" name="depart">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="form1-name" class="col-form-label" style="color:#fafafa">Arrivée</label>
                      <input id="inputArrivee" type="text" class="form-control" placeholder="Darcy..." style="position:relative;" name="arrivee">
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

  <!-- Script autocomplete -->
  <script src="include/js/autocomplete.js"></script>
  <script>
    var arrets = ["<?php include("include/keolis-api/divia_liste_arrets.php"); ?>"];

    //Doublons
    function removeDuplicates(arrets) {
      let unique = {};
        arrets.forEach(function(i) {
        if (!unique[i]) {
          unique[i] = true;
        }
      });
      return Object.keys(unique);
    }

    liste_arrets = removeDuplicates(arrets)

    autocomplete(document.getElementById("inputDepart"), liste_arrets);
    autocomplete(document.getElementById("inputArrivee"), liste_arrets);
  </script>

  <!-- Footer -->
  <?php include("footer.inc"); ?>
</body>

</html>