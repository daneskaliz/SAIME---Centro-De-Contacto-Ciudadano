<?php include'header.php'; ?>

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
        <form class="form-signin text-center">
          <img class="mb-2" src="../bootstrap-4.5.0-dist/bootstrap-4.5.0-dist/img/saime.png" alt="" width="102"
            height="72">
          <div class="row justify-content-center">
            <h5 class="h5 mb-3">Por favor ingrese una nueva contraseña</h5>
            <small for="inputEmail" class="sr-only">Contraseña nueva</small>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-4">
              <input type="email" id="inputEmail" class="form-control" placeholder="Contraseña" required autofocus>
            </div>
          </div>
          <div class="row justify-content-center my-4">
            <div class="col-6">
              <button class="btn btn-sm btn-primary font-weight-bold" type="submit"> <span
                  class="btn-sm text-white mdi mdi-send"></span>REESTABLECER</button>
            </div>
          </div>
      </div>
    </div>
    </form>
  </div>
</div>

<?php include'footer.php'; ?>