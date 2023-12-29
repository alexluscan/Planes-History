<?php
  if(! isset($pagina))
  {
    $pagina = false;
  }
?>
<link rel="stylesheet" href="stil.css">
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?=($pagina == 'index'?'active':'')?>" aria-current="page" href="index.php">Acasă</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Tipuri de avioane
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item <?=($pagina == 'avioane-de-lupta-clasice'?'active':'')?>" href="avioane-de-lupta-clasice.php">Avioane de lupta clasice</a></li>
            <li><a class="dropdown-item <?=($pagina == 'avioane-de-lupta-jet'?'active':'')?>" href="avioane-de-lupta-jet.php">Avioane de lupta jet</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item <?=($pagina == 'avioane-de-transport'?'active':'')?>" href="avioane-de-transport.php">Avioane de transport</a></li>
          </ul>
          <li class="nav-item">
        </li>
        </li>
        <li class="nav-item">
                            <?php
                                if(Login() === false)
                                {
                            ?>
                            <a class="nav-link" href="./p-login.php">
                                Autentificare
                            </a>
                            <?php
                                }
                                else
                                {
                                    ?>
                                    <a class="nav-link" href="./logout.php">
                                        Logout
                                    </a>
                                    <?php
                                        }
                            ?>
                        </li>
      </ul>
    </div>
  </div>
</nav>