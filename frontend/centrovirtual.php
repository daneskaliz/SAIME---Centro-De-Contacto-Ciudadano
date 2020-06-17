<?php include('header.php'); ?>
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
              <h5 class="text-danger"> <span class="mdi mdi-alert"></span> Quejas</h5>
              Refleja la incomodidad de los ciudadanos, frente al inadecuado desarrollo de las funciones de los servidores públicos.
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
            <div class="alert alert-info my-2 py-1" role="alert">
              <h5 class="text-danger"> <span class="mdi mdi-alert"></span> Felicitaciones</h5>
              Son los reconocimientos que manifiesta la satisfacción del ciudadano frente al servicio prestado por la entidad.
            </div>
          </div>
          <div class="col-6">
          <form class="text-secondary font-weight-bold">
            <div class="form-group">
            <label for="exampleFormControlSelect1" class="ml-1">Tipo de solicitud</label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option>Seleccione</option>
              <option>Petición</option>
              <option>Queja</option>
              <option>Reclamo</option>
              <option>Sugerencia</option>
              <option>Denuncia</option>
              <option>Felicitación</option>
            </select>
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2" class="ml-1">Nombre</label>
              <input type="text" class="form-control" id="formGroupExampleInput2">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2" class="ml-1">Apellido</label>
              <input type="text" class="form-control" id="formGroupExampleInput2">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2" class="ml-1">Cédula de Identidad</label>
              <input type="text" class="form-control" id="formGroupExampleInput2">
            </div>
            <div class="form-group">
            <label for="formGroupExampleInput2" class="ml-1">Fecha de Nacimiento</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="dd/mm/aaaa">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2" class="ml-1">Nacionalidad</label>
              <input type="text" class="form-control" id="formGroupExampleInput2"">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2" class="ml-1">País</label>
              <input type="text" class="form-control" id="formGroupExampleInput2">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2" class="ml-1">Ciudad donde vive</label>
              <input type="text" class="form-control" id="formGroupExampleInput2">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2" class="ml-1">Email</label>
              <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Correo Electrónico">
            </div>
            <div class="form-group">
            <label for="exampleFormControlTextarea1" class="ml-1">Mensaje</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="button" class="btn btn-outline-dark">Enviar</button>
          </form>
          </div>
        </div>
    </div>
  </div>
      
<?php include('footer.php'); ?>