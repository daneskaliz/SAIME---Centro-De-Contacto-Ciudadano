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