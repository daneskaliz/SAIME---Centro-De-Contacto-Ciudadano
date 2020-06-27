<?php include('headeradmin.php'); ?>

<div class="container-fluid containersesion8">
  <h5 class="text-white text-center py-5 font-weight-bold fontindex">MODIFICAR USUARIO</h5>
</div>
<div class="container-fluid containersesion9 py-5">
  <!--CONTENIDO-->
  <div class="row justify-content-center">
    <div class="col-10">
      <div class="card cardsesion1 bg-light">
        <?php if(!$_GET): ?>
        <div class="row justify-content-center py-1 mt-5 mb-5">
          <div class="col-10">
            <div class="card bg-white text-center">
              <div class="alert alert-info" role="alert">
                <span class="font-weight-bold text-primary"><span class="mdi mdi-clipboard-text"></span>
                  DATOS PERSONALES</span>
                <h6 class="card-subtitle mb-2 text-muted">Rellena todos los campos del formulario para completar tu
                  registro</h6>
              </div>
              <div class="card-body">

                <form method="POST">
                  <div class="row text-left">
                    <div class="card-body text-center">


                      <!--FILA SMALL-->
                      <div class="row text-left">
                        <div class="col-md-6">
                          <small for="formGroupExampleInput" class="ml-1 font-weight-bold">Primer Nombre:</small>
                        </div>
                        <div class="col-md-6">
                          <small for="formGroupExampleInput" class="ml-1 font-weight-bold">Segundo Nombre:</small>
                        </div>
                      </div>
                      <!--FIN FILA SMALL-->

                      <!--FILA INPUT-->
                      <div class="row text-left">
                        <div class="col-md-6">
                          <span class="ml-1"> Nilse </span>
                        </div>
                        <div class="col-md-6">
                          <span class="ml-1">Beatriz</span>
                        </div>
                      </div>
                      <!--FIN FILA INPUT-->

                      <!--FILA SMALL-->
                      <div class="row text-left my-2">
                        <div class="col-md-6">
                          <small for="formGroupExampleInput" class="ml-1 font-weight-bold">Primer Apellido:</small>
                        </div>
                        <div class="col-md-6">
                          <small for="formGroupExampleInput" class="ml-1 font-weight-bold">Segundo Apellido:</small>
                        </div>
                      </div>
                      <!--FIN FILA SMALL-->

                      <!--FILA INPUT-->
                      <div class="row text-left">
                        <div class="col-md-6">
                          <span class="ml-1">Ruiz</span>
                        </div>
                        <div class="col-md-6">
                          <span class="ml-1">Contreras</span>
                        </div>
                      </div>
                      <!--FIN FILA INPUT-->

                      <!--FILA SMALL-->
                      <div class="row text-left my-2">
                        <div class="col-md-6">
                          <small for="formGroupExampleInput" class="ml-1 font-weight-bold">Cédula:</small>
                        </div>
                        <div class="col-md-6">
                          <small for="formGroupExampleInput" class="ml-1 font-weight-bold">Fecha de Nacimiento:</small>
                        </div>
                      </div>
                      <!--FIN FILA SMALL-->

                      <!--FILA INPUT-->
                      <div class="row text-left">
                        <div class="col-md-2">
                          <span class="ml-1">V</span>
                        </div>
                        <div class="col-md-4">
                          <span class="ml-1">2938940</span>
                        </div>
                        <div class="col-md-6">
                          <span class="ml-1">16/11/1944</span>
                        </div>
                      </div>
                      <!--FIN FILA INPUT-->

                      <!--FILA SMALL-->
                      <div class="row text-left my-2">
                        <div class="col-md-6">
                          <small for="inputEmail4" class="ml-1 font-weight-bold">Correo Electrónico:</small>
                        </div>
                        <div class="col-md-6">
                          <small for="formGroupExampleInput" class="ml-1 font-weight-bold">Teléfono:</small>
                        </div>
                      </div>
                      <!--FIN FILA SMALL-->

                      <!--FILA INPUT-->
                      <div class="row text-left">
                        <div class="col-md-6">
                          <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-md-2">
                          <select id="inputState" class="form-control">
                            <option selected>0412</option>
                            <option>0414</option>
                            <option>0424</option>
                            <option>0416</option>
                            <option>0426</option>
                          </select>
                        </div>
                        <div class="col-md-4">
                          <input type="text" class="form-control" placeholder="">
                        </div>
                      </div>
                      <!--FIN FILA INPUT-->

                    </div>
                  </div>
              </div>
              <div class="alert alert-info" role="alert">
                <span class="font-weight-bold text-primary"><span class="mdi mdi-lock-question"></span>
                  PREGUNTAS DE SEGURIDAD</span>
              </div>
              <div class="row text-left">
                <div class="col-12">
                  <div class="card-body text-center">

                    <!--FILA SMALL-->
                    <div class="row text-left">
                      <div class="col-md-6">
                        <small for="formGroupExampleInput" class="ml-1 font-weight-bold">Primera Pregunta:</small>
                      </div>
                      <div class="col-md-6">
                        <small for="formGroupExampleInput" class="ml-1 font-weight-bold">Respuesta 1</small>
                      </div>
                    </div>
                    <!--FIN FILA SMALL-->

                    <!--FILA INPUT-->
                    <div class="row text-left">
                      <div class="col-md-6">
                        <select id="inputState" class="form-control">
                          <option selected>Seleccione</option>
                          <option>Nombre de su canción favorita</option>
                          <option>Nombre de su primera mascota</option>
                          <option>Lugar de nacimiento de su abuela</option>
                          <option>Color favorito</option>
                          <option>Marca de su primer carro</option>
                          <option>Equipo deportivo preferido</option>
                          <option>Fecha de nacimiento de tu padre</option>
                          <option>Lugar de nacimiento de su madre</option>
                          <option>Fruta favorita</option>
                          <option>Fecha de tu graduación</option>
                        </select>
                      </div>
                      <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="">
                      </div>
                    </div>
                    <!--FIN FILA INPUT-->

                    <!--FILA SMALL-->
                    <div class="row text-left my-2">
                      <div class="col-md-6">
                        <small for="formGroupExampleInput" class="ml-1 font-weight-bold">Segunda Pregunta:</small>
                      </div>
                      <div class="col-md-6">
                        <small for="formGroupExampleInput" class="ml-1 font-weight-bold">Respuesta 2</small>
                      </div>
                    </div>
                    <!--FIN FILA SMALL-->

                    <!--FILA INPUT-->
                    <div class="row text-left">
                      <div class="col-md-6">
                        <select id="inputState" class="form-control">
                          <option selected>Seleccione</option>
                          <option>Nombre de su canción favorita</option>
                          <option>Nombre de su primera mascota</option>
                          <option>Lugar de nacimiento de su abuela</option>
                          <option>Color favorito</option>
                          <option>Marca de su primer carro</option>
                          <option>Equipo deportivo preferido</option>
                          <option>Fecha de nacimiento de tu padre</option>
                          <option>Lugar de nacimiento de su madre</option>
                          <option>Fruta favorita</option>
                          <option>Fecha de tu graduación</option>
                        </select>
                      </div>
                      <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="">
                      </div>
                    </div>
                    <!--FIN FILA INPUT-->

                    <!--FILA SMALL-->
                    <div class="row text-left my-2">
                      <div class="col-md-6">
                        <small for="formGroupExampleInput" class="ml-1 font-weight-bold">Tercera Pregunta:</small>
                      </div>
                      <div class="col-md-6">
                        <small for="formGroupExampleInput" class="ml-1 font-weight-bold">Respuesta 3</small>
                      </div>
                    </div>
                    <!--FIN FILA SMALL-->

                    <!--FILA INPUT-->
                    <div class="row text-left">
                      <div class="col-md-6">
                        <select id="inputState" class="form-control">
                          <option selected>Seleccione</option>
                          <option>Nombre de su canción favorita</option>
                          <option>Nombre de su primera mascota</option>
                          <option>Lugar de nacimiento de su abuela</option>
                          <option>Color favorito</option>
                          <option>Marca de su primer carro</option>
                          <option>Equipo deportivo preferido</option>
                          <option>Fecha de nacimiento de tu padre</option>
                          <option>Lugar de nacimiento de su madre</option>
                          <option>Fruta favorita</option>
                          <option>Fecha de tu graduación</option>
                        </select>
                      </div>
                      <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="">
                      </div>
                    </div>
                    <!--FIN FILA INPUT-->

                    <div class="row justify-content-end my-1 mx-4 py-5">
                      <a href="registrousuario.php">
                        <button class="btn btn-sm btn-primary mx-1 font-weight-bold text-white" type="submit"> <span
                            class="btn-sm text-white mdi mdi-check-circle"></span>GUARDAR</button>
                      </a>
                    </div>

                  </div>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <?php endif ?>
      </div>
    </div>
  </div>
</div>

<?php include('footer.php'); ?>