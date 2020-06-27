<?php include('headeradmin.php'); ?>

<div class="container-fluid containersesion12">
  <h5 class="text-white text-center py-5 font-weight-bold fontindex">CAMBIAR CONTRASEÑA</h5>
</div>
<div class="container-fluid containersesion13 py-5">
  <!--CONTENIDO-->
  <div class="row justify-content-center">
    <div class="col-10">
      <div class="card cardsesion2 text-center bg-light">
        <div class="alert alert-info" role="alert">
          <span class="font-weight-bold text-primary"><span class="mdi mdi-lock-alert">
            </span>Cambiar Contraseña: <h6 class="card-subtitle mb-2 text-muted">La contraseña
            que registre reemplazará la anterior
        </div>
        <form class="form-signin text-center">
          <img class="mb-2" src="../bootstrap-4.5.0-dist/bootstrap-4.5.0-dist/img/saime.png" alt="" width="102"
            height="72">
          <div class="row justify-content-center">
            <h5 class="h5 mb-3">Por favor ingrese una nueva contraseña</h5>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-3">
              <div class="row mb-2">
                <input type="text" id="inputEmail" class="form-control" placeholder="Contraseña antigua" required autofocus>
              </div>
              <div class="row mb-2">
                <input type="text" id="inputEmail" class="form-control" placeholder="Nueva contraseña" required autofocus>
              </div>
              <div class="row">
                <input type="text" id="inputEmail" class="form-control" placeholder="Confirmar contraseña" required autofocus>
              </div>
            </div>
          </div>
          <div class="row justify-content-center my-4">
            <div class="col-6">
              <button class="btn btn-sm btn-primary font-weight-bold" type="submit"> <span
                  class="btn-sm text-white mdi mdi-check-circle"></span>ACEPTAR</button>
            </div>
          </div>
      </div>
    </div>
    </form>
  </div>
</div>

<?php include('footer.php'); ?>