
  <!-- Vérification codes d'erreur -->
  <?php
  if (isset($_GET['error']) && isset($_GET['error']) == 1) : ?>
  <div class="mb5">
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
      <i class="fa fa-exclamation-circle"></i>
      <strong>Authentification</strong> Identifiants incorrects, veuillez vérifier votre e-mail et mot de passe.
    </div>
  </div>
  <?php endif; ?>

    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
      <img src="images/logo.svg" alt="Example Navbar 1" class="mr-2" height="30">
      <a class="navbar-brand" href="index">CityOnTime</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown-7" aria-controls="navbarNavDropdown-7"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown-7">
        <ul class="navbar-nav mr-auto">
          <?php
            if ($nav == 'index')
            {
              echo "<li class='nav-item active'>";
            }
          ?>
          </li>
          <?php
            if ($nav == 'ville')
            {
              echo "<li class='nav-item dropdown active'>";
            } else {
              echo "<li class='nav-item dropdown'>";
            }
          ?>
            <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink-7" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Villes
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink-7">
              <a class="dropdown-item" href="dijon">Dijon</a>
              <a class="dropdown-item disabled">Angers</a>
              <a class="dropdown-item disabled">Nantes</a>
            </div>
          </li>
          <?php
            if ($nav == 'favoris')
            {
              echo "<li class='nav-item active'>";
            } else {
              echo "<li class='nav-item'>";
            }
          ?>
            <a class="nav-link" href="favoris">Favoris</a>
          </li>
        </ul>
        <ul class="navbar-nav">
            <!-- Vérification de session -->
            <?php
            error_reporting(E_ALL ^ E_NOTICE);
            session_start();
            $user = $_SESSION['email'];
            if (empty($user)) {
              echo "<li class='nav-item dropdown'>";
              echo "<a class='nav-link dropdown-toggle' href='#' id='navbarDropdownMenuLink-7' data-toggle='dropdown'>";
              echo "<i class='fa fa-user-circle'></i>";
              echo "</a>";
              echo "<form class='form-signin' action='include/php/signin' method='POST' id='signin-form'>";
              echo "<div class='dropdown-menu dropdown-menu-right' style='width:max-content'>";
              echo "<h6 class='dropdown-header'>Connexion</h6>";
              echo "<a class='dropdown-item'>";
              echo "<div class='input-group input-group-seamless'>";
              echo "<div class='input-group-prepend'>";
              echo "<div class='input-group-text'>";
              echo "<i class='fa fa-user'></i>";
              echo "</div>";
              echo "</div>";
              echo "<input type='text' class='form-control' placeholder='E-mail' id='login-email' name='uem'>";
              echo "</div>";
              echo "</a>";
              echo "<a class='dropdown-item'>";
              echo "<div class='input-group input-group-seamless'>";
              echo "<div class='input-group-prepend'>";
              echo "<div class='input-group-text'>";
              echo "<i class='fa fa-lock'></i>";
              echo "</div>";
              echo "</div>";
              echo "<input type='password' class='form-control' placeholder='Mot de passe' id='login-password' name='pwd'>";
              echo "</div>";
              echo "</a>";
              echo "<a class='dropdown-item'>";
              echo "<button type='submit' class='btn btn-light' name='signin-submit'>Connexion</button>";
              echo "<button type='button' class='btn btn-secondary'>Inscription</button>";
              echo "</a>";
              echo "</div>";
              echo "</form>";
              echo "</li>";
            } else {
              echo "<li class='nav-item'>";
              echo "<a class='nav-link'><span class='badge mr-3 badge-pill badge-success'>" . $user . "</span></a>";
              echo "</li>";
              echo "<li class='nav-item dropdown'>";
              echo "<a class='nav-link dropdown-toggle' href='#' id='navbarDropdownMenuLink-7' data-toggle='dropdown'>";
              echo "<i class='fa fa-user-circle'></i>";
              echo "</a>";
              echo "<div class='dropdown-menu dropdown-menu-right' style='width:max-content'>";
              echo "<a class='dropdown-item' href='profil'>Profil</a>";
              echo "<a class='dropdown-item' href='include/php/logout'>Déconnexion</a>";
              echo "</div>";
              echo "</li>";
            }
            ?>

        </ul>
      </div>
    </nav>
