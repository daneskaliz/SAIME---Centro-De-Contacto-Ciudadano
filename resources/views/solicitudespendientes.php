<?php
include('../layout/header.php');
if(!$_SESSION){
  header('Location: index.php');
} else {
  if($_SESSION['rol'] != 'Administrador'){
    header('Location: index.php');
  }
}

function consultar ($pdo){
  $select_solicitudes_admin = 'SELECT * FROM solicitudes WHERE estatus_solicitud = ? ';
  $select_solicitudes_admin_pdo = $pdo->prepare($select_solicitudes_admin);
  $select_solicitudes_admin_pdo->execute(array('Solicitud pendiente'));
  return $select_solicitudes_admin_pdo->fetchAll();
};

$solicitudes_admin_res = consultar($pdo);


  if($_POST){

    $observaciones_u = $_POST['observaciones'];
    $id_u = $_POST['id'];
    $estatus_modificado = $_POST['estatus_modificado'];
    // probar insertar array
    $update_solicitudes_admin = 'UPDATE solicitudes SET observaciones = ?, estatus_solicitud = ?, fecha_atencion = ? WHERE id = ? ';
    $update_solicitudes_admin_pdo = $pdo->prepare($update_solicitudes_admin);
    $update_solicitudes_admin_pdo->execute(array($observaciones_u, $estatus_modificado, date('d-m-Y'), $id_u));    
    consultar($pdo);
    echo '
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong> <span class="mdi mdi-check" style="color:#384;"></span> Operación realizada</strong>
       Solicitud atendida
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  ';

  }

  if(!$solicitudes_admin_res){
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
  } else{
  ?>

<div class="container-fluid containersesion10">
  <h5 class="text-white text-center py-5 font-weight-bold fontindex">BANDEJA DE SOLICITUDES</h5>
</div>

<div class="container-fluid containersesion11 my-5 py-5">
  <div class="container contenidosesion4 myscroll3 bg-light pb-5">
    <hr class="my-3">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="card my-5">
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Fecha</th>
                  <th scope="col">Usuario</th>
                  <th scope="col">Tipo de Solicitud</th>
                  <th scope="col">Estatus</th>
                  <th scope="col">Detalles</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($solicitudes_admin_res as $solicitud) : ?>
                <tr>
                  <th scope="row"><?php echo $solicitud['id']; ?></th>
                  <td><?php echo $solicitud['fecha_solicitud'] ?></td>
                  <td><?php echo $solicitud['documento_solicitante'] ?></td>
                  <td><?php echo $solicitud['tipo_solicitud'] ?></td>
                  <td>
                    <span class="mdi mdi-cancel"></span>
                  </td>
                  <td>
                    <button type="button" class="btn btn-dark text-white btn-sm" data-toggle="modal"
                      data-target="#exampleModal<?php echo $solicitud['id']; ?>">
                      Ver
                    </button>
                    <div class="modal fade" id="exampleModal<?php echo $solicitud['id']; ?>" tabindex="-1" role="dialog"
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
                                  <div class="alert alert-danger font-weight-bold text-center" role="alert">
                                    <span class="mdi mdi-cancel"></span>
                                    <?php echo $solicitud['estatus_solicitud']; ?>
                                  </div>
                                  <div class="card-body">
                                    <form method="POST">
                                      <input type="hidden" name="id" value="<?php echo $solicitud['id']; ?>">
                                      <div class="row mb-2">
                                        <div class="col-md-6">
                                          <span class="mdi mdi-card-account-details"></span> <small
                                            class="font-weight-bold"> C.I. :
                                          </small>
                                        </div>
                                        <div class="col-md-6">
                                          <input class="form-control" readonly name="documento_solicitante"
                                            value="<?php echo $solicitud['documento_solicitante']; ?>">
                                        </div>
                                      </div>
                                      <div class="row mb-2">
                                        <div class="col-md-6">
                                          <span class="mdi mdi-account"></span> <small class="font-weight-bold"> Nombre:
                                          </small>
                                        </div>
                                        <div class="col-md-6">
                                          <input class="form-control" readonly name="nombre_solicitante"
                                            value="<?php echo $solicitud['nombre_solicitante']; ?>">
                                        </div>
                                      </div>
                                      <div class="row mb-2">
                                        <div class="col-md-6">
                                          <span class="mdi mdi-email"></span> <small class="font-weight-bold"> Correo
                                            Electrónico: </small>
                                        </div>
                                        <div class="col-md-6">
                                          <input class="form-control" readonly name="correo_solicitante"
                                            value="<?php echo $solicitud['correo_solicitante']; ?>">
                                        </div>
                                      </div>
                                      <div class="row mb-2">
                                        <div class="col-md-6">
                                          <span class="mdi mdi-cellphone-iphone"></span> <small
                                            class="font-weight-bold"> Teléfono: </small>
                                        </div>
                                        <div class="col-md-6">
                                          <input class="form-control" readonly name="telefono_solicitante"
                                            value="<?php echo $solicitud['telefono_solicitante']; ?>">
                                        </div>
                                      </div>
                                      <div class="row mb-2">
                                        <div class="col-md-6">
                                          <span class="mdi mdi-text-box-check"></span> <small class="font-weight-bold">
                                            Tipo de Solicitud: </small>
                                        </div>
                                        <div class="col-md-6">
                                          <input class="form-control" readonly name="tipo_solicitud"
                                            value="<?php echo $solicitud['tipo_solicitud']; ?>">
                                        </div>
                                      </div>
                                      <div class="row mb-2">
                                        <div class="col-md-6">
                                          <span class="mdi mdi-calendar-today"></span> <small class="font-weight-bold">
                                            Fecha de Solicitud: </small>
                                        </div>
                                        <div class="col-md-6">
                                          <input class="form-control" readonly name="fecha_solicitud"
                                            value="<?php echo $solicitud['fecha_solicitud']; ?>">
                                        </div>
                                      </div>
                                      <div class="row mb-2">
                                        <div class="col-md-6">
                                          <span class="mdi mdi-clock"></span> <small class="font-weight-bold"> Estatus:
                                          </small>
                                        </div>
                                        <div class="col-md-6">
                                          <v-select name="estatus_modificado" dense outlined placeholder="Estatus"
                                            :items="['Solicitud Pendiente','Solicitud Atendida']" v-model="camposPorValidar[0]" />
                                        </div>
                                      </div>
                                      <div class="row mt-2">
                                        <div class="col-md-12">
                                          <div class="form-group">
                                            <label for="message-text"
                                              class="col-form-label text-left">Descripción:</label>
                                            <textarea class="form-control" rows="4" name="descripcion_solicitante"
                                              readonly><?php echo $solicitud['descripcion_solicitante']; ?></textarea>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-12">
                                          <div class="form-group">
                                            <label for="message-text"
                                              class="col-form-label text-left">Observaciones:</label>
                                            <v-textarea dense outlined rows="5" name="observaciones"
                                              v-model="camposPorValidar[1]" :rules="reglas.requerido" maxlength="500" counter
                                              placeholder="Observaciones ante el requerimiento del usuario"></v-textarea>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary text-white"
                                              :disabled="validar_campos(2,camposPorValidar, false, null)"
                                            >
                                              Enviar
                                            </button>
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

<?php } include('../layout/footer.php'); ?>