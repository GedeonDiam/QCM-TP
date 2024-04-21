<header>
  <nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
      <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="bi bi-list"></i>
        </button>

        <ul class="dropdown-menu">
          <li><a class="dropdown-item text-danger" href="index.php?page=deconnexion">Déconnexion</a></li>
        </ul>
      </div>
      <?php
      if ($_SESSION['type'] == 'admin') {
        echo '<a href="index.php?page=admin" class="me-5 link nav-link">
       <button class="btn btn-outline-primary">
       Accueil
       </button>
          </a>
          ';
      }
      ?>
    </div>
  </nav>
</header>