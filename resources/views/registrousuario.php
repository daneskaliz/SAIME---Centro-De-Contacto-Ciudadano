<?php

include('../layout/header.php');

if($_POST){

  $primer_nombre = $_POST['primer_nombre'];
  $segundo_nombre = $_POST['segundo_nombre'];
  $primer_apellido = $_POST['primer_apellido'];
  $segundo_apellido = $_POST['segundo_apellido'];
  $cedula = $_POST['numero_cedula'];
  $fecha_nacimiento = $_POST['fecha_nacimiento'];
  $correo = $_POST['correo'];
  $telefono = $_POST['codigo_telefono'].$_POST['numero_telefono'];
  $confirmar_contrasena = $_POST['confirmar_contrasena'];
  $contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);

  $respuesta_uno = $_POST['respuesta_uno'];
  $respuesta_dos = $_POST['respuesta_dos'];
  $respuesta_tres = $_POST['respuesta_tres'];

  $pregunta_uno = $_POST['pregunta_uno'];
  $pregunta_dos = $_POST['pregunta_dos'];
  $pregunta_tres = $_POST['pregunta_tres'];
  
  $rol_nuevo_usuario = '';

  if(isset($_SESSION['rol'])){
    ($_SESSION['rol'] == 'Administrador') ? $rol_nuevo_usuario = 'Administrador' : $rol_nuevo_usuario = 'Usuario';
  } else {
    $rol_nuevo_usuario = 'Usuario';
  }

  $insert_datos_usuario_query = 'INSERT INTO personas (primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, cedula, fecha_nacimiento, correo, telefono, contrasena, pregunta_1, pregunta_2, pregunta_3, respuesta_1, respuesta_2, respuesta_3, rol) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
  $insert_datos_usuario_pdo = $pdo->prepare($insert_datos_usuario_query);
  $insert_datos_usuario_pdo->execute(array($primer_nombre, $segundo_nombre, $primer_apellido, $segundo_apellido, $cedula, $fecha_nacimiento, $correo, $telefono, $contrasena, $pregunta_uno, $pregunta_dos, $pregunta_tres, $respuesta_uno, $respuesta_dos, $respuesta_tres, $rol_nuevo_usuario));
  
  echo '
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong> <span class="mdi mdi-check" style="color:#384;"></span> Operación realizada</strong>
       El usuario ha sido agregado exitosamente
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  ';
}

?>

<div class="container-fluid container11">
  <h5 class="text-white text-center py-5 font-weight-bold fontindex">REGISTRO DE USUARIOS</h5>
</div>
<div class="container-fluid container12 py-5">
  <!--CONTENIDO-->
  <div class="row justify-content-center">
    <div class="col-10">
      <div class="card card4 bg-light">
        <div class="row justify-content-center py-1 mt-5 mb-5">
          <div class="col-10">
            <div class="card bg-white text-center">
              <div class="alert alert-info" role="alert">
                <span class="font-weight-bold text-primary"><span class="mdi mdi-clipboard-text"></span>
                  DATOS PERSONALES</span>
                <h6 class="card-subtitle mb-2 text-muted">
                  Por favor complete los campos para crear un usuario
                  <?php if(isset($_SESSION['rol'])) { if ($_SESSION['rol'] == 'Administrador') {echo 'con el rol de <b>Administrador</b>';}} ?>
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
                          <input type="text" name="primer_nombre" class="form-control">
                        </div>
                        <div class="col-md-6">
                          <input type="text" name="segundo_nombre" class="form-control">
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
                          <input type="text" name="primer_apellido" class="form-control">
                        </div>
                        <div class="col-md-6">
                          <input type="text" name="segundo_apellido" class="form-control">
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
                          <input type="text" name="numero_cedula" class="form-control">
                        </div>
                        <div class="col-md-6">
                          <input type="date" name="fecha_nacimiento" class="form-control">
                        </div>
                      </div>
                      <div class="row text-left my-2">
                        <div class="col-md-6">
                          <small for="inputEmail4" class="ml-1 font-weight-bold">Correo Electrónico:</small>
                        </div>
                        <div class="col-md-6">
                          <small for="formGroupExampleInput" class="ml-1 font-weight-bold">Teléfono:</small>
                        </div>
                      </div>
                      <div class="row text-left">
                        <div class="col-md-6">
                          <input type="email" name="correo" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-md-2">
                          <select name="codigo_telefono" class="form-control">
                            <option selected>0412</option>
                            <option>0414</option>
                            <option>0424</option>
                            <option>0416</option>
                            <option>0426</option>
                          </select>
                        </div>
                        <div class="col-md-4">
                          <input type="text" name="numero_telefono" class="form-control">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="alert alert-info" role="alert">
                    <span class="font-weight-bold text-primary"><span class="mdi mdi-lock-question"></span>
                      SEGURIDAD</span>
                  </div>
                  <div class="row text-left">
                    <div class="col-12">
                      <div class="card-body text-center">

                        <!--FILA SMALL-->
                        <div class="row text-left">
                          <div class="col-md-6">
                            <small for="formGroupExampleInput" class="ml-1 font-weight-bold">Contraseña</small>
                          </div>
                          <div class="col-md-6">
                            <small for="formGroupExampleInput" class="ml-1 font-weight-bold">Confirmar
                              Contraseña:</small>
                          </div>
                        </div>
                        <!--FIN FILA SMALL-->

                        <!--FILA INPUT-->
                        <div class="row text-left">
                          <div class="col-md-6">
                            <input type="text" name="contrasena" class="form-control">
                          </div>
                          <div class="col-md-6">
                            <input type="text" name="confirmar_contrasena" class="form-control">
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
                            <select name="pregunta_uno" class="form-control">
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
                            <input type="text" name="respuesta_uno" class="form-control">
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
                            <select name="pregunta_dos" class="form-control">
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
                            <input type="text" name="respuesta_dos" class="form-control">
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
                            <select name="pregunta_tres" class="form-control">
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
                            <input type="text" name="respuesta_tres" class="form-control">
                          </div>
                        </div>
                        <!--FIN FILA INPUT-->

                        <div class="row justify-content-end my-1 mx-4 py-5">
                          <button class="btn btn-sm btn-primary mx-1 font-weight-bold text-white" type="submit">
                            <span class="btn-sm text-white mdi mdi-check-circle"></span>
                            REGISTRAR
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