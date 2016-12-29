<?php

  include('../../../core/models/coneccion.php');
  session_start();



  if($_GET['id']) {
      $id = $_GET['id'];
      $correo = $_GET['correo'];
      $direccion = $_GET['direccion'];
      $ciudad = $_GET['ciudad'];
      $image_perfil = $_GET['image_perfil'];

      if(isset($_SESSION['app_id'])) { //admin

              $consulta = "UPDATE Administrador SET direccion='$direccion', ciudad='$ciudad', email='$correo' , image_perfil ='$image_perfil' WHERE id='$id'";

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
      if(isset($_SESSION['app_id_coord'])) { //coord

              $consulta = "UPDATE Coordinador SET direccion='$direccion', ciudad='$ciudad', email='$correo' WHERE id='$id'";

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
      if(isset($_SESSION['app_id_prof'])) { //prof

              $consulta = "UPDATE Profesor SET direccion='$direccion', ciudad='$ciudad', email='$correo' WHERE id='$id'";

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

}

?>
