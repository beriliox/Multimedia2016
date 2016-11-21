<?php

  $db = new Conexion();
  $nombres = $db->real_escape_string($_POST['nombres']);
  $apellidop = $db->real_escape_string($_POST['apellidop']);
  $apellidom = $db->real_escape_string($_POST['apellidom']);
  $rut = $db->real_escape_string($_POST['rut']);
  $dv = $db->real_escape_string($_POST['dv']);
  $direccion = $db->real_escape_string($_POST['direccion']);
  $ciudad = $db->real_escape_string($_POST['ciudad']);
  $correo = $db->real_escape_string($_POST['correo']);
  $image_perfil = $db->real_escape_string($_POST['image_perfil']);
  $pass = $_POST['pass'];


  if(!$image_perfil){
    $image_perfil = 'https://lh5.googleusercontent.com/--UmpxNXAfc8/AAAAAAAAAAI/AAAAAAAAAp4/tkBsp4GXv6U/photo.jpg';
  }

  $sql = $db->query("SELECT nombre FROM Coordinador WHERE nombre='$nombres' OR email='$correo' OR rut='$rut' LIMIT 1;");
  if($db->rows($sql) == 0) { // si no existe?

      $db->query("INSERT INTO Coordinador (rut, dv, nombre, apellidop, apellidom, direccion, ciudad, email,image_perfil, estado)
                  VALUES ('$rut','$dv','$nombres','$apellidop','$apellidom','$direccion','$ciudad','$correo','$image_perfil','Activo');");
      $HTML = 1;
    } else {
    $coordinador = mysqli_fetch_array($sql)[0];
    if($rut = $coordinador) {
      $HTML = '<div class="alert alert-dismissible alert-danger">
      <button type="button" class="close" data-dismiss="alert">x</button>
      <strong>ERROR:</strong> El RUT ingresado ya existe.
    </div>';
  } else if(strtolower($nombres) == strtolower($coordinador)){
      $HTML = '<div class="alert alert-dismissible alert-danger">
      <button type="button" class="close" data-dismiss="alert">x</button>
      <strong>ERROR:</strong> El Alumno ingresado ya existe.
    </div>';
    } else {
      $HTML = '<div class="alert alert-dismissible alert-danger">
      <button type="button" class="close" data-dismiss="alert">x</button>
      <strong>ERROR:</strong> El Email ingresado ya existe.
    </div>';
    }
  }

  $db->liberar($sql);
  $db->close();

  echo $HTML;

?>
