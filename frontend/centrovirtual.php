<?php include('header.php'); ?>

<?php 

include_once '../backend/conexion.php';

if($_POST){
  $tiposolicitud = $_POST['tiposolicitud'];
  $nombre = $_POST['nombre'];
  $email = $_POST['email'];
  $comentarios = $_POST['comentarios'];
  
  $sql_agregar = 'INSERT INTO formulario (tiposolicitud, nombre, email, comentarios) VALUES(?,?,?,?)';
  $sentencia_agregar = $pdo->prepare($sql_agregar);
  $sentencia_agregar ->execute(array($tiposolicitud,$nombre,$email,$comentarios));

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
          <h5 class="text-secondary text-justify ml-3 mb-0">Escríbanos para conocer sus comentarios, sugerencias, canalizar sus reclamos
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
          </div>
          <div class="col-6">
            <?php if(!$_GET): ?>
                <form method="POST">
                  <label for="exampleFormControlSelect1" class="mx-1">Tipo Solicitud</label>
                  <select class="form-control" name="tiposolicitud" id="exampleFormControlSelect1">
                    <option>Seleccione</option>
                    <option>Peticiones</option>
                    <option>Reclamos</option>
                    <option>Sugerencias</option>
                    <option>Denuncias</option>
                  </select>
                  <label for="formGroupExampleInput" class="mt-3 mx-1">Nombre</label>
                  <input type="text" class="form-control" name="nombre" placeholder="Escriba su nombre" >
                  <label for="formGroupExampleInput" class="mt-3 mx-1">Correo Electrónico</label>
                  <input type="text" class="form-control" name="email" placeholder="Correo Electrónico" >
                  <label for="formGroupExampleInput" class="mt-3 mx-1">Comentarios</label>
                  <textarea class="form-control" rows="8" name="comentarios" placeholder="Escriba sus comentarios" >
                  </textarea>
                  <!-- <label for="formGroupExampleInput" class="mt-2">Auxiliar</label>
                  <input type="text" class="form-control" name="auxiliar" placeholder="" > -->
                  <button class="btn btn-outline-dark mt-3">Enviar</button>
                </form>
                <?php endif ?>
          </div>      
      </div>
    </div>
  </div>
      

<?php include('footer.php'); ?>