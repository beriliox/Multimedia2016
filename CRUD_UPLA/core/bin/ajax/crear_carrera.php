<?php

  $db = new Conexion();
  $cod_carrera = $db->real_escape_string($_POST['cod_carrera']);
  $nombre_carrera = $db->real_escape_string($_POST['nombre_carrera']);
  $id_coordinador = $db->real_escape_string($_POST['id_coordinador']);


  $sql = $db->query("SELECT * FROM Carrera WHERE id_carrera='$cod_carrera' OR nombre_carrera='$nombre_carrera' LIMIT 1;");
  if($db->rows($sql) == 0) { // si no existe?

      $db->query("INSERT INTO Carrera (id_carrera, nombre_carrera, id_coordinador)
                  VALUES ('$cod_carrera','$nombre_carrera','$id_coordinador');");
      $HTML = 1;
    } else {
    $carrera= mysqli_fetch_array($sql)[0];
    if(strtolower($cod_carrera) == strtolower($carrera)){
      $HTML = '<div class="alert alert-dismissible alert-danger">
      <button type="button" class="close" data-dismiss="alert">x</button>
      <strong>ERROR:</strong> El Código de Carrera ingresada ya existe.
    </div>';
    } else {
      $HTML = '<div class="alert alert-dismissible alert-danger">
      <button type="button" class="close" data-dismiss="alert">x</button>
      <strong>ERROR:</strong> El Nombre de Carrera ingresada ya existe.
    </div>';
    }
  }

  $db->liberar($sql);
  $db->close();

  echo $HTML;

?>
