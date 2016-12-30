<?php

  include('../../../core/models/coneccion.php');

  if($_GET['cod_asign']) {
      $cod_asign = $_GET['cod_asign'];
      $nombre_asign = $_GET['nombre_asign'];
      $id_carrera = $_GET['id_carrera'];

      $consulta = "UPDATE Asignatura SET cod_asign='$cod_asign', nombre_asign='$nombre_asign',
                          id_carrera = '$id_carrera'
                   WHERE  cod_asign='$cod_asign'";

      if($conexion->query($consulta)) {
        echo '<div class="alert alert-dismissible alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Bien Hecho!</strong> Los datos han sido actualizados satisfactoreamente.</a>
              </div>';
            header('Location: ../../../index.php?view=lista_asignaturas');


      } else {
        echo '<div class="alert alert-dismissible alert-danger">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>ERROR!</strong> <a href="#" class="alert-link">No se pudieron actualizar</a> los datos.
              </div>';

      }
}
?>
