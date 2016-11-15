<?php
  include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/html/overall/header.php');

  include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/config/config.php');

  $nombre_tabla = $_POST['nombre_tabla'];
  $cantidad = $_POST['cantidad'];

  for ($i=1; $i <= $cantidad; $i++) {
    $i= $_POST['nombre_campo'];
    $tipo_dato = $_POST['tipo_dato'];
    $nullo = $_POST['nullo'];
    $sql = "ALTER TABLE $nombre_tabla ADD $i $tipo_dato $nullo";
    if(mysql_query($sql)) {
      echo '<div class="alert alert-dismissible alert-success">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong>Bien Hecho!</strong> El campo <strong>',$i,'</strong> ha sido creado satisfactoreamente.</a>
            </div>';
      } else {
      echo '<div class="alert alert-dismissible alert-danger">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong>ERROR!</strong> No se pudo crear el campo <strong>',$i,'</strong>.
            </div>';

      }
  }
?>
