<!-- Footer -->
<footer>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="index">
        <img src="images/logo-gris.png" class="mr-2" height=30 alt="CityOnTime">
        CityOnTime</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <!-- Vérification de session -->
                <?php
                error_reporting(E_ALL ^ E_NOTICE);
                session_start();
                $user = $_SESSION['email'];
                if (empty($user)) {
                  echo "<li class='nav-item'>";
                  echo "<a class='nav-link' href='inscription'>Inscription</a>";
                  echo "</li>";
                }
                ?>
            <li class="nav-item">
              <a class="nav-link" href="credits">Crédits</a>
              
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://github.com/qowax" target="_blank">@qowax</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </footer>

  <!-- Dépendances Javascript -->
  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!-- Fin footer -->