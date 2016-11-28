<?php

$servidor = 'localhost';
$usuario = 'root';
$pass = '';
$bd = 'Concentracion';

$conexion = new mysqli($servidor, $usuario, $pass, $bd);

if ($conexion->connect_errno) {
  echo "ERROR AL CONECTARSE {$conexion->connect_errno}";
}

$link = mysql_connect($servidor, $usuario, $pass)
    or die('No se pudo conectar: ' . mysql_error());
//echo 'Connected successfully';
mysql_select_db($bd) or die('No se pudo seleccionar la base de datos');


?>
