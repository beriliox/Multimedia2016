<?php

  $db = new Conexion();
  $alumno = $db->real_escape_string($_POST['alumno']);
  $asignatura = $db->real_escape_string($_POST['asignatura']);
  $periodo = $db->real_escape_string($_POST['periodo']);
  $oportunidad = $db->real_escape_string($_POST['oportunidad']);

  $db->query("INSERT INTO Inscripcion (rut, cod_asign, periodo, oportunidad, nota_final, estado)
              VALUES ('$alumno', '$asignatura', '$periodo', '$oportunidad', '0.0','ins');");


  $HTML = 1;
  echo $HTML;

?>
