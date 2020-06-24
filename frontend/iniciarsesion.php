<?php include'header.php'; ?>

<div class="container-fluid container7">
<h5 class="text-white text-center py-5 font-weight-bold fontindex">AUTENTICACIÓN DE USUARIO</h5>
</div>
  <div class="container-fluid container8 py-5">
    <!--CONTENIDO-->
    <div class="row justify-content-center">
        <div class="col-10">
          <div class="card card2 text-center bg-light">
            <div class="alert alert-info" role="alert">
              <span class="font-weight-bold text-primary"><span class="mdi mdi-lock">
              </span>Autenticación de Usuario<span>
            </div>
            <div class="card-body">
              <form class="form-signin text-center">
            <img class="mb-2" src="../bootstrap-4.5.0-dist/bootstrap-4.5.0-dist/img/saime.png" alt="" width="102" height="72">
            <div class="row justify-content-center">
            <div class="col-5">
            <div class="row justify-content-center">
              <div class="row">
              <h5 class="h5 mb-3">Por favor ingrese usuario y contraseña</h5>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-md-10">
              <small for="inputPassword" class="sr-only">Cédula de Identidad</small>
                <input type="password" id="inputPassword" class="form-control" placeholder="Cédula de Identidad" required>
              </div>
            </div>
            <div class="row justify-content-center my-2">
              <div class="col-md-10">
                <small for="inputPassword" class="sr-only">Contraseña</small>
                <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
              </div>
            </div>
            <div class="row justify-content-center my-2">
            <a href="reestablecercontrasena.php">¿Olvidó su contraseña?</a>
            </div>
            <div class="row justify-content-center my-2">
            <a href="terminosycondiciones.php">¿No se encuentra registrado?</a>
            </div>
            <div class="row justify-content-center">
            <div class="col-6">
            <button class="btn btn-sm btn-primary font-weight-bold" type="submit"> <span class="btn-sm text-white mdi mdi-logout"></span>INGRESAR</button>
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


<?php include'footer.php'; ?>