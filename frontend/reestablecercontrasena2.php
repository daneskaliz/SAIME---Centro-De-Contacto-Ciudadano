<?php include'header.php'; ?>

<div class="container-fluid container15">
  <h5 class="text-white text-center py-5 font-weight-bold fontindex">
    REESTABLECER CONTRASEÑA
  </h5>
</div>
<!--CONTENIDO-->
<div class="container-fluid container16 my-5 py-5">
  <div class="row justify-content-center">
    <div class="col-10">
      <div class="card card6 text-center bg-light">
        <?php if(!$_GET): ?>
        <div class="row justify-content-center py-1 mt-5 mb-5">
          <div class="col-10">
            <div class="card bg-white">
              <div class="alert alert-info" role="alert">
                <span class="font-weight-bold text-primary">
                  <span class="mdi mdi-lock-question"></span>
                  Preguntas de Seguridad
                </span>
              </div>
              <div class="card-body">
                <form method="POST">
                  <div class="card-body text-center">
                    <!--FILA SMALL-->
                    <div class="row text-left">
                      <div class="col-md-6">
                        <small for="formGroupExampleInput" class="ml-1">Primera Pregunta:</small>
                      </div>
                      <div class="col-md-6">
                        <small for="formGroupExampleInput" class="ml-1">Respuesta 1</small>
                      </div>
                    </div>
                    <!--FIN FILA SMALL-->
                    <!--FILA INPUT-->
                    <div class="row text-left">
                      <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="">
                      </div>
                      <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="">
                      </div>
                    </div>
                    <!--FIN FILA INPUT-->
                    <!--FILA SMALL-->
                    <div class="row text-left my-2">
                      <div class="col-md-6">
                        <small for="formGroupExampleInput" class="ml-1">Segunda Pregunta:</small>
                      </div>
                      <div class="col-md-6">
                        <small for="formGroupExampleInput" class="ml-1">Respuesta 2</small>
                      </div>
                    </div>
                    <!--FIN FILA SMALL-->
                    <!--FILA INPUT-->
                    <div class="row text-left">
                      <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="">
                      </div>
                      <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="">
                      </div>
                    </div>
                    <!--FIN FILA INPUT-->
                    <div class="row justify-content-end mx-1 my-5">
                      <a href="reestablecercontrasena3.php">
                        <button class="btn btn-sm btn-primary mx-1 font-weight-bold text-white" type="submit">
                          <span class="btn-sm text-white mdi mdi-check-circle"></span>
                          SIGUIENTE
                        </button>
                      </a>
                      <a href="iniciarsesion.php">
                        <button class="btn btn-sm btn-danger font-weight-bold" type="submit">
                          <span class="btn-sm text-white mdi mdi-cancel"></span>
                          CANCELAR
                        </button>
                      </a>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endif ?>
    </div>
  </div>
</div>
</div>

<?php include'footer.php'; ?>