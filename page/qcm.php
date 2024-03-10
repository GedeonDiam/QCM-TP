<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liste déroulante</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
</head>

<body>
  <header>
    <nav class="navbar bg-body-tertiary">
      <div class="container-fluid">
        <div class="dropdown">
          <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-list"></i>
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Profil</a></li>
            <li><a class="dropdown-item text-danger" href="index.php?page=deconnexion">Déconnexion</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <div class="container mt-5">
    <!-- En-tête avec le titre du quiz -->
    <div class="row mb-4">
      <div class="col text-center">
        <h1>Quiz de Culture Générale</h1>
      </div>
    </div>

    <!-- Zone de bienvenue et instruction -->
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="jumbotron">
          <h2 class="text-center">Bienvenue!</h2>
          <p class="text-center">Cliquez sur le bouton ci-dessous pour commencer le quiz.</p>
          <!-- Bouton de démarrage du quiz -->
          <div class="d-flex justify-content-center">
            <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Commencez le Quizz
            </button>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Choisissez le niveau du Quizz</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>

                  <div class="modal-body text-center">
                    <a href="index.php?page=questionnaire&niveau=0"><button type="button" class="btn btn-success btn-lg">Facile</button></a>
                    <a href="index.php?page=questionnaire&niveau=1"><button type="button" class="btn btn-danger btn-lg">Difficle</button></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Intégration des scripts JavaScript de Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>