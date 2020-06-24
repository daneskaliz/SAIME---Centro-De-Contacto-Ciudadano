<?php include('header.php');?>

<?php 

include_once '../backend/conexion.php';

if($_POST){
  $tiposolicitud = $_POST['tiposolicitud'];
  $nombre = $_POST['nombre'];
  $cedula = $_POST['cedula'];
  $email = $_POST['email'];
  $comentarios = $_POST['comentarios'];
  $estatus = 'Pendiente';
  $sql_agregar = 'INSERT INTO formulario (tiposolicitud, nombre, cedula, email, comentarios, estatus) VALUES(?,?,?,?,?)';
  $sentencia_agregar = $pdo->prepare($sql_agregar);
  $sentencia_agregar ->execute(array($tiposolicitud,$nombre,$cedula,$email,$comentarios,$estatus));

  $sql = "SELECT * FROM `formulario`";

  $gsent= $pdo->prepare($sql);
  $gsent-> execute();
  
  $resultado= $gsent->fetchall();

  $pdo= null;

}
?>

  <div class="container-fluid container7">
    <h5 class="text-white text-center py-5 font-weight-bold fontindex">CENTRO VIRTUAL DE ATENCIÓN AL CIUDADANO</h5>
  </div>
  <div class="container-fluid container8 py-5">
  <!--CONTENIDO-->
    <div class="container contenido3 bg-light pb-5">
      <div class="row py-4">
          <h5 class="text-justify ml-3 mb-0">Escríbanos para conocer sus comentarios, sugerencias, canalizar sus reclamos
          y cualquier inquietud que tenga.</h5>
      </div>
      <hr class="my-0">
        <div class="row py-3">
          <div class="col-6">
            <div class="alert alert-info my-1 py-1" role="alert">
              <h5 class="text-danger"> <span class="mdi mdi-alert"></span> Peticiones</h5>
              Son los requerimientos de la ciudadanía que pretenden obtener de la entidad, la satisfacción de una necesidad.
            </div>
            <div class="alert alert-info my-2 py-1" role="alert">
              <h5 class="text-danger"> <span class="mdi mdi-alert"></span> Reclamos</h5>
              Refleja el descontento de la ciudadanía, frente al servicio prestado por la entidad.
            </div>
            <div class="alert alert-info my-2 py-1" role="alert">
              <h5 class="text-danger"> <span class="mdi mdi-alert"></span> Sugerencias</h5>
              Son aportes de la ciudadanía, para el mejoramiento continúo en la atención de los trámites y la prestación de los servicios por parte de la entidad.
            </div>
            <div class="alert alert-info my-2 py-1" role="alert">
              <h5 class="text-danger"> <span class="mdi mdi-alert"></span> Denuncias</h5>
              Poner en evidencia e informar sobre una situación irregular, delito o falta de un ciudadano y/o entidad en relación a la normatividad.
            </div>
            <div class="row py-4">
              <div class="col-8">
                <div class="card" style="background-color:#D3D3D3">
                <div class="card-body">
                  <h5 class="card-title">Haz seguimiento a tu solicitud</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Ingresa tus datos para consultar</h6>
                  <label for="exampleFormControlSelect1" class="mt-3 mx-1">Documento de Identidad</label>
                    <select class="form-control" name="documentodeidentidad" id="exampleFormControlSelect1">
                      <option>Tipo de Documento</option>
                      <option>CEDULA</option>
                      <option>PASAPORTE</option>
                    </select>
                    <input type="text" class="form-control mt-3" name="numerodedocumento" placeholder="Numero de Documento" >
                    <button type="button" class="btn btn-dark my-4 " data-toggle="modal" data-target="#exampleModal">
                      Consultar
                    </button>
                    <!-- MODAL -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Estatus</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-dialog modal-dialog-scrollable">
                            <h5>Tipo de solicitud:</h5>
                            <h5>Nombre:</h5>
                            <h5>Documento de Identidad:</h5>
                            <h5>Numero de Documento<h5>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
              </div>
              </div>
          <div class="col-6">
            <?php if(!$_GET): ?>
              <div class="row justify-content-center py-1">
                <div class="col-10">
                  <div class="card bg-white">
                  <div class="card-body">
                    <h5 class="card-title text-center">Formulario de Contacto</h5>
                    <form method="POST">
                      <label for="exampleFormControlSelect1" class="mx-1">Tipo de Solicitud</label>
                      <select class="form-control" name="tipodesolicitud" id="exampleFormControlSelect1">
                        <option>Seleccione</option>
                        <option>PETICIONES</option>
                        <option>RECLAMOS</option>
                        <option>SUGERENCIAS</option>
                        <option>DENUNCIAS</option>
                      </select>
                      <label for="formGroupExampleInput" class="mt-3 mx-1">Nombre</label>
                      <input type="text" class="form-control" name="nombre" placeholder="Escriba su nombre" >
                      <label for="exampleFormControlSelect1" class="mt-3 mx-1">Documento de Identidad</label>
                      <select class="form-control" name="documentodeidentidad" id="exampleFormControlSelect1">
                        <option>Tipo de Documento</option>
                        <option>CEDULA</option>
                        <option>PASAPORTE</option>
                      </select>
                      <input type="text" class="form-control mt-3" name="numerodedocumento" placeholder="Numero de Documento" >
                      <label for="formGroupExampleInput" class="mt-3 mx-1">Correo Electrónico</label>
                      <input type="text" class="form-control" name="email" placeholder="Correo Electrónico" >
                      <label for="formGroupExampleInput" class="mt-3 mx-1">Comentarios</label>
                      <textarea class="form-control" rows="8" name="comentarios" placeholder="Escriba sus comentarios" >
                      </textarea>
                      <button class="btn btn-outline-dark mt-4 mb-2">Enviar</button>
                    </form>
                  </div>
                  </div>
                </div>
              </div>
            <?php endif ?>
          </div>      
      </div>
    </div>
  </div>
      

<?php include('footer.php'); ?>