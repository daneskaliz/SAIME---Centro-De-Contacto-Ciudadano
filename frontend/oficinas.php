<?php

  include_once '../backend/conexion.php';

  $sql = "SELECT * FROM `oficinas`";

  $gsent= $pdo->prepare($sql);
  $gsent-> execute();
  
  $resultado= $gsent->fetchall();
  
  include('header.php');
?>

  
  <div class="container-fluid container5">
    <h5 class="text-white text-center py-5 font-weight-bold fontindex">PUNTOS DE ATENCIÓN A NIVEL NACIONAL</h5>
  </div>
 
  <div class="container-fluid container6 my-5 py-5">
    <div class="container contenido2 myscroll bg-light pb-5">
      <div class="row ma-1">

          <?php foreach($resultado as $dato): ?>
          
              <div class="col-sm-4">
                <div class="card my-1" style="height:280px;">
                  <div class="card-body text-center">
                    <img src="../bootstrap-4.5.0-dist/bootstrap-4.5.0-dist/img/saime.png" width="60" height="50"alt="">
                    <h5 class="card-title px-3 mt-3"> <?php echo $dato['oficina'] ?> </h5>
                    <p class="card-text align-text-top px-3 text-justify"> <?php echo $dato['direccion'] ?> </p>
                    <p class="card-text align-text-top px-3 text-justify"> <?php echo $dato['horario'] ?> </p>
                    </div>
                    </div></div>
            
          <?php endforeach ?>

        </div>
      </div>
    </div>
  </div>
     

<?php include('footer.php'); ?>