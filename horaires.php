<?php
session_start();
$user =  isset($_SESSION['email']);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <title>CityOnTime - Horaires</title>

  <!-- Header -->
  <?php include("header.inc"); ?>

</head>

<body class="shards-app-promo-page--1" style="background-color:#212529!important;-webkit-user-select: none;">
  <div class="welcome d-flex justify-content-center flex-column">

    <!-- Navigation -->
    <?php include("navbar.inc"); ?>

    <?php include("include/keolis-api/divia_horaires.php"); ?>
<!-- Bloc horaires -->
    <div class="inner-wrapper mt-auto mb-auto container">
      <div class="row">
        <div class="container mb-5">
          <div class="section-title col-lg-8 col-md-10 ml-auto mr-auto">
            <h3 class="section-title text-center my-5" style="color:#fafafa"><?php echo $arret; ?></h3>
          </div>
          <?php if($nombrePassages == 0) : ?>
<!-- Passage -->
              <div class="example col-lg-8 col-md-10 ml-auto mr-auto" style="border-radius: .625rem; box-shadow: 0 0.46875rem 2.1875rem rgba(90,97,105,.1), 0 0.9375rem 1.40625rem rgba(90,97,105,.1), 0 0.25rem 0.53125rem rgba(90,97,105,.12), 0 0.125rem 0.1875rem rgba(90,97,105,.1); border: 1px solid;margin-bottom:22px;">
                <div class="row mb-5" style="margin-bottom: 0rem!important;">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col col-xs-1 text-center">
                        <h5 style="color:#fafafa;margin-top:11px;font-weight:bold;">Aucune horaire n'est disponible pour cet arrêt.<h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php endif; ?>
<?php
for ($i = 0; $i < $nombrePassages; $i++) {
?>
<!-- Passage -->
          <div class="example col-lg-8 col-md-10 ml-auto mr-auto" style="border-radius: .625rem; box-shadow: 0 0.46875rem 2.1875rem rgba(90,97,105,.1), 0 0.9375rem 1.40625rem rgba(90,97,105,.1), 0 0.25rem 0.53125rem rgba(90,97,105,.12), 0 0.125rem 0.1875rem rgba(90,97,105,.1); border: 1px solid;margin-bottom:22px;">
            <div class="row mb-5" style="margin-bottom: 0rem!important;">
              <div class="col-md-12">
                <div class="row">
                  <div class="col col-lg-2" style="display: flex;align-items: center;flex-wrap: wrap;">
                    <img src="images/transports/divia/<?php echo $ligne; ?>.png" style="border-radius:.280rem;max-height:25px;">
                  </div>
                  <div class="col-6">
                    <h5 style="color:#fafafa;margin-top:11px;">> <?php echo $direction; ?><h4>
                  </div>
                  <div class="col">
                    <h5 style="color:#fafafa;margin-top:11px;text-align:right;font-weight:bold;"><?php echo $horaires_xml[$i].' mn'; ?><h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php
        }
        ?>
</div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <?php include("footer.inc"); ?>

</body>

</html>