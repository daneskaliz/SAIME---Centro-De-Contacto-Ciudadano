<?php
  include('../layout/header.php');

  if(!$_SESSION){
    header('Location: index.php');
  } 

if($_POST){
  $contrasena_actual = $_POST['contrasena_actual'];
  $contrasena_nueva = $_POST['contrasena_nueva'];
  $contrasena_nueva_confirmada = $_POST['contrasena_nueva_confirmada'];
  
  $consultar_usuario_query = 'SELECT * FROM personas where cedula = ?';
  $consultar_usuario_pdo = $pdo->prepare($consultar_usuario_query);
  $consultar_usuario_pdo->execute(array($_SESSION['cedula']));

  $consultar_usuario_res = $consultar_usuario_pdo->fetch();

  // Validar contrasena

  if(password_verify($contrasena_actual, $consultar_usuario_res['contrasena'])){
    
    $contrasena_nueva = password_hash($_POST['contrasena_nueva'], PASSWORD_DEFAULT);

    $update_contrasena_query = 'UPDATE personas SET contrasena = ? WHERE personas . cedula =  ?';
    $update_contrasena__pdo = $pdo->prepare($update_contrasena_query);
    $update_contrasena__pdo->execute(array($contrasena_nueva, $_SESSION['cedula']));    

    echo '
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong> <span class="mdi mdi-check" style="color:#384;"></span>
    Su contraseña ha sido modificada</strong>
    A partir de ahora, debe utilizar la nueva contraseña para iniciar sesión 
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>
  ';
  
  } else {
    echo '
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong> <span class="mdi mdi-alert-circle" style="color:#834;"></span>
      La contraseña actual no coincide con la registrada</strong> Por favor intente nuevamente.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
      </div>
    ';
  }


}


?>

<div class="container-fluid containersesion12">
  <h5 class="text-white text-center py-5 font-weight-bold fontindex">CAMBIAR CONTRASEÑA</h5>
</div>
<div class="container-fluid containersesion13 py-5">
  <!--CONTENIDO-->
  <div class="row justify-content-center">
    <div class="col-10">
      <div class="card cardsesion2 text-center bg-light">
        <div class="alert alert-info" role="alert">
          <span class="font-weight-bold text-primary">
            <span class="mdi mdi-lock-alert"></span>
            Cambiar Contraseña:
          </span>
          <h6 class="card-subtitle mb-2 text-muted">La contraseña que registre reemplazará la anterior</h6>
        </div>
        <form class="form-signin text-center" method="POST">
          <img class="mb-2" src="../../assets/img/saime.png" alt="" width="102" height="72">
          <div class="row justify-content-center">
            <blockquote class="blockquote">Por favor complete los campos</blockquote>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-3">
              <div class="row mb-2">
                <v-text-field type="password" name="contrasena_actual" v-model="camposPorValidar[0]" placeholder="Contraseña actual"
                  :rules="[reglas.requerido]" dense outlined counter="8" maxlength="8" />
              </div>
              <div class="row mb-2">
                <v-text-field type="password" v-model="camposPorValidar[1]" name="contrasena_nueva"
                  placeholder="Nueva contraseña" :rules="[reglas.requerido]" dense outlined counter="8" maxlength="8" />
              </div>
              <div class="row">
                <v-text-field type="password" v-model="camposPorValidar[2]" name="contrasena_nueva_confirmada"
                  placeholder="Confirmar contraseña" :rules="[reglas.requerido]" dense outlined counter="8"
                  maxlength="8" />
              </div>
            </div>
          </div>
          <div class="row justify-content-center my-4">
            <div class="col-6" v-if="comparar_contrasenas(camposPorValidar[1],camposPorValidar[2])">
              <button
                class="btn btn-sm btn-primary text-white"
                :disabled="validar_campos(3, camposPorValidar)"
                type="submit">
                <span class="btn-sm text-white mdi mdi-check-circle"></span>
                ACEPTAR
              </button>
            </div>
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
    </form>
  </div>
</div>

<?php include('../layout/footer.php'); ?>