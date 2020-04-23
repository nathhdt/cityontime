<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>CityOnTime - Déplacez-vous à Dijon !</title>
    <!-- Header -->
    <?php include("header.inc"); ?>
  </head>

  <body>
    <!-- Navbar -->
    <?php
    $nav = "ville";
    include("navbar.inc");
    ?>

    <div id="our-services" class="our-services section py-4">
        <h3 class="section-title text-center my-5">Dijon</h3>
          <div class="section-title col-lg-8 col-md-10 ml-auto mr-auto">
            <p>Prochains trams des arrêts les plus fréquentés</p>
          </div>
      </div>
      <div id="typography" class="container mb-5">
      <div class="example col-md-10 ml-auto mr-auto">
        <table class="table table-striped table-responsive-md">
          <thead>
            <tr>
              <th>Ligne</th>
              <th>Arrêt</th>
              <th>Destination</th>
              <th>Heure</th>
            </tr>
        </thead>
        <tbody>
          <tr>
            <td>T1</td>
            <td><strong>République</strong></td>
            <td>Quetigny</td>
            <td><strong>09:44</strong></td>
          </tr>
          <tr>
            <td>T2</td>
            <td><strong>République</strong></td>
            <td>Chenove</td>
            <td><strong>09:42</strong></td>
          </tr>
          <tr>
            <td>L3</td>
            <td><strong>Grésilles</strong></td>
            <td>Epirey Cap Nord</td>
            <td><strong>09:51</strong></td>
          </tr>
          <tr>
            <td>F40</td>
            <td><strong>Auditorium</strong></td>
            <td>Toison d'Or</td>
            <td><strong>10:08</strong></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

    <!-- Footer -->
    <?php include("footer.inc"); ?>
  </body>
</html>
