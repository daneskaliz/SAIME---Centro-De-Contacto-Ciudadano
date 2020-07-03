<?php
include'../layout/header.php';

$aleatorio_a = $_GET['x'];
$aleatorio_b = $_GET['y'];

$cedula_consultar = $_GET['b'];

$select_preguntas_query = 'SELECT * FROM personas WHERE cedula = ?';
$select_preguntas_pdo = $pdo->prepare($select_preguntas_query);
$select_preguntas_pdo->execute(array($cedula_consultar));

$select_preguntas_resultado = $select_preguntas_pdo->fetch(); // * Guardar el resultado de la consulta

$pregunta_a = $select_preguntas_resultado['pregunta_'.$aleatorio_a];
$pregunta_b = $select_preguntas_resultado['pregunta_'.$aleatorio_b];

$respuesta_a = $select_preguntas_resultado['respuesta_'.$aleatorio_a];
$respuesta_b = $select_preguntas_resultado['respuesta_'.$aleatorio_b];

if($_POST){

  if($respuesta_a == $_POST['respuesta_y'] && $respuesta_b == $_POST['respuesta_z']){
    
    header('Location:nueva_contrasena.php?a='.$_GET['b']);
  
  } else{
    
    echo '
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong> <span class="mdi mdi-alert-circle" style="color:#834;"></span> La información ingresada no es válida</strong> Por favor intente nuevamente.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    ';
  }

}

?>


<div class="container-fluid container15">
  <h5 class="text-white text-center py-5 font-weight-bold fontindex">
    REESTABLECER CONTRASEÑA
  </h5>
</div>
<!--CONTENIDO-->
<div class="container-fluid container16 my-5 py-5">
  <div class="row justify-content-center">
    <div class="col-10">
      <div class="card card6 text-center bg-light">
        <div class="row justify-content-center py-1 mt-5 mb-5">
          <div class="col-10">
            <div class="card bg-white">
              <div class="alert alert-info" role="alert">
                <span class="font-weight-bold text-primary">
                  <span class="mdi mdi-lock-question"></span>
                  Preguntas de Seguridad
                </span>
              </div>
              <div class="card-body">
                <form method="POST">
                  <div class="card-body text-center">
                    <!--FILA INPUT-->
                    <div class="row text-left">
                      <div class="col-md-6">
                        <span class="font-weight-bold"><?php echo $pregunta_a.':'; ?></span>
                      </div>
                      <div class="col-md-6">
                      <v-text-field
                        name="respuesta_y"
                        v-model="camposPorValidar[0]"
                        :rules="[reglas.requerido]"
                        type="password"
                        dense
                        outlined
                      />
                      </div>
                    </div>
                    <!--FIN FILA INPUT-->
                    <!--FILA INPUT-->
                    <div class="row text-left my-2">
                      <div class="col-md-6">
                        <span class="font-weight-bold my-2"><?php echo $pregunta_b.':'; ?></span>
                      </div>
                      <div class="col-md-6">
                      <v-text-field
                        name="respuesta_z"
                        v-model="camposPorValidar[1]"
                        :rules="[reglas.requerido]"
                        type="password"
                        dense
                        outlined
                      />
                      </div>
                    </div>
                    <!--FIN FILA INPUT-->
                    <div class="row justify-content-end mx-1 my-5">
                      <button
                        class="btn btn-sm btn-primary mx-1 font-weight-bold text-white"
                        type="submit"
                        :disabled="validar_campos(2,camposPorValidar)"
                      >
                        <span class="btn-sm text-white mdi mdi-check-circle"></span>
                        SIGUIENTE
                      </button>
                      <a href="iniciarsesion.php">
                        <button class="btn btn-sm btn-danger text-white font-weight-bold" type="button">
                          <span class="btn-sm text-white mdi mdi-cancel"></span>
                          CANCELAR
                        </button>
                      </a>
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

<?php include'../layout/footer.php'; ?>