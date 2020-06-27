<?php include('headercopy.php'); ?>

<!--NO HAY REGISTROS 
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
        <button type="button" class="btn btn-link">Nueva Solicitud</button>
      </div>
    </div>
    </div>
  </div>
-->

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
                <tr>
                  <th scope="row">1</th>
                  <td><span class="mdi mdi-cancel"></span></td>
                  <td>Sugerencia</td>
                  <td>
                    <button type="button" class="btn btn-dark btn-sm" disabled data-toggle="modal" data-target="#exampleModal">
                      Ver
                    </button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
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
                                  <span class="mdi mdi-check-circle"></span> SOLICITUD ATENDIDA
                                  </div>
                                  <div class="card-body">
                                    <form method="POST">
                                      <div class="row text-center mb-2">
                                        <div class="col-md-6">
                                        <span class="mdi mdi-card-account-details"></span> <small class="font-weight-bold">Usuario:</small>
                                        </div>
                                        <div class="col-md-6">
                                          <span> 22561674 </span>
                                        </div>
                                      </div>
                                      <div class="row text-center mb-2">
                                        <div class="col-md-6">
                                        <span class="mdi mdi-text-box-check"></span> <small class="font-weight-bold"> Tipo de Solicitud: </small>
                                        </div>
                                        <div class="col-md-6">
                                          <span> Denuncia </span>
                                        </div>
                                      </div>
                                      <div class="row text-center mb-2">
                                        <div class="col-md-6">
                                        <span class="mdi mdi-calendar-today"></span> <small class="font-weight-bold">Fecha de Solicitud:</small>
                                        </div>
                                        <div class="col-md-6">
                                          <span> 14/03/2020 </span>
                                        </div>
                                      </div>
                                      <div class="row text-center mb-2">
                                        <div class="col-md-6">
                                        <span class="mdi mdi-calendar"></span> <small class="font-weight-bold">Fecha de Atención:</small>
                                        </div>
                                        <div class="col-md-6">
                                          <span> 14/03/2020 </span>
                                        </div>
                                      </div>
                                      <div class="row text-center mb-2">
                                        <div class="col-md-6">
                                        <span class="mdi mdi-clock"></span> <small class="font-weight-bold"> Estatus: </small>
                                        </div>
                                        <div class="col-md-6">
                                          <span> Solicitud Atendida </span>
                                        </div>
                                      </div>
                                      <div class="row mt-3">
                                        <div class="col-md-12">
                                          <div class="form-group">
                                            <label for="message-text" class="col-form-label text-left">Descripción:</label>
                                            <textarea class="form-control" disabled id="message-text"></textarea>
                                           </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12">
                                          <div class="form-group">
                                            <label for="message-text" class="col-form-label text-left">Observaciones:</label>
                                            <textarea class="form-control" disabled id="message-text"></textarea>
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
                    </div>
                  </td>
                </tr>
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
</div>

<?php include('footer.php'); ?>