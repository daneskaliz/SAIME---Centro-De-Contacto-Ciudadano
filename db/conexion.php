<?php

$db_link= 'mysql:host=localhost;dbname=saime'; //Conexión con mysql, host localhots y nombre DB.
$usuario= 'root';
$pass= '';

try{

  $pdo= new PDO($db_link,$usuario,$pass); //Creamos una variable y le pasamos los parámetros.

}catch (PDOException $e) { //Catch se mantiene porque es propio de PHP.
  print "¡Error!: " . $e->getMessage() . "<br/>";
  die();
}
