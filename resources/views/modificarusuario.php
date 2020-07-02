<?php

include('../layout/header.php');
if(!$_SESSION){
  header('Location: index.php');
}

// TODO Crear un raidioButton para definir si se toma o no el cambio en la preguntas de seguridad

$select_usuario_modificar = 'SELECT * FROM personas WHERE cedula = ?';
$select_usuario_md_pdo = $pdo->prepare($select_usuario_modificar);
$select_usuario_md_pdo->execute(array($_SESSION['cedula']));

$select_usuario_md_resultado = $select_usuario_md_pdo->fetch();

if($_POST){

  $correo = $_POST['correo'];
  $telefono = $_POST['telef'];
  
  $respuesta_uno = $_POST['respuesta_1'];
  $respuesta_dos = $_POST['respuesta_2'];
  $respuesta_tres = $_POST['respuesta_3'];

  $pregunta_uno = $_POST['pregunta_1'];
  $pregunta_dos = $_POST['pregunta_2'];
  $pregunta_tres = $_POST['pregunta_3'];
  
  $update_usuario_query = 'UPDATE personas SET telefono = ?,  correo = ? WHERE cedula=?';
  $update_usuario_pdo = $pdo->prepare($update_usuario_query);
  $update_usuario_pdo->execute(array($telefono, $correo, $_SESSION['cedula']));

  echo '
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong> <span class="mdi mdi-check" style="color:#384;"></span> Operación realizada</strong>
       El usuario ha sido modificado exitosamente
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  ';
}

?>

<div class="container-fluid containersesion8">
  <h5 class="text-white text-center py-5 font-weight-bold fontindex">MODIFICAR USUARIO</h5>
</div>
<div class="container-fluid containersesion9 py-5">
  <!--CONTENIDO-->
  <div class="row justify-content-center">
    <div class="col-10">
      <div class="card cardsesion1 bg-light">

        <div class="row justify-content-center py-1 mt-5 mb-5">
          <div class="col-10">
            <div class="card bg-white text-center">
              <div class="alert alert-info" role="alert">
                <span class="font-weight-bold text-primary">
                  <span class="mdi mdi-clipboard-text"></span>
                  DATOS PERSONALES
                </span>
                <h6 class="card-subtitle mb-2 text-muted">
                  Rellena todos los campos del formulario para completar tu registro
                </h6>
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
                          <span class="ml-1"><?php echo $select_usuario_md_resultado['primer_nombre']; ?></span>
                        </div>
                        <div class="col-md-6">
                          <span class="ml-1"><?php echo $select_usuario_md_resultado['segundo_nombre']; ?></span>
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
                          <span class="ml-1"><?php echo $select_usuario_md_resultado['primer_apellido']; ?></span>
                        </div>
                        <div class="col-md-6">
                          <span class="ml-1"><?php echo $select_usuario_md_resultado['segundo_apellido']; ?></span>
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
                        <div class="col-md-6">
                          <span class="ml-1"><?php echo $select_usuario_md_resultado['cedula']; ?></span>
                        </div>
                        <div class="col-md-6">
                          <span class="ml-1"><?php echo $select_usuario_md_resultado['fecha_nacimiento']; ?></span>
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
                          <input
                            type="email"
                            class="form-control"
                            name="correo"
                            id="inputEmail4"
                            value="<?php echo $select_usuario_md_resultado['correo']; ?>"
                            >
                        </div>
                        <div class="col-md-6">
                        <input
                            class="form-control"
                            name="telef"
                            id="telef"
                            value="<?php echo $select_usuario_md_resultado['telefono']; ?>"
                            >
                        </div>
                      </div>
                      <!--FIN FILA INPUT-->

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
                            <select id="inputState" name="pregunta_1" class="form-control">
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
                            <input type="text" class="form-control" name="respuesta_1">
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
                            <select id="inputState" name="pregunta_2" class="form-control">
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
                            <input type="text" class="form-control" name="respuesta_2">
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
                            <select id="inputState" name="pregunta_3" class="form-control">
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
                            <input type="text" class="form-control" name="respuesta_3">
                          </div>
                        </div>
                        <!--FIN FILA INPUT-->

                        <div class="row justify-content-end my-1 mx-4 py-5">
                          <button class="btn btn-sm btn-primary mx-1 font-weight-bold text-white" type="submit">
                            <span class="btn-sm text-white mdi mdi-check-circle"></span>
                            GUARDAR
                          </button>
                        </div>

                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include('../layout/footer.php'); ?>