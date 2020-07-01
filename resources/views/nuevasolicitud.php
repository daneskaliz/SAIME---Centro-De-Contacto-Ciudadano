<?php

include('../layout/header.php');
 if(!$_SESSION){
   header('Location: index.php');
 } else{
   if($_SESSION['rol'] != 'Usuario'){
     header('Location: index.php');  
   }
 }

?>

<?php 

include_once '../../db/conexion.php';

if($_POST){

  $nombre_solicitante = $_POST['nombre_solicitante'];
  $documento_solicitante = $_SESSION['cedula'];
  $correo_solicitante = $_POST['correo_solicitante'];
  $telefono_solicitante = $_POST['telefono_solicitante'];
  $tipo_solicitud = $_POST['tipo_solicitud'];
  $descripcion_solicitante = $_POST['descripcion_solicitante'];
  
  $insert_solicitud_query = 'INSERT INTO solicitudes_activas (nombre_solicitante, documento_solicitante, correo_solicitante, telefono_solicitante, tipo_solicitud, descripcion_solicitante, observaciones, estatus_solicitud) VALUES (?,?,?,?,?,?,?,?)';
  $insert_solicitud_pdo = $pdo->prepare($insert_solicitud_query);
  $insert_solicitud_pdo->execute(array($nombre_solicitante, $documento_solicitante, $correo_solicitante, $telefono_solicitante, $tipo_solicitud, $descripcion_solicitante, 'Ejemplo', 'activo'));

  
  echo '
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong> <span class="mdi mdi-check" style="color:#384;"></span> Operación realizada</strong>
       Su solicitud ha sido enviada exitosamente
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  ';
}

?>

<div class="container-fluid containersesion2">
  <h5 class="text-white text-center py-5 font-weight-bold fontindex">SOLICITUDES</h5>
</div>
<div class="container-fluid containersesion3 py-5">
  <!--CONTENIDO-->
  <div class="container contenidosesion1 bg-light pb-5">
    <div class="row py-4">
      <h5 class="text-justify ml-3 mt-1 mb-0">
        Escríbanos para conocer sus comentarios, sugerencias, canalizar sus reclamos y cualquier inquietud.
      </h5>
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
        <div class="row py-1">
          <div class="col-12">
            <div class="card bg-white">
              <div class="alert alert-info text-center" role="alert">
                <span class="mt-1 mdi mdi-clipboard-text"></span>
                <span class="font-weight-bold text-primary">FORMULARIO DE CONTACTO<span>
              </div>
              <div class="card-body">
                <form method="POST">
                  <div class="row mb-2">
                    <div class="col-md-6">
                      <span class="mdi mdi-account"></span> <small class="font-weight-bold"> Nombre: </small>
                    </div>
                    <div class="col-md-6">
                      <input class="form-control" name="nombre_solicitante">
                    </div>
                  </div>
                  <div class="row mb-2">
                    <div class="col-md-6">
                      <span class="mdi mdi-email"></span> <small class="font-weight-bold"> Correo Electrónico: </small>
                    </div>
                    <div class="col-md-6">
                      <input class="form-control" name="correo_solicitante">
                    </div>
                  </div>
                  <div class="row mb-2">
                    <div class="col-md-6">
                      <span class="mdi mdi-cellphone-iphone"></span> <small class="font-weight-bold"> Teléfono: </small>
                    </div>
                    <div class="col-md-6">
                      <input class="form-control" name="telefono_solicitante">
                    </div>
                  </div>
                  <small for="exampleFormControlSelect1" class="font-weight-bold mx-1">Tipo de Solicitud</small>
                  <select class="form-control" name="tipo_solicitud" id="exampleFormControlSelect1">
                    <option>Seleccione</option>
                    <option>PETICIONES</option>
                    <option>RECLAMOS</option>
                    <option>SUGERENCIAS</option>
                    <option>DENUNCIAS</option>
                  </select>
                  <small for="formGroupExampleInput" class="font-weight-bold mx-1">Descripción:</small>
                  <textarea
                    class="form-control"
                    rows="8"
                    name="descripcion_solicitante"
                    placeholder="Escriba sus comentarios"
                  ></textarea>
                  <button class="btn btn-primary mt-4 mb-2" type="submit">
                    Enviar
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php include('../layout/footer.php'); ?>