<?php 
include'../layout/header.php';

if($_SESSION){
  header('Location: index.php');
}

/*
  * Se incluye en las vistas que requieran validar la sesión
  * A traves de esta sentencia, viaja la variable del usuario entre las vistas
*/

if($_POST){ // * Si se activa el método POST
  
  $usuario_login = $_POST['cedula']; // * guardar el usuario ingresado, en una variable
  $contrasena_login = $_POST['contrasena'];
  
  $select_usuario_query = 'SELECT * FROM personas WHERE cedula = ?'; // * devuelve los datos del usuario desde BBDD (en este punto el usuario esta por definir)
  $select_usuario_pdo = $pdo->prepare($select_usuario_query); // * se prepara la sentencia
  $select_usuario_pdo->execute(array($usuario_login)); // * se ejecuta la sentencia y se pasa el usuario como parametro

  $select_usuario_resultado = $select_usuario_pdo->fetch(); // * Guardar el resultado de la consulta

  // * Validar usuario y contraseña desde BD
    
  if($select_usuario_resultado && password_verify($contrasena_login, $select_usuario_resultado['contrasena'])){
  
    $_SESSION = $select_usuario_resultado;
    header('Location: index.php');
    
  } else {
    
    $_SESSION = array();
    
    if (ini_get("session.use_cookies")) {
      $params = session_get_cookie_params();
      setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
      );
    }
    
    session_destroy();
    $select_usuario_query = null;
    $select_usuario_pdo = null;
    $select_usuario_resultado = null;
    
    header('Location:iniciarsesion.php?error=true');
    
  }
}

if(isset($_GET['error'])){
  echo '
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong> <span class="mdi mdi-alert-circle" style="color:#834;"></span> Datos incorrectos</strong> Por favor ingrese un usuario y contraseña válida para continuar.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
      </div>
    ';
}

if(isset($_GET['cc'])){
  echo '
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong> <span class="mdi mdi-check" style="color:#384;"></span> Contraseña actualizada</strong> Puede iniciar sesión con la contraseña nueva.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>
  ';
}

?>

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
          <form class="form-signin text-center" method="POST">
            <img class="mb-2" src="../../assets/img/saime.png" alt="" width="102" height="72">
            <div class="row justify-content-center">
              <div class="col-5">
                <div class="row justify-content-center">
                  <div class="row justify-content-center">
                    <h5 class="h5 mb-3">Por favor ingrese usuario y contraseña</h5>
                  </div>
                </div>
                <div class="row justify-content-center">
                  <div class="col-md-10">
                    <small for="inputPassword" class="sr-only">Cédula de Identidad</small>
                    <input name="cedula" class="form-control" placeholder="Cédula de identidad" required>
                  </div>
                </div>
                <div class="row justify-content-center my-2">
                  <div class="col-md-10">
                    <small for="inputPassword" class="sr-only">Contraseña</small>
                    <input name="contrasena" type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
                  </div>
                </div>
                <div class="row justify-content-center my-2">
                  <a href="validar_usuario.php">¿Olvidó su contraseña?</a>
                </div>
                <div class="row justify-content-center my-2">
                  <a href="terminosycondiciones.php">¿No se encuentra registrado?</a>
                </div>
                <div class="row justify-content-center">
                  <div class="col-6">
                    <!-- href="sesion1.php" --></span>
                    <button class="btn btn-primary btn-sm font-weight-bold" type="submit" role="button">
                      <span class="mdi mdi-login text-white"></span>
                      INGRESAR
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

<?php include'../layout/footer.php'; ?>