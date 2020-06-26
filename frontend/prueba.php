<div class="col-12">
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



          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            GESTIONAR
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="solicitud.php"><span class="mdi mdi-email"> SOLICITUD</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="consulta.php"><span class="mdi mdi-file-search"></span> CONSULTA</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="usuario.php"><span class="mdi mdi-account"> USUARIO</a>
          </div>
          </li>
          <li class="nav-item">
          <a class="nav-link text-dark font-weight-bold" href="../backend/cerrar.php"><span class="mdi mdi-logout"> SALIR<span class="sr-only">(current)</span></a>
          </li>
          </ul>
        </div>
        <a class="navbar-brand d-flex flex-row justify-content-center" href="http://www.saime.gob.ve/">
        <img src="../bootstrap-4.5.0-dist/bootstrap-4.5.0-dist/img/saime.png" width="100" height="80" class="d-inline-block align-top mr-4" alt="logo">
        </a>
        
        <div class="row text-center">
                    <div class="col-md-6">
                      <span class="mdi mdi-account"></span>
                    </div>
                    <div class="col-md-6">
                      <span> 22561674 </span>
                    </div>
                  </div>
                  <div class="row text-center">
                    <div class="col-md-6">
                      <h5> Nombre: </h5>
                    </div>
                    <div class="col-md-6">
                      <span> Nilse Ruiz </span>
                    </div>
                  </div>
                  <div class="row text-center">
                    <div class="col-md-6">
                      <h5> Fecha de Nacimiento: </h5>
                    </div>
                    <div class="col-md-6">
                      <span> 16/11/1944 </span>
                    </div>
                  </div>
                  <div class="row text-center">
                    <div class="col-md-6">
                      <h5> Correo Electrónico: </h5>
                    </div>
                    <div class="col-md-6">
                      <span> nilseruiz@hotmail.com </span>
                    </div>
                  </div>
                  <div class="row text-center">
                    <div class="col-md-6">
                      <h5> Teléfono: </h5>
                    </div>
                    <div class="col-md-6">
                      <span> 04167242885 </span>
                    </div>
                  </div>