<?php include'header.php'; ?>

<div class="container-fluid container7"></div>
  <div class="container-fluid container8 py-5">
    <!--CONTENIDO-->
    <div class="row justify-content-center">
        <div class="col-10">
          <div class="card card2 text-center bg-light">
            <div class="card-body">
              <div class="alert alert-info mt-2" role="alert">
                <span class="font-weight-bold text-primary"><span class="mdi mdi-lock">
                </span>Autenticación de Usuario<span>
              </div>
              <form class="form-signin text-center">
            <img class="mb-2" src="../bootstrap-4.5.0-dist/bootstrap-4.5.0-dist/img/saime.png" alt="" width="102" height="72">
            <div class="row justify-content-center">
            <div class="col-4">
            <div class="row justify-content-center">
            <h5 class="h5 mb-3">Ingrese usuario y contraseña</h5>
            <label for="inputEmail" class="sr-only">Correo Electrónico</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Correo Electrónico" required autofocus>
            </div>
            <div class="row my-2">
            <label for="inputPassword" class="sr-only">Contraseña</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
            </div>
            <div class="row justify-content-center my-2">
            <a href="registrousuario.php">¿Olvidó su usuario o contraseña?</a>
            </div>
            <div class="row justify-content-center my-2">
            <a href="terminosycondiciones.php">¿No está registrado?</a>
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