<!-- <?php echo $_GET['ref']; ?> -->

<!DOCTYPE html>
<html lang="fr">

<head>
  <title>CityOnTime - Horaires</title>

  <!-- Header -->
  <?php include("header.inc"); ?>
</head>

<body class="shards-app-promo-page--1">
  <div class="welcome d-flex justify-content-center flex-column">

    <!-- Navigation -->
    <?php include("navbar.inc"); ?>

    <!-- Données -->
    <?php include("include/keolis-api/divia_itineraire.php"); ?>

    <!-- Bloc inscription -->
    <div class="inner-wrapper mt-auto mb-auto container">
      <div class="row">
        <div class="container mb-5">
          <div class="section-title col-lg-8 col-md-10 ml-auto mr-auto">
            <h3 class="section-title text-center my-5" style="color:#fafafa"><?php echo $arret; ?></h3>
          </div>
          <!-- Passage 1 -->
          <div class="example col-lg-8 col-md-10 ml-auto mr-auto" style="border-radius: .625rem; box-shadow: 0 0.46875rem 2.1875rem rgba(90,97,105,.1), 0 0.9375rem 1.40625rem rgba(90,97,105,.1), 0 0.25rem 0.53125rem rgba(90,97,105,.12), 0 0.125rem 0.1875rem rgba(90,97,105,.1); border: 1px solid;margin-bottom:22px;">
            <div class="row mb-5" style="margin-bottom: 0rem!important;">
              <div class="col-md-12">
                <div class="row">
                  <div class="col col-lg-2">
                    <img src="images/transports/divia/<?php echo $ligne; ?>.png" style="margin-top:11px;border-radius:.280rem;">
                  </div>
                  <div class="col-6">
                    <h5 style="color:#fafafa;margin-top:11px;">> <?php echo $direction; ?><h4>
                  </div>
                  <div class="col">
                    <h5 style="color:#fafafa;margin-top:11px;text-align:right;font-weight:bold;">18:04<h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Passage 1 -->
          <!-- Passage 2 -->
          <div class="example col-lg-8 col-md-10 ml-auto mr-auto" style="border-radius: .625rem; box-shadow: 0 0.46875rem 2.1875rem rgba(90,97,105,.1), 0 0.9375rem 1.40625rem rgba(90,97,105,.1), 0 0.25rem 0.53125rem rgba(90,97,105,.12), 0 0.125rem 0.1875rem rgba(90,97,105,.1); border: 1px solid;margin-bottom:22px;">
            <div class="row mb-5" style="margin-bottom: 0rem!important;">
              <div class="col-md-12">
                <div class="row">
                  <div class="col col-lg-2">
                    <img src="images/transports/divia/<?php echo $ligne; ?>.png" style="margin-top:11px;border-radius:.280rem;">
                  </div>
                  <div class="col-6">
                    <h5 style="color:#fafafa;margin-top:11px;">> <?php echo $direction; ?><h4>
                  </div>
                  <div class="col">
                    <h5 style="color:#fafafa;margin-top:11px;text-align:right;font-weight:bold;">18:17<h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Passage 2 -->
          <!-- Passage 3 -->
          <div class="example col-lg-8 col-md-10 ml-auto mr-auto" style="border-radius: .625rem; box-shadow: 0 0.46875rem 2.1875rem rgba(90,97,105,.1), 0 0.9375rem 1.40625rem rgba(90,97,105,.1), 0 0.25rem 0.53125rem rgba(90,97,105,.12), 0 0.125rem 0.1875rem rgba(90,97,105,.1); border: 1px solid;margin-bottom:22px;">
            <div class="row mb-5" style="margin-bottom: 0rem!important;">
              <div class="col-md-12">
                <div class="row">
                  <div class="col col-lg-2">
                    <img src="images/transports/divia/<?php echo $ligne; ?>.png" style="margin-top:11px;border-radius:.280rem;">
                  </div>
                  <div class="col-6">
                    <h5 style="color:#fafafa;margin-top:11px;">> <?php echo $direction; ?><h4>
                  </div>
                  <div class="col">
                    <h5 style="color:#fafafa;margin-top:11px;text-align:right;font-weight:bold;">18:31<h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Passage 3 -->
        </div>
      </div>
    </div>
  </div>
  <!-- Fin bloc inscription -->

  <!-- Footer -->
  <?php include("footer.inc"); ?>

</body>

</html>