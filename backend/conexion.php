<?php

$link= 'mysql:host=localhost;dbname=saime'; //Conexión con mysql, host localhots y nombre DB.
$usuario= 'root';
$pass= '';

try{

  $pdo= new PDO($link,$usuario,$pass); //Creamos una variable y le pasamos los parámetros.


  //foreach($pdo->query('SELECT * FROM `colores`') as $fila) {
  //  print_r($fila);
  //}

}catch (PDOException $e) { //Catch se mantiene porque es propio de PHP.
  print "¡Error!: " . $e->getMessage() . "<br/>";
  die();
}