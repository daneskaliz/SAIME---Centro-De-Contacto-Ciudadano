<?php include('headeradmin.php'); ?>

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
                <tr>
                  <th scope="row">1</th>
                  <td>10/06/2020</td>
                  <td>2938940</td>
                  <td>Sugerencia</td>
                  <td><span class="mdi mdi-check-circle"></span></td>
                  <td>
                    <button type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#exampleModal">
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
                                        <span class="mdi mdi-account"></span>
                                        </div>
                                        <div class="col-md-6">
                                          <span> 22561674 </span>
                                        </div>
                                      </div>
                                      <div class="row text-center mb-2">
                                        <div class="col-md-6">
                                        <small class="font-weight-bold">Fecha:</small>
                                        </div>
                                        <div class="col-md-6">
                                          <span> 14/03/2020 </span>
                                        </div>
                                      </div>
                                      <div class="row text-center mb-2">
                                        <div class="col-md-6">
                                          <small class="font-weight-bold"> Tipo de Solicitud: </small>
                                        </div>
                                        <div class="col-md-6">
                                          <span> Denuncia </span>
                                        </div>
                                      </div>
                                      <div class="row text-center mb-2">
                                        <div class="col-md-6">
                                          <small class="font-weight-bold"> Estatus: </small>
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
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include('footer.php'); ?>