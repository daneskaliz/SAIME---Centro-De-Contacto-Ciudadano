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
    <?php foreach($estados as $estado): ?>

    <div class="row mx-1 my-3 align-items-center">
      <span class="mdi mdi-google-maps border-primary">
        <?php
            echo $estado;
            ?>

      </span>
    </div>
    <hr>
    <div class="row">

      <?php
            foreach($resultado as $dato):
            if($dato['estado'] == $estado){
          ?>

      <div class="col-sm-4">
        <div class="card my-1" style="height:280px;">
          <div class="card-body text-center">
            <img src="../../assets/img/saime.png" width="60" height="50" alt="">
            <h5 class="card-title px-3 mt-3"> <?php echo $dato['nombre'] ?> </h5>
            <p class="card-text align-text-top px-3 text-justify"> <?php echo $dato['direccion'] ?> </p>
            <p class="card-text align-text-top px-3 text-justify"> <?php echo $dato['horario'] ?> </p>
          </div>
        </div>
      </div>

      <?php
          }
          endforeach;
          ?>

    </div>
    <?php
          endforeach;
          ?>

  </div>
</div>

<?php include('../layout/footer.php'); ?>