<?php

include('../layout/header.php');

if(!$_SESSION){
  header('Location: index.php');
} else{
  if($_SESSION['rol'] != 'Administrador'){
    header('Location: index.php');  
  }
}

  $select_solicitudes_admin_b = 'SELECT * FROM solicitudes WHERE estatus_solicitud = ? ';
  $select_solicitudes_adminB_pdo = $pdo->prepare($select_solicitudes_admin_b);
  $select_solicitudes_adminB_pdo->execute(array('Solicitud atendida'));

  $solicitudes_admin_resB = $select_solicitudes_adminB_pdo->fetchAll();

  if(!$solicitudes_admin_resB){
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
              <p class="my-4 text-success"><span class="text-success mdi mdi-information-outline"></span>No se registran solicitudes atendidas.</p>
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
                <?php foreach($solicitudes_admin_resB as $s_atendida): ?>
                <tr>
                  <th scope="row">1</th>
                  <td><?php echo $s_atendida['id'] ?></td>
                  <td><?php echo $s_atendida['fecha_solicitud'] ?></td>
                  <td><?php echo $s_atendida['nombre_solicitante'] ?></td>
                  <td><span class="ml-3 mdi mdi-check-circle"></span></td>
                  <td>
                    <button
                      type="button"
                      class="btn btn-dark btn-sm"
                      data-toggle="modal"
                      data-target="#exampleModal<?php echo $s_atendida['id'] ?>"
                    >
                      Ver
                    </button>
                    <div class="modal fade" id="exampleModal<?php echo $s_atendida['id'] ?>" tabindex="-1" role="dialog"
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
                                  <div class="alert alert-success font-weight-bold text-center" role="alert">
                                    <span class="mdi mdi-check-circle"></span>
                                    <?php echo $s_atendida['estatus_solicitud'] ?>
                                  </div>
                                  <div class="card-body">
                                    <form method="POST">
                                      <div class="row mb-2">
                                        <div class="col-md-6">
                                          <span class="mdi mdi-card-account-details"></span> <small
                                            class="font-weight-bold">Usuario:</small>
                                        </div>
                                        <div class="col-md-6">
                                          <span><?php echo $s_atendida['documento_solicitante'] ?></span>
                                        </div>
                                      </div>
                                      <div class="row mb-2">
                                        <div class="col-md-6">
                                          <span class="mdi mdi-text-box-check"></span> <small class="font-weight-bold">
                                            Tipo de Solicitud: </small>
                                        </div>
                                        <div class="col-md-6">
                                          <span><?php echo $s_atendida['tipo_solicitud'] ?></span>
                                        </div>
                                      </div>
                                      <div class="row mb-2">
                                        <div class="col-md-6">
                                          <span class="mdi mdi-calendar-today"></span> <small class="font-weight-bold">
                                            Fecha de Solicitud: </small>
                                        </div>
                                        <div class="col-md-6">
                                          <span><?php echo $s_atendida['fecha_solicitud'] ?></span>
                                        </div>
                                      </div>
                                      <div class="row mb-2">
                                        <div class="col-md-6">
                                          <span class="mdi mdi-calendar"></span> <small class="font-weight-bold">
                                          Fecha de Atención: </small>
                                        </div>
                                        <div class="col-md-6">
                                          <span><?php echo $s_atendida['fecha_atencion'] ?></span>
                                        </div>
                                      </div>
                                      <div class="row mb-2">
                                        <div class="col-md-6">
                                          <span class="mdi mdi-clock"></span>
                                            <small class="font-weight-bold">
                                              Estatus:
                                            </small>
                                        </div>
                                        <div class="col-md-6">
                                          <span><?php echo $s_atendida['estatus_solicitud'] ?></span>
                                        </div>
                                      </div>
                                      <div class="row mt-3">
                                        <div class="col-md-12">
                                          <div class="form-group">
                                            <label for="message-text"
                                              class="col-form-label text-left">Descripción:</label>
                                            <textarea
                                              class="form-control"
                                              disabled
                                            ><?php echo $s_atendida['descripcion_solicitante'] ?></textarea>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-12">
                                          <div class="form-group">
                                            <label class="col-form-label text-left">Observaciones:</label>
                                            <textarea
                                              class="form-control"
                                              disabled
                                            ><?php echo $s_atendida['observaciones'] ?></textarea>
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
                <?php endforeach ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php } include('../layout/footer.php'); ?>