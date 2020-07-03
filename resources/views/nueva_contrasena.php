<?php

include('../layout/header.php');
if($_SESSION || !isset($_GET['a'])){
  header('Location: index.php');
}

if($_POST){
  
  if($_POST['nueva_contrasena'] == $_POST['contrasena_confirmada']){

    $nueva_contrasena = password_hash($_POST['nueva_contrasena'], PASSWORD_DEFAULT);

    $update_contrasena_query = 'UPDATE personas SET contrasena = ? WHERE personas . cedula = ?';
    $update_contrasena_pdo = $pdo->prepare($update_contrasena_query);
    $update_contrasena_pdo->execute(array($nueva_contrasena, $_GET['a']));

    header('Location:iniciarsesion.php?cc=ok');

  } else{
    echo '
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong> <span class="mdi mdi-alert-circle" style="color:#834;"></span> Las contraseñas no coinciden</strong> Por favor complete nuevamente el formulario para continuar.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
      </div>
    ';
  }
}

?>

<div class="container-fluid container17">
  <h5 class="text-white text-center py-5 font-weight-bold fontindex">REESTABLECER CONTRASEÑA</h5>
</div>
<div class="container-fluid container18 py-5">
  <!--CONTENIDO-->
  <div class="row justify-content-center">
    <div class="col-10">
      <div class="card card7 text-center bg-light">
        <div class="alert alert-info" role="alert">
          <span class="font-weight-bold text-primary"><span class="mdi mdi-lock-alert">
            </span>Reestablecer Contraseña: <h6 class="card-subtitle mb-2 text-muted">Podría iniciar sesión en esta
              cuenta de usuario con la nueva contraseña</h6><span>
        </div>
        <form class="form-signin text-center" method="POST">
          <img class="mb-2" src="../../assets/img/saime.png" alt="" width="102" height="72">
          <div class="row justify-content-center">
            <h5 class="h5 mb-3">Por favor ingrese una nueva contraseña</h5>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-3">
              <div class="row mb-2">
                <v-text-field name="nueva_contrasena" type="password" v-model="camposPorValidar[0]" placeholder="Contraseña"
                  :rules="[reglas.requerido]" dense outlined counter="8" maxlength="8" autofocus/>
              </div>
              <div class="row">
                <v-text-field name="contrasena_confirmada" type="password" v-model="camposPorValidar[1]"
                  placeholder="Confirmar contraseña" :rules="[reglas.requerido]" :error-messages="variable_auxiliar" dense outlined counter="8"
                  maxlength="8" />
              </div>
            </div>
          </div>
          <div class="row justify-content-center my-4">
            <div class="col-6">
              <button class="btn btn-sm btn-primary font-weight-bold text-white"
                :disabled="validar_campos(2, camposPorValidar, true, 8)" type="submit">
                <span class="btn-sm text-white mdi mdi-send"></span>
                REESTABLECER
              </button>
              <v-snackbar v-model="snack.active">
                <span class="mdi mdi-information-outline"></span>
                {{ snack.msg }}
              </v-snackbar>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php include('../layout/footer.php'); ?>