<?php include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/html/overall/header.php'); ?>

<body>


<?php include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/html/overall/topnav.php'); ?>

<?php

  require('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/config/config.php');

  if($_GET['rut']) {
      $nombres = $_GET['nombres'];
      $apellidop = $_GET['apellidop'];
      $apellidom = $_GET['apellidom'];
      $rut = $_GET['rut'];
      $dv = $_GET['dv'];
      $correo = $_GET['correo'];
      $direccion = $_GET['dir'];
      $ciudad = $_GET['ciudad'];

      $consulta = "UPDATE Alumno SET rut='$rut', dv='$dv', nombre='$nombres', apellidop='$apellidop', apellidom='$apellidom', direccion='$direccion', ciudad='$ciudad', email='$correo' WHERE rut='$rut'";

      if($conexion->query($consulta)) {
        echo '<div class="alert alert-dismissible alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Bien Hecho!</strong> Los datos han sido actualizados satisfactoreamente.</a>
              </div>';
        header('Location: http://localhost/CRUD_UPLA/html/public/listar_actualizar.php');

      } else {
        echo '<div class="alert alert-dismissible alert-danger">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>ERROR!</strong> <a href="#" class="alert-link">No se pudieron actualizar</a> los datos.
              </div>';

      }
} else {
  echo 'error';
}

?>
