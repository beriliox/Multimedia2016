<?php

  include('../../../core/models/coneccion.php');

  $db = new Conexion();
  $profesor = $db->real_escape_string($_POST['profesor']);
  $asignatura = $db->real_escape_string($_POST['asignatura']);
  $periodo = $db->real_escape_string($_POST['periodo']);

  $db->query("INSERT INTO Prof_Asignatura (id_profesor, cod_asign, periodo)
              VALUES ('$profesor', '$asignatura', '$periodo');");


  $HTML = 1;
  echo $HTML;


?>
