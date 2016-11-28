<?php

if($_POST) {

  require('core/core.php');

  switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
    case 'login_admin':
      require('core/bin/ajax/goLogin_admin.php');
    break;
    case 'login_prof':
      require('core/bin/ajax/goLogin_prof.php');
    break;
    case 'login_coord':
      require('core/bin/ajax/goLogin_coord.php');
    break;
    case 'reg':
      require('core/bin/ajax/goReg.php');
    break;
    case 'reg_alumno':
      require('core/bin/ajax/regAlumno.php');
    break;
    case 'reg_profesor':
      require('core/bin/ajax/regProfesor.php');
    break;
    case 'reg_coordinador':
      require('core/bin/ajax/regCoordinador.php');
    break;
    case 'crear_carrera':
      require('core/bin/ajax/crear_carrera.php');
    break;
    case 'crear_asignatura':
      require('core/bin/ajax/crear_asignatura.php');
    break;
    default:
      header('location: index.php');
    break;
  }
} else {
  header('location: index.php');
}

?>
