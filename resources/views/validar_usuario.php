<?php

include'../layout/header.php';
if($_SESSION){
  header('Location: index.php');
}

if($_POST){

  
  $x = rand(1,3);

  $y = rand(1,3);

  while ($x == $y) {
    
    $y = rand(1,3);

  }

  $cedula_consultada = $_POST['cedula'];

  $select_cedula_query = 'SELECT * FROM personas WHERE cedula = ?';
  $select_cedula_pdo = $pdo->prepare($select_cedula_query);
  $select_cedula_pdo->execute(array($cedula_consultada));  

  $select_cedula_resultado = $select_cedula_pdo->fetch();

  if($select_cedula_resultado){
    
    $_POST['codigo'] = 1;
    
    header('Location:preguntas_seguridad.php?b='.$cedula_consultada.'&x='.$x.'&y='.$y);
  }
  else {
     echo '
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong> <span class="mdi mdi-alert-circle" style="color:#834;"></span> Datos incorrectos</strong> Por favor ingrese un usuario válido para continuar.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    ';
  }
  
}

?>

<div class="container-fluid container13">
  <h5 class="text-white text-center py-5 font-weight-bold fontindex">REESTABLECER CONTRASEÑA</h5>
</div>
<div class="container-fluid container14 py-5">
  <!--CONTENIDO-->
  <div class="row justify-content-center">
    <div class="col-10">
      <div class="card card5 text-center bg-light">
        <div class="alert alert-info" role="alert">
          <span class="font-weight-bold text-primary"><span class="mdi mdi-lock-alert">
            </span>Reestablecer Contraseña<span>
        </div>
        <div class="card-body">
          <form class="form-signin text-center" method="POST">
            <img class="mb-2" src="../../assets/img/saime.png" alt="" width="102" height="72">
            <div class="row justify-content-center">
              <h5 class="h5 mb-3">Por favor ingrese su usuario</h5>
            </div>
            <div class="row justify-content-center">
              <div class="col-md-4">
                <input type="text" id="inputEmail" class="form-control" name="cedula" placeholder="Cédula de identidad"
                  autofocus>
              </div>
            </div>
            <div class="row justify-content-center my-4">
              <div class="col-6">
                <button class="btn btn-sm btn-primary font-weight-bold" type="submit">
                  <span class="btn-sm text-white mdi mdi-send"></span>
                  ENVIAR
                </button>
              </div>
            </div>
        </div>
      </div>
      </form>
    </div>
  </div>
</div>

<?php include'../layout/footer.php'; ?>