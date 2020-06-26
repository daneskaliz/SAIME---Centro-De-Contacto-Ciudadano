<?php include('headercopy.php'); ?>

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

<div class="container-fluid containersesion2">
  <h5 class="text-white text-center py-5 font-weight-bold fontindex">SOLICITUDES</h5>
</div>
<div class="container-fluid containersesion3 py-5">
  <!--CONTENIDO-->
  <div class="container contenidosesion1 bg-light pb-5">
    <div class="row py-4">
      <h5 class="text-justify ml-3 mt-1 mb-0">Escríbanos para conocer sus comentarios, sugerencias, canalizar sus reclamos
        y cualquier inquietud que tenga.</h5>
    </div>
    <hr class="my-0">
    <div class="row py-5">
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
          Son aportes de la ciudadanía, para el mejoramiento continúo en la atención de los trámites y la prestación de
          los servicios por parte de la entidad.
        </div>
        <div class="alert alert-info my-2 py-1" role="alert">
          <h5 class="text-danger"> <span class="mdi mdi-alert"></span> Denuncias</h5>
          Poner en evidencia e informar sobre una situación irregular, delito o falta de un ciudadano y/o entidad en
          relación a la normatividad.
        </div>
      </div>
      <div class="col-6">
        <?php if(!$_GET): ?>
        <div class="row justify-content-center py-1">
          <div class="col-12">
            <div class="card bg-white">
              <div class="alert alert-primary" role="alert">
                <h5 class="card-title text-center">FORMULARIO DE CONTACTO</h5>
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
                      <small class="font-weight-bold"> Nombre: </small>
                    </div>
                    <div class="col-md-6">
                      <span> Nilse Ruiz </span>
                    </div>
                  </div>
                  <div class="row text-center mb-2">
                    <div class="col-md-6">
                      <small class="font-weight-bold"> Fecha de Nacimiento: </small>
                    </div>
                    <div class="col-md-6">
                      <span> 16/11/1944 </span>
                    </div>
                  </div>
                  <div class="row text-center mb-2">
                    <div class="col-md-6">
                      <small class="font-weight-bold"> Correo Electrónico: </small>
                    </div>
                    <div class="col-md-6">
                      <span> nilseruiz@hotmail.com </span>
                    </div>
                  </div>
                  <div class="row text-center mb-2">
                    <div class="col-md-6">
                      <small class="font-weight-bold"> Teléfono: </small>
                    </div>
                    <div class="col-md-6">
                      <span> 04167242885 </span>
                    </div>
                  </div>
                  <small for="exampleFormControlSelect1" class="mx-1 my-1">Tipo de Solicitud</small>
                  <select class="form-control" name="tipodesolicitud" id="exampleFormControlSelect1">
                    <option>Seleccione</option>
                    <option>PETICIONES</option>
                    <option>RECLAMOS</option>
                    <option>SUGERENCIAS</option>
                    <option>DENUNCIAS</option>
                  </select>
                  <small for="formGroupExampleInput" class="mt-2 mx-1">Descripción:</small>
                  <textarea class="form-control" rows="8" name="observaciones" placeholder="Escriba sus comentarios"></textarea>
                  <button class="btn btn-primary mt-4 mb-2">Enviar</button>
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