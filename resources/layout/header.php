<?php session_start();
  date_default_timezone_set('America/Caracas');
?>

<?php include_once '../../db/conexion.php'; ?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!--CSS-->
  <link rel="stylesheet" href="../../public/css/estilos.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../../public/bootstrap-4.5.0-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../node_modules/vuetify/dist/vuetify.min.css">

  <link rel="stylesheet" href="../../public/icon/mdi/css/materialdesignicons.min.css">

  <script src="../../node_modules/vue/dist/vue.js"></script>

  <script src="../../node_modules/vuetify/dist/vuetify.js"></script>


  <!--MaterialDesignIcons-->

  <title>SAIME - Centro de Contacto Ciudadano</title>
</head>

<body class="fondoBody">
  <!--BANNER-->
  <img src="../../assets/img/gobierno.png" class="img-fluid" alt="...">
  <!--FIN BANNER-->

  <nav class="navbar navbar-expand-lg bg-light sticky-top">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
      data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="http://www.mpprijp.gob.ve/">
      <img src="../../assets/img/MPPRIJP.png" width="80" height="80" class="d-inline-block align-top ml-4" alt="logo">
    </a>

    <?php
  
  if($_SESSION){
    switch ($_SESSION['rol']) {
      case 'Administrador':
        include('opciones_admin.php');  
      break;
      case 'Master':
        include('opciones_master.php');  
      break;
      case 'Usuario':
        include('opciones_usuario.php');  
      break;
      default:
        include('opciones_iniciales.php');
        break;
    } 
  } else {
    include('opciones_iniciales.php');
  }
  ?>
    <a class="navbar-brand d-flex flex-row justify-content-center" href="http://www.saime.gob.ve/">
      <img src="../../assets/img/saime.png" width="100" height="80" class="d-inline-block align-top mr-4" alt="logo">
    </a>
  </nav>
  <v-app id="app">
<?php if(isset($_SESSION['rol'])) : ?>
<div class="row justify-content-end mr-5">
<span class="mdi mdi-account-outline"></span>
<p class="m-1"><small>Bienvenido: <?php echo $_SESSION['primer_nombre'].' '.$_SESSION['primer_apellido'];
if ($_SESSION['rol'] == 'Administrador' || $_SESSION['rol'] == 'Master'){
  echo ($_SESSION['rol'] == 'Administrador') ? ' <b>(Administrador)</b>' : ' <b>(Master)</b>' ; }?></small></p>
</div>
<?php endif ?>