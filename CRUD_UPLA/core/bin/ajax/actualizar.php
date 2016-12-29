<?php

  include('../../../core/models/coneccion.php');

  if($_GET['rut']) {
      $nombres = $_GET['nombres'];
      $apellidop = $_GET['apellidop'];
      $apellidom = $_GET['apellidom'];
      $rut = $_GET['rut'];
      $dv = $_GET['dv'];
      $correo = $_GET['correo'];
      $direccion = $_GET['dir'];
      $ciudad = $_GET['ciudad'];
      $id_carrera = $_GET['id_carrera'];
      $promocion = $_GET['promocion'];
      $image_perfil = $_GET['image_perfil'];
      $estado = $_GET['estado'];
      $telefono = $_GET['telefono'];


      $consulta = "UPDATE Alumno
                   SET    rut='$rut', dv='$dv', nombre='$nombres', apellidop='$apellidop', apellidom='$apellidom',
                          direccion='$direccion', ciudad='$ciudad', email='$correo' , id_carrera='$id_carrera',
                          promocion='$promocion', image_perfil='$image_perfil', estado='$estado' , telefono='$telefono'
                   WHERE rut='$rut'";

      if($conexion->query($consulta)) {
        echo '<div class="alert alert-dismissible alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Bien Hecho!</strong> Los datos han sido actualizados satisfactoreamente.</a>
              </div>';

      } else {
        echo '<div class="alert alert-dismissible alert-danger">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>ERROR!</strong> <a href="#" class="alert-link">No se pudieron actualizar</a> los datos.
              </div>';

      }
}
?>
