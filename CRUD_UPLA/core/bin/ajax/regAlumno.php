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
  $promocion = $db->real_escape_string($_POST['promocion']);
  $id_carrera = $db->real_escape_string($_POST['id_carrera']);

  if(!$image_perfil){
    $image_perfil = 'views/app/img/avatar_alumno.png';
  }

  $sql = $db->query("SELECT nombre FROM Alumno WHERE nombre='$nombres' OR email='$correo' OR rut='$rut' LIMIT 1;");
  if($db->rows($sql) == 0) { // si no existe?

      $db->query("INSERT INTO Alumno (rut, dv, nombre, apellidop, apellidom, direccion, ciudad, email, promocion, image_perfil, id_carrera, estado)
                  VALUES ('$rut','$dv','$nombres','$apellidop','$apellidom','$direccion','$ciudad','$correo','$promocion','$image_perfil','$id_carrera','Activo');");
      $HTML = 1;
    } else {
    $alumno = mysqli_fetch_array($sql)[0];
    if($rut = $alumno) {
      $HTML = '<div class="alert alert-dismissible alert-danger">
      <button type="button" class="close" data-dismiss="alert">x</button>
      <strong>ERROR:</strong> El RUT ingresado ya existe.
    </div>';
    } else if(strtolower($nombres) == strtolower($alumno)){
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

  if (!file_exists('html/Registros_alumnos/'.$rut.'')) {
    mkdir('html/Registros_alumnos/'.$rut.'', 0777, true);
  }

  $myfile = fopen("html/Registros_alumnos/$rut/$rut.txt", "w+") or die("Unable to open file!");
  $txt = "Nombres: $nombres $apellidop $apellidom\nRUT: $rut-$dv\nCorreo: $correo\nPromoción: $promocion";
  fwrite($myfile, $txt);
  fclose($myfile);

?>
