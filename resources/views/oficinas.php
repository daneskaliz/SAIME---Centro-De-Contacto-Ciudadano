<?php

  include_once '../../db/conexion.php';

  $sql = "SELECT * FROM `oficinas`";

  $gsent= $pdo->prepare($sql);
  $gsent-> execute();
  
  $resultado= $gsent->fetchall();


  
  $estados = [
    'Anzoategui',
    'Apure',
    'Aragua',
    'Barinas',
    'Bolivar',
    'Carabobo',
    'Cojedes',
    'Distrito Capital',
    'Falcon',
    'Guarico',
    'Lara',
    'Merida',
    'Miranda',
    'Monagas',
    'Nueva Esparta',
    'Portuguesa',
    'Sucre',
    'Tachira',
    'Trujillo',
    'Vargas',
    'Yaracuy',
    'Zulia'
  ];
  
  include('../layout/header.php');
?>


<div class="container-fluid container5">
  <h5 class="text-white text-center py-5 font-weight-bold fontindex">PUNTOS DE ATENCIÓN A NIVEL NACIONAL</h5>
</div>

<div class="container-fluid container6 my-5 py-5">
  <div class="container contenido2 myscroll bg-light pb-5">

    <v-expansion-panels>

      <div class="row my-3 align-items-center">
      <?php foreach ($estados as $nombre): ?>

        <div class="col-md-12">
          <v-expansion-panel>
            <v-expansion-panel-header>
              <?php echo $nombre ?>
            </v-expansion-panel-header>
            <v-expansion-panel-content>
             
              <div class="row">
              <?php foreach ($resultado as $oficina): ?>
              <?php if ($oficina['estado'] == $nombre): ?>
              
                <div class="col-sm-4">
                  <div class="card my-1" style="height:280px;">
                    <div class="card-body text-center">
                      <img src="../../assets/img/saime.png" width="60" height="50" alt="">
                      <h5 class="card-title px-3 mt-3"> <?php echo $oficina['nombre'] ?> </h5>
                      <p class="card-text align-text-top px-3 text-justify"> <?php echo $oficina['direccion'] ?> </p>
                      <p class="card-text align-text-top px-3 text-justify"> <?php echo $oficina['horario'] ?> </p>
                    </div>
                  </div>
                </div>
              
              <?php endif ?>
              <?php endforeach ?>
              </div>
            
            </v-expansion-panel-content>
          </v-expansion-panel>
        </div>

      <?php endforeach ?>
      </div>

    </v-expansion-panels>
  </div>

</div>

<?php include('../layout/footer.php'); ?>