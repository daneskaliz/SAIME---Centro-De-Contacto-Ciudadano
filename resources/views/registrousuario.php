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
    ($_SESSION['rol'] == 'Master') ? $rol_nuevo_usuario = 'Administrador' : $rol_nuevo_usuario = 'Usuario';
  } else {
    $rol_nuevo_usuario = 'Usuario';
  }

  $insert_datos_usuario_query = 'INSERT INTO personas (primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, cedula, fecha_nacimiento, correo, telefono, contrasena, pregunta_1, pregunta_2, pregunta_3, respuesta_1, respuesta_2, respuesta_3, rol,estatus) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
  $insert_datos_usuario_pdo = $pdo->prepare($insert_datos_usuario_query);
  $insert_datos_usuario_pdo->execute(array($primer_nombre, $segundo_nombre, $primer_apellido, $segundo_apellido, $cedula, $fecha_nacimiento, $correo, $telefono, $contrasena, $pregunta_uno, $pregunta_dos, $pregunta_tres, $respuesta_uno, $respuesta_dos, $respuesta_tres, $rol_nuevo_usuario, 'Habilitado'));
  
  echo '
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong> <span class="mdi mdi-check" style="color:#384;"></span>Usuario registrado</strong> - Puede iniciar sesión con su documento de identidad y contraseña.
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
                          <small for="formGroupExampleInput" class="ml-1 font-weight-bold">Primer nombre:</small>
                        </div>
                        <div class="col-md-6">
                          <small for="formGroupExampleInput" class="ml-1 font-weight-bold">Segundo nombre: </small>
                        </div>
                      </div>

                      <div class="row text-left">
                        <div class="col-md-6">
                          <v-text-field name="primer_nombre" v-model="camposPorValidar[0]" placeholder="Primer nombre"
                            :rules="[reglas.requerido]" dense outlined maxlength="20" hint="(*) Requerido"
                            persistent-hint />
                        </div>
                        <div class="col-md-6">
                          <v-text-field name="segundo_nombre" placeholder="Segundo nombre" dense outlined :rules="[reglas.requerido]"
                            maxlength="20" hint="(*) Requerido" v-model="camposPorValidar[16]"persistent-hint />
                        </div>
                      </div>
                      <!--FIN FILA INPUT-->
                      <div class="row text-left">
                        <div class="col-md-6">
                          <small for="formGroupExampleInput" class="ml-1 font-weight-bold">Primer apellido:</small>
                        </div>
                        <div class="col-md-6">
                          <small for="formGroupExampleInput" class="ml-1 font-weight-bold">Segundo apellido:</small>
                        </div>
                      </div>

                      <!--FILA INPUT-->
                      <div class="row text-left">
                        <div class="col-md-6">
                          <v-text-field name="primer_apellido" v-model="camposPorValidar[1]" placeholder="Primer apellido" dense
                            outlined maxlength="20" hint="(*) Requerido" persistent-hint :rules="[reglas.requerido]" />
                        </div>
                        <div class="col-md-6">
                          <v-text-field name="segundo_apellido" placeholder="Segundo apellido" dense outlined :rules="[reglas.requerido]"
                            maxlength="20" hint="(*) Requerido" v-model="camposPorValidar[15]"persistent-hint />
                        </div>
                      </div>
                      <!--FIN FILA INPUT-->
                      <div class="row text-left">
                        <div class="col-md-6">
                          <small for="formGroupExampleInput" class="ml-1 font-weight-bold">Cédula de identidad:</small>
                        </div>
                        <div class="col-md-6">
                          <small for="formGroupExampleInput" class="ml-1 font-weight-bold">Fecha de nacimiento:</small>
                        </div>
                      </div>

                      <!--FILA INPUT-->
                      <div class="row text-left">
                        <div class="col-md-6">
                          <v-text-field name="numero_cedula" v-model="camposPorValidar[2]" placeholder="Cédula de identidad"
                            dense outlined maxlength="8" hint="(*) Requerido" persistent-hint
                            :rules="[reglas.requerido]" />
                        </div>
                        <div class="col-md-6">
                          <v-text-field name="fecha_nacimiento" type="date" v-model="camposPorValidar[3]" placeholder="Fecha de nacimiento" dense
                            outlined hint="(*) Requerido" persistent-hint :rules="[reglas.requerido]" />
                        </div>
                      </div>
                      <div class="row text-left">
                        <div class="col-md-6">
                          <small for="formGroupExampleInput" class="ml-1 font-weight-bold">Correo electrónico:</small>
                        </div>
                        <div class="col-md-6">
                          <small for="formGroupExampleInput" class="ml-1 font-weight-bold">Número telefónico:</small>
                        </div>
                      </div>

                      <div class="row text-left">
                        <div class="col-md-6">
                          <v-text-field type="email" name="correo" v-model="camposPorValidar[4]"
                            placeholder="Correo electrónico" dense outlined maxlength="50" hint="(*) Requerido"
                            persistent-hint :rules="[reglas.requerido]" />
                        </div>
                        <div class="col-md-2">
                          <v-text-field name="codigo_telefono" v-model="camposPorValidar[5]" placeholder="Código" dense
                            outlined maxlength="4" hint="(*) Requerido" persistent-hint :rules="[reglas.requerido]" />
                        </div>
                        <div class="col-md-4">
                          <v-text-field name="numero_telefono" v-model="camposPorValidar[6]" placeholder="Número de teléfono"
                            dense outlined maxlength="7" hint="(*) Requerido" persistent-hint
                            :rules="[reglas.requerido]" />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="alert alert-info" role="alert">
                    <span id="contrasenas" class="font-weight-bold text-primary"><span class="mdi mdi-lock-question"></span>
                      SEGURIDAD</span>
                  </div>
                  <div class="row text-left">
                    <div class="col-12">
                      <div class="card-body text-center">
                        <div class="row text-left">
                          <div class="col-md-6">
                            <small class="ml-1 font-weight-bold">Contraseña:</small>
                          </div>
                          <div class="col-md-6">
                            <small class="ml-1 font-weight-bold">Confirmar
                              contraseña:</small>
                          </div>
                        </div>

                        <!--FILA INPUT-->
                        <div class="row text-left">
                          <div class="col-md-6">
                            <v-text-field name="contrasena" placeholder="Contraseña" v-model="camposPorValidar[7]" dense outlined maxlength="8"
                              hint="(*) Requerido" type="password" persistent-hint :rules="[reglas.requerido]" />
                          </div>
                          <div class="col-md-6">
                            <v-text-field name="confirmar_contrasena" type="password" v-model="camposPorValidar[8]" placeholder="Contraseña" dense
                              outlined maxlength="8" hint="(*) Requerido" persistent-hint :rules="[reglas.requerido]" />
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
                            <v-select name="pregunta_uno" :items="preguntas_a" v-model="camposPorValidar[9]" placeholder="Seleccionar" dense
                              outlined hint="(*) Requerido" persistent-hint :rules="[reglas.requerido]">
                            </v-select>
                          </div>
                          <div class="col-md-6">
                            <v-text-field name="respuesta_uno" v-model="camposPorValidar[10]" placeholder="Respuesta 1" dense outlined
                              hint="(*) Requerido" persistent-hint />
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
                          <v-select name="pregunta_dos" :items="preguntas_b" v-model="camposPorValidar[11]" placeholder="Seleccionar" dense
                              outlined hint="(*) Requerido" persistent-hint :rules="[reglas.requerido]">
                            </v-select>
                          </div>
                          <div class="col-md-6">
                            <v-text-field name="respuesta_dos" placeholder="Respuesta 2" v-model="camposPorValidar[12]" dense outlined
                              hint="(*) Requerido" persistent-hint />
                          </div>
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
                          <v-select name="pregunta_tres" :items="preguntas_c" v-model="camposPorValidar[13]" placeholder="Seleccionar" dense
                            outlined hint="(*) Requerido" persistent-hint :rules="[reglas.requerido]">
                          </v-select>
                        </div>
                        <div class="col-md-6">
                          <v-text-field name="respuesta_tres" placeholder="Respuesta 3" v-model="camposPorValidar[14]" dense outlined
                            hint="(*) Requerido" persistent-hint />
                        </div>
                      </div>
                    </div>
                    <!--FIN FILA INPUT-->

                    <div class="row justify-content-end my-1 mx-4 py-5">
                      <button
                        class="btn btn-sm btn-primary mx-1 font-weight-bold text-white"
                        v-if="comparar_contrasenas(camposPorValidar[7],camposPorValidar[8])"
                        :disabled="validar_campos(17, camposPorValidar, false, null)"
                        type="submit"
                      >
                        <span class="btn-sm text-white mdi mdi-check-circle"></span>
                        REGISTRAR
                      </button>
                      <!-- <v-btn @click="pruebas" >TEST</v-btn> -->
                      <div class="row" v-else>
                        <a class="text-danger mx-auto" href="#contrasenas" style="text-decoration:none;">
                        <v-icon color="#e76">mdi-alert-circle-outline</v-icon>
                          Las contraseñas deben coincidir entre sí y tener 8 caracteres 
                          <hr>
                        </a>
                      </div>
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
<?php include('../layout/footer.php'); ?>