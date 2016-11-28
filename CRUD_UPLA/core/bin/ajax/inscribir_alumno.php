<?php

  include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/core/models/coneccion.php');

  if($_GET['alumno']) {
      $alumno = $_GET['alumno'];
      $asignatura = $_GET['asignatura'];
      $periodo = $_GET['periodo'];
      $oportunidad = $_GET['oportunidad'];

      $consulta = "INSERT INTO Inscripcion (rut, cod_asign, periodo, oportunidad, estado) VALUES ('$alumno', '$asignatura', '$periodo' ,'$oportunidad', 'ins')";

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
