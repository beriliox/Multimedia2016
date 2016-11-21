<?php

  include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/core/models/coneccion.php');

  if($_GET['id']) {
      $id = $_GET['id'];
      $nombres = $_GET['nombres'];
      $apellidop = $_GET['apellidop'];
      $apellidom = $_GET['apellidom'];
      $rut = $_GET['rut'];
      $dv = $_GET['dv'];
      $correo = $_GET['correo'];
      $direccion = $_GET['dir'];
      $ciudad = $_GET['ciudad'];
      $imagen_perfil = $_GET['imagen_perfil'];
      $estado = $_GET['estado'];
      $pass = $_GET['pass'];


      $consulta = "UPDATE Coordinador
                   SET rut='$rut', dv='$dv', nombre='$nombres', apellidop='$apellidop', apellidom='$apellidom',
                       direccion='$direccion', ciudad='$ciudad', email='$correo', image_perfil='$imagen_perfil', estado='$estado', pass= '$pass'
                   WHERE id='$id'";

      if($conexion->query($consulta)) {
        echo '<div class="alert alert-dismissible alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Bien Hecho!</strong> Los datos han sido actualizados satisfactoreamente.</a>
              </div>';
        header('Location: http://localhost/CRUD_UPLA/index.php?view=coordinadores');


      } else {
        echo '<div class="alert alert-dismissible alert-danger">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>ERROR!</strong> <a href="#" class="alert-link">No se pudieron actualizar</a> los datos.
              </div>';

      }
}
?>
