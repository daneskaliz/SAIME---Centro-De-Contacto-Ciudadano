<?php include'../layout/header.php'; ?>

<div class="container-fluid container9">
  <h5 class="text-white text-center py-5 font-weight-bold fontindex">REGISTRO DE USUARIOS</h5>
</div>
<div class="container-fluid container10 py-5">
  <!--CONTENIDO-->
  <div class="row justify-content-center">
    <div class="col-10">
      <div class="card card3 text-center bg-light">
        <div class="alert alert-info" role="alert">
          <span class="font-weight-bold text-primary"><span class="mdi mdi-file-search">
            </span>Términos y Condiciones<span>
        </div>
        <div class="card-body">
          <p class="card-text text-justify mt-4 mx-2">Para poder obtener los servicios que brinda el nuevo portal web,
            usted debe registrarse previamente. Para ello, debe ingresar los datos que se solicitan a continuación, los
            cuales serán procesados en un breve plazo.</p>
          <p class="card-text text-justify mt-4 mx-2">Las condiciones para registrarse implican que usted debe ser un
            ciudadano cedulado y poseer una dirección de correo electrónico. Si aún no cuenta con dirección de correo
            acceda a un servidor de internet que brinde este servicio y regístrese en esta página.</p>
          <div class="row justify-content-center my-5">
            <input type="checkbox" v-model="variable_auxiliar" class="my-1 mx-1">HE LEÍDO Y ACEPTO
            LOS<a href="#" class="ml-1 mr-1">TÉRMINOS Y CONDICIONES</a> PARA REGISTRARME EN EL PORTAL.
          </div>
          <div class="row justify-content-end mx-1 mb-4">
            <a href="registrousuario.php">
              <button class="btn btn-sm btn-primary mx-1 font-weight-bold text-white" :disabled="!variable_auxiliar" type="submit">
                <span class="btn-sm text-white mdi mdi-check-circle"></span>
                SIGUIENTE
              </button>
            </a>
            <a href="iniciarsesion.php">
              <button class="text-white btn btn-sm btn-danger font-weight-bold" type="submit"> <span
                  class="btn-sm text-white mdi mdi-cancel"></span>CANCELAR</button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include'../layout/footer.php'; ?>