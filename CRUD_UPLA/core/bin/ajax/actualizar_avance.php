<?php

  include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/core/models/coneccion.php');

  if($_GET['id_inscripcion']) {
      $id_inscripcion = $_GET['id_inscripcion'];
      $nota_final = $_GET['nota_final'];
      $estado = $_GET['estado'];

      $consulta = "UPDATE Inscripcion
                   SET    nota_final='$nota_final', estado='$estado'
                   WHERE  id_inscripcion='$id_inscripcion'";

      if($conexion->query($consulta)) {
        echo '<div class="alert alert-dismissible alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Bien Hecho!</strong> Los datos han sido actualizados satisfactoreamente.</a>
              </div>';
        header('Location: http://localhost/CRUD_UPLA/index.php?view=inscripcion_alumno');



      } else {
        echo '<div class="alert alert-dismissible alert-danger">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>ERROR!</strong> <a href="#" class="alert-link">No se pudieron actualizar</a> los datos.
              </div>';

      }
}
?>
