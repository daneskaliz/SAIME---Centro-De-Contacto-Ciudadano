<?php

include('../layout/header.php');
if(!isset($_SESSION)){
  header('Location: index.php');
} else{
  if($_SESSION['rol'] != 'Usuario'){
    header('Location: index.php');  
  }
}

  $select_solicitudes_query = 'SELECT * FROM solicitudes where documento_solicitante = ?';
  $select_solicitudes_pdo = $pdo->prepare($select_solicitudes_query);
  $select_solicitudes_pdo->execute(array($_SESSION['cedula']));

  $select_solicitudes_res = $select_solicitudes_pdo->fetchAll();

if(!$select_solicitudes_res){
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
            <a href="nuevasolicitud.php">Nueva Solicitud</a>
          </div>
        </div>
        </div>
      </div>
    ';
} else{
?>

<div class="container-fluid containersesion6">
  <h5 class="text-white text-center py-5 font-weight-bold fontindex">HISTORIAL DE SOLICITUDES</h5>
</div>

<div class="container-fluid containersesion7 my-5 py-5">
  <div class="container contenidosesion3 myscroll2 bg-light pb-5">
    <div class="row ml-2">
      <h5 class="shadow-none font-weight-bold bg-light mt-4 rounded">Haz seguimiento a tus solicitudes.</h5>
    </div>
    <hr class="my-3">
    <div class="row justify-content-center">
      <div class="col-10">
        <div class="card my-5">
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Estatus</th>
                  <th scope="col">Tipo de Solicitud</th>
                  <th scope="col">Detalles</th>
                </tr>
              </thead>
              <tbody>

                <?php
                
                foreach ($select_solicitudes_res as $key) :?>

                <tr>
                  <th scope="row"><?php echo $key['id'] ?></th>
                  <td>
                    <?php
                      if ($key['estatus_solicitud']=="Solicitud pendiente") {
                        echo '<span class="mdi mdi-cancel"></span>';
                      } else {
                        echo '<span class="mdi mdi-check"></span>';
                      }
                    ?>
                  </td>
                  <td><?php echo $key['tipo_solicitud']; ?></td>
                  <td>
                    <button type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#exampleModal<?php echo $key['id']; ?>">
                      Ver
                    </button>
                    <div class="modal fade" id="exampleModal<?php echo $key['id']; ?>" tabindex="-1" role="dialog"
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

                                  <?php
                                  if($key['estatus_solicitud']=='Solicitud atendida'){
                                    echo '
                                    <div class="alert alert-success font-weight-bold text-center" role="alert">
                                      <span class="mdi mdi-check-circle"></span>
                                      Solicitud atendida
                                    </div>';
                                  } else {
                                    echo '
                                    <div class="alert alert-info font-weight-bold text-center" role="alert">
                                      <span class="mdi mdi-information"></span>
                                      Solicitud pendiente
                                    </div>';  
                                  }
                                  ?>

                                  <div class="card-body">
                                    <form method="POST">
                                      <div class="row mb-2">
                                        <div class="col-md-6">
                                          <span class="mdi mdi-card-account-details"></span>
                                          <small class="font-weight-bold">Usuario:</small>
                                        </div>
                                        <div class="col-md-6">
                                          <span><?php echo $key['documento_solicitante']; ?></span>
                                        </div>
                                      </div>
                                      <div class="row mb-2">
                                        <div class="col-md-6">
                                          <span class="mdi mdi-text-box-check"></span>
                                          <small class="font-weight-bold">
                                            Tipo de Solicitud:
                                          </small>
                                        </div>
                                        <div class="col-md-6">
                                          <span><?php echo $key['tipo_solicitud']; ?></span>
                                        </div>
                                      </div>
                                      <div class="row mb-2">
                                        <div class="col-md-6">
                                          <span class="mdi mdi-calendar-today"></span>
                                          <small class="font-weight-bold">Fecha de Solicitud:</small>
                                        </div>
                                        <div class="col-md-6">
                                          <span>
                                            <?php echo $key['fecha_solicitud']; ?>
                                          </span>
                                        </div>
                                      </div>
                                      <div class="row mb-2">
                                        <div class="col-md-6">
                                          <span class="mdi mdi-calendar"></span>
                                          <small class="font-weight-bold">
                                            Fecha de Atención:</small>
                                        </div>
                                        <div class="col-md-6">
                                          <span> <?php echo $key['fecha_atencion']; ?></span>
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
                                          <span><?php echo $key['estatus_solicitud']; ?></span>
                                        </div>
                                      </div>
                                      <div class="row mt-3">
                                        <div class="col-md-12">
                                          <div class="form-group">
                                            <label for="message-text"
                                              class="col-form-label text-left">Descripción:</label>
                                            <textarea class="form-control" disabled
                                              id="message-text"><?php echo $key['descripcion_solicitante']; ?></textarea>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-12">
                                          <div class="form-group">
                                            <label for="message-text" class="col-form-label text-left">
                                              Observaciones:
                                            </label>
                                            <textarea class="form-control" disabled><?php echo $key['observaciones']; ?></textarea>
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
    <div class="row justify-content-center">
      <div class="col-9">
        <div class="row justify-content-center">
          <div class="col-4">
            <div class="alert alert-danger font-weight-bold" role="alert">
              <span class="mdi mdi-cancel"></span> SOLICITUD PENDIENTE
            </div>
          </div>
          <div class="col-4">
            <div class="alert alert-success font-weight-bold" role="alert">
              <span class="mdi mdi-check-circle"></span> SOLICITUD ATENDIDA
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php } include('../layout/footer.php'); ?>