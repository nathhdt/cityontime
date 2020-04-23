<div id="navbars" class="my-5">
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

          <li class="nav-item">
            <a class="nav-link"><span class="badge mr-3 badge-outline-secondary">nathan.haudot@outlook.fr</span></a>
          </li>




          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink-7" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-user-circle"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" style="width:max-content" aria-labelledby="navbarDropdownMenuLink-7">
              <h6 class="dropdown-header">Connexion</h6>
              <a class="dropdown-item">
                <div class="input-group input-group-seamless">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-user"></i>
                        </div>
                    </div>
                    <input type="text" class="form-control" placeholder="E-mail" aria-label="Text input with checkbox">
                </div>
              </a>
              <a class="dropdown-item">
                <div class="input-group input-group-seamless">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-lock"></i>
                        </div>
                    </div>
                    <input type="password" class="form-control" placeholder="Mot de passe" aria-label="Text input with checkbox">
                </div>
              </a>
              <a class="dropdown-item">
              <button type="button" class="btn btn-light">Connexion</button>
              <button type="button" class="btn btn-secondary">Inscription </button>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
</div>
