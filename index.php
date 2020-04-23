<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>CityOnTime - Trouvez votre itinéraire en quelques clics !</title>
    <!-- Header -->
    <?php include("header.inc"); ?>
  </head>

  <body>
    <!-- Navbar -->
    <?php
    $nav = "accueil";
    include("navbar.inc");
    ?>

    <div id="our-services" class="our-services section py-4">
      <h3 class="section-title text-center my-5">Our Services</h3>
      <!-- Features -->
      <div class="features py-4 mb-4">
        <div class="container">
          <div class="row">
            <div class="feature py-4 col-md-6 d-flex">
              <div class="icon text-primary mr-3"><i class="fa fa-paint-brush"></i></div>
              <div class="px-4">
                <h5>Design & Branding</h5>
                <p>Quisque mollis mi ac aliquet accumsan. Sed sed dapibus libero. Nullam luctus purus duis sensibus signiferumque.</p>
              </div>
            </div>
            <div class="feature py-4 col-md-6 d-flex">
              <div class="icon text-primary mr-3"><i class="fa fa-code"></i></div>
              <div class="px-4">
                <h5>Programming</h5>
                <p>Quisque mollis mi ac aliquet accumsan. Sed sed dapibus libero. Nullam luctus purus duis sensibus signiferumque.</p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="feature py-4 col-md-6 d-flex">
              <div class="icon text-primary mr-3"><i class="fa fa-font"></i></div>
              <div class="px-4">
                <h5>Copywriting</h5>
                <p>Quisque mollis mi ac aliquet accumsan. Sed sed dapibus libero. Nullam luctus purus duis sensibus signiferumque.</p>
              </div>
            </div>
            <div class="feature py-4 col-md-6 d-flex">
              <div class="icon text-primary mr-3"><i class="fa fa-support"></i></div>
              <div class="px-4">
                <h5>Training & Support</h5>
                <p>Quisque mollis mi ac aliquet accumsan. Sed sed dapibus libero. Nullam luctus purus duis sensibus signiferumque.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- / Features -->
    </div>
    <!-- / Our Services Section -->

    <!-- Our Blog Section -->
    <div class="blog section section-invert py-4">
      <h3 class="section-title text-center m-5">Dans quelle ville vous trouvez-vous ?</h3>

      <div class="container">
        <div class="py-4">
          <div class="row">
            <div class="card-deck">
              <div class="col-md-12 col-lg-4">
                <div class="card mb-4">
                  <img class="card-img-top" src="images/villes/dijon.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Dijon</h4>
                    <p class="card-text">Dijon est la capitale de la Bourgogne, région historique du centre-est de la France et l'un des principaux territoires viticoles du pays.</p>
                    <a class="btn btn-success" href="dijon">J'y suis !</a>
                  </div>
                </div>
              </div>

              <div class="col-md-12 col-lg-4">
                <div class="card mb-4">
                  <img class="card-img-top" src="images/villes/angers.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Angers</h4>
                    <p class="card-text">Angers est une ville de l'ouest de la France, située à côté de la Maine, ancien siège médiéval en périphérie de la vallée de la Loire.</p>
                    <a class="btn btn-light disabled" href="angers">Bientôt disponible</a>
                  </div>
                </div>
              </div>

              <div class="col-md-12 col-lg-4">
                <div class="card mb-4">
                  <img class="card-img-top" src="images/villes/nantes.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Nantes</h4>
                    <p class="card-text">Nantes est une commune de l'ouest de la France, située au sud du Massif armoricain, qui s'étend sur les rives de la Loire, à 50 km de l'océan Atlantique.</p>
                    <a class="btn btn-light disabled" href="nantes">Bientôt disponible</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / Our Blog Section -->

    <!-- Footer -->
    <?php include("footer.inc"); ?>
  </body>
</html>
