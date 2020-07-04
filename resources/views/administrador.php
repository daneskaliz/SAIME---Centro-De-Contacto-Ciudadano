<?php include('../layout/header.php');
if(!$_SESSION){
  header('Location: index.php');
} else {
  if($_SESSION['rol'] != 'Master'){
   header('Location: index.php');
  }
}

function consultar ($pdo){
  $select_personas_admin = 'SELECT * FROM personas WHERE rol = ? ';
  $select_personas_admin_pdo = $pdo->prepare($select_personas_admin);
  $select_personas_admin_pdo->execute(array('Administrador'));
  return $select_personas_admin_pdo->fetchAll();
};

$personas_admin_res = consultar($pdo);


  if($_POST){

    
    $estatus_usuario = $_POST['estatus'];
    $cedula_admin = $_POST['cedula'];
    
    
    $update_estatus_query = 'UPDATE personas SET estatus = ? WHERE cedula = ? ';
    $update_estatus_pdo = $pdo->prepare($update_estatus_query);
    $update_estatus_pdo->execute(array($estatus_usuario, $cedula_admin));
    
    header('Location:administrador.php');    
    echo '
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong> <span class="mdi mdi-check" style="color:#384;"></span> Operación realizada</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    ';

  }

  if(!$personas_admin_res){
    echo'
      <div class="container-fluid containersesion4">
        <h5 class="text-white text-center py-5 font-weight-bold fontindex">HISTORIAL DE SOLICITUDES</h5>
      </div>
      <div class="container-fluid containersesion5 py-5">
        <div class="container contenidosesion2 bg-light pb-5">
          <div class="row ml-2">
            <h5 class="shadow-none font-weight-bold bg-light mt-4 rounded">Haz seguimiento a tus solicitudes.</h5>
          </div>
          <hr class="my-3">
          <div class="row text-center">
            <div class="col-12">
              <p class="text-danger my-4"><span class="mdi mdi-alert"></span> En este momento no registra solicitudes.</p>
            </div>
          </div>
          </div>
        </div>
      ';
    }
    ?>

<div class="container-fluid containersesion10">
  <h5 class="text-white text-center py-5 font-weight-bold fontindex">ADMINISTRAR USUARIOS</h5>
</div>

<div class="container-fluid containersesion11 my-5 py-5">
  <div class="container contenidosesion4 myscroll3 bg-light pb-5">
    <hr class="my-3">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="card my-5">
          <div class="card-body">
            <div class="row justify-end"><button class="btn btn-sm btn-primary m-2"> <a href="registrousuario.php">
              <span class="text-white mdi mdi-account-plus"></span></a></button>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Usuario</th>
                    <th scope="col">Nombre y Apellido</th>
                    <th scope="col">Estatus</th>
                    <th scope="col">Acción</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($personas_admin_res as $llave) : ?>
                  <tr>
                    <th scope="row"><input value="<?php echo $llave['cedula']?>"></th>
                    <td><input value="<?php echo $llave['primer_nombre'].' '.$llave['primer_apellido']; ?>"></td>
                    <td><input value="<?php echo $llave['estatus']; ?>"></td>
                    <td>
                      <button type="submit" class="btn btn-dark btn-sm text-white" data-toggle="modal"
                        data-target="#exampleModal<?php echo $llave['id']; ?>">
                        Administrar
                      </button>
                      <div class="modal fade" id="exampleModal<?php echo $llave['id']; ?>" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Detalles</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="card">
                                    <div class="alert alert-info font-weight-bold text-center" role="alert">
                                      <span class="mdi mdi-account"></span>
                                      <?php echo $llave['primer_nombre'].' '.$llave['primer_apellido']; ?>
                                    </div>
                                    <div class="card-body">
                                      <form method="POST">
                                        <input type="hidden" name="id" value="<?php echo $solicitud['id']; ?>">
                                        <div class="row">
                                          <div class="col-md-6">
                                            <span class="mdi mdi-card-account-details"></span> <small
                                              class="font-weight-bold"> Documento de identidad :
                                            </small>
                                          </div>
                                          <div class="col-md-6 mt-2">
                                            <input name="cedula" value="<?php echo $llave['cedula']; ?>">
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-6 mt-2">
                                            <span class="mdi mdi-email"></span> <small class="font-weight-bold"> Correo
                                              Electrónico: </small>
                                          </div>
                                          <div class="col-md-6 mt-4">
                                            <span><?php echo $llave['correo']; ?></span>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-6 mt-2">
                                            <span class="mdi mdi-cellphone-iphone"></span> <small
                                              class="font-weight-bold"> Teléfono: </small>
                                          </div>
                                          <div class="col-md-6 mt-4">
                                            <span><?php echo $llave['telefono']; ?></span>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-6">
                                            <span class="mdi mdi-account-multiple"></span> <small
                                              class="font-weight-bold"> Rol:
                                            </small>
                                          </div>
                                          <div class="col-md-6 mt-2">
                                            <span><?php echo $llave['rol']; ?></span>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-6">
                                            <span class="mdi mdi-clock"></span> <small class="font-weight-bold">
                                              Estatus:
                                            </small>
                                          </div>
                                          <div class="col-md-6">
                                            <v-select name="estatus" v-model="camposPorValidar[0]" dense outlined
                                              placeholder="Estatus" :items="['Habilitado','Deshabilitado']"
                                              v-model="camposPorValidar[0]" />
                                          </div>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="submit"
                                            :disabled="validar_campos(1,camposPorValidar,false,false)"
                                            class="btn btn-primary text-white">
                                            Guardar
                                          </button>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <?php include('../layout/footer.php'); ?>