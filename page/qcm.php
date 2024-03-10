



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


