<?php

  include('../../../core/models/coneccion.php');

  if($_GET['id_carrera']) {
      $id_carrera = $_GET['id_carrera'];
      $nombre_carrera = $_GET['nombre_carrera'];
      $id_coordinador = $_GET['id_coordinador'];

      $consulta = "UPDATE Carrera SET id_carrera='$id_carrera', nombre_carrera='$nombre_carrera', id_coordinador='$id_coordinador' WHERE id_carrera='$id_carrera'";

      if($conexion->query($consulta)) {
        echo '<div class="alert alert-dismissible alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Bien Hecho!</strong> Los datos han sido actualizados satisfactoreamente.</a>
              </div>';
            header('Location: ../../../index.php?view=lista_carreras');


      } else {
        echo '<div class="alert alert-dismissible alert-danger">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>ERROR!</strong> <a href="#" class="alert-link">No se pudieron actualizar</a> los datos.
              </div>';

      }
}
?>
