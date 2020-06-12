<?php
session_start();
$user =  isset($_SESSION['email']);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <title>CityOnTime - Dijon</title>

  <!-- Header -->
  <?php include("header.inc"); ?>

</head>

<body class="shards-app-promo-page--1" style="background-color:#212529!important;-webkit-user-select: none;">
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
          <!-- Horaires de passage -->
          <div class="example col-lg-8 col-md-10 ml-auto mr-auto" style="border-radius: .625rem; box-shadow: 0 0.46875rem 2.1875rem rgba(90,97,105,.1), 0 0.9375rem 1.40625rem rgba(90,97,105,.1), 0 0.25rem 0.53125rem rgba(90,97,105,.12), 0 0.125rem 0.1875rem rgba(90,97,105,.1); border: 1px solid;margin-bottom:22px;">
            <h5 style="color:#fafafa;margin-top:11px;">Horaires de passage</h5>
            <div class="row mb-5" style="margin-bottom: 0rem!important;">
              <div class="col-md-12">
                <form autocomplete="off" action="include/keolis-api/divia_recherche_arret" method="POST" id="horaires-form">
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="form1-name" class="col-form-label" style="color:#fafafa">Arrêt</label>
                      <input id="inputHorairesArret" type="text" class="form-control" placeholder="République..." style="position:relative;" name="arret">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="form1-name" class="col-form-label" style="color:#fafafa">Direction</label>
                      <select class="custom-select" id="selectDirectionList" name="direction" placeholder="Sélectionnez un arrêt valide...">
                        <option value="0" selected="selected">Sélectionnez un arrêt valide...</option>
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
          <!-- Itinéraire -->
          <div class="example col-lg-8 col-md-10 ml-auto mr-auto" style="border-radius: .625rem; box-shadow: 0 0.46875rem 2.1875rem rgba(90,97,105,.1), 0 0.9375rem 1.40625rem rgba(90,97,105,.1), 0 0.25rem 0.53125rem rgba(90,97,105,.12), 0 0.125rem 0.1875rem rgba(90,97,105,.1); border: 1px solid;">
            <h5 style="color:#fafafa;margin-top:11px;">Itinéraire</h5>
            <div class="row mb-5" style="margin-bottom: 0rem!important;">
              <div class="col-md-12">
                <form autocomplete="off" action="include/keolis-api/divia_recherche_itineraire" method="POST" id="itineraire-form">
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="form1-name" class="col-form-label" style="color:#fafafa">Départ</label>
                      <input id="inputItineraireDepart" type="text" class="form-control" placeholder="République..." style="position:relative;" name="depart">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="form1-name" class="col-form-label" style="color:#fafafa">Arrivée</label>
                      <input id="inputItineraireArrivee" type="text" class="form-control" placeholder="Darcy..." style="position:relative;" name="arrivee">
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

  <!-- Script autocomplete -->
  <script src="include/js/autocomplete.js"></script>
  <script src="include/js/autocomplete-horaires.js"></script>
  <script>
    //Liste des arrêts & directions
    var arrets = ["<?php include("include/keolis-api/divia_liste_arrets.php"); ?>"];
    var directions = [<?php include("include/keolis-api/divia_liste_directions.php"); ?>];

    //Doublons
    function supprimerDupliques(arrets) {
      let unique = {};
      arrets.forEach(function(i) {
        if (!unique[i]) {
          unique[i] = true;
        }
      });
      return Object.keys(unique);
    }

    liste_arrets = supprimerDupliques(arrets)

    //Autocompletes
    autocomplete_horaires(document.getElementById("inputHorairesArret"), liste_arrets, directions)
    autocomplete(document.getElementById("inputItineraireDepart"), liste_arrets);
    autocomplete(document.getElementById("inputItineraireArrivee"), liste_arrets);
  </script>

  <!-- Footer -->
  <?php include("footer.inc"); ?>

</body>

</html>