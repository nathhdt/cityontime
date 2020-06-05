<?php if (isset($_GET["code"]) == 1) : ?>
  <div class="mb5">
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <button type="button" class="close" data-dismiss="alert">
      <span aria-hidden="true">×</span></button>
      <i class="fa fa-exclamation-circle"></i>
      <strong>Authentification:</strong> identifiants incorrects, veuillez vérifier votre e-mail et mot de passe.
    </div>
  </div>
<?php endif; ?>
<div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark pt-4 px-0">
        <a class="navbar-brand mr-5" href="index">
        <img src="images/logo.svg" class="mr-2" height=30 alt="CityOnTime">
        CityOnTime
        </a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarNavDropdown" style="">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="index">Accueil</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Villes</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="dijon">Dijon</a>
                <a class="dropdown-item disabled">Angers</a>
                <a class="dropdown-item disabled">Nantes</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="favoris">Favoris</a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
          <?php
          error_reporting(E_ALL ^ E_NOTICE);
          session_start();
          $user = $_SESSION["email"];
          if (empty($user)) : ?>
  <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                <i class="fa fa-user-circle"></i>
              </a>
              <form class="form-signin" action="include/php/login" method="POST" id="signin-form">
                <div class="dropdown-menu dropdown-menu-right" style="width:max-content">
                  <h6 class="dropdown-header">S'identifier</h6>
                  <a class="dropdown-item">
                    <div class="input-group input-group-seamless">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fa fa-user"></i>
                        </div>
                      </div>
                      <input type="email" class="form-control" placeholder="E-mail" name="uem">
                    </div>
                  </a>
                  <a class="dropdown-item">
                    <div class="input-group input-group-seamless">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fa fa-lock"></i>
                        </div>
                      </div>
                      <input type="password" class="form-control" placeholder="Mot de passe" name="pwd">
                    </div>
                  </a>
                  <a class="dropdown-item">
                    <button type="submit" class="btn btn-light" name="signin-submit">Connexion</button>
                  </a>
                </div>
              </form>
            </li>
          <?php else : ?>
  <li class="nav-item">
              <a class="nav-link"><span class="badge mr-3 badge-pill badge-success"><?php echo $user; ?></span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" style="margin-top: 4px;">
                <i class="fa fa-user-circle"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right" style="width:max-content">
                <a class="dropdown-item" href="profil">Profil</a>
                <a class="dropdown-item" href="include/php/logout">Déconnexion</a>
              </div>
            </li>
          <?php endif; ?>
</ul>
        </div>
      </nav>
    </div>
