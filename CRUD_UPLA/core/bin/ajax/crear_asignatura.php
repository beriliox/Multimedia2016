<?php

  $db = new Conexion();
  $cod_asignatura = $db->real_escape_string($_POST['cod_asignatura']);
  $nombre_asignatura = $db->real_escape_string($_POST['nombre_asignatura']);
  $id_carrera = $db->real_escape_string($_POST['id_carrera']);

  $sql = $db->query("SELECT * FROM Asignatura WHERE cod_asign='$cod_asignatura' OR nombre_asign='$nombre_asignatura' LIMIT 1;");
  if($db->rows($sql) == 0) { // si no existe?

      $db->query("INSERT INTO Asignatura (cod_asign, nombre_asign, id_carrera)
                  VALUES ('$cod_asignatura','$nombre_asignatura', '$id_carrera');");
      $HTML = 1;
    } else {
    $Asignatura= mysqli_fetch_array($sql)[0];
    if(strtolower($cod_asignatura) == strtolower($Asignatura)){
      $HTML = '<div class="alert alert-dismissible alert-danger">
      <button type="button" class="close" data-dismiss="alert">x</button>
      <strong>ERROR:</strong> El Código de la Asignatura ingresada ya existe.
    </div>';
    } else {
      $HTML = '<div class="alert alert-dismissible alert-danger">
      <button type="button" class="close" data-dismiss="alert">x</button>
      <strong>ERROR:</strong> El Nombre de la Asignatura ingresada ya existe.
    </div>';
    }
  }

  $db->liberar($sql);
  $db->close();

  echo $HTML;

?>
