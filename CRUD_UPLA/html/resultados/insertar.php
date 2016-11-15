<?php include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/html/overall/header.php'); ?>

<body>


<?php include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/html/overall/topnav.php'); ?>


<?php

  require('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/config/config.php');

  $nombres = $_GET['nombres'];
  $apellidop = $_GET['apellidop'];
  $apellidom = $_GET['apellidom'];
  $rut = $_GET['rut'];
  $dv = $_GET['dv'];
  $correo = $_GET['correo'];
  $direccion = $_GET['dir'];
  $ciudad = $_GET['ciudad'];

  $consulta = "INSERT INTO Alumno(rut, dv, nombre, apellidop, apellidom, direccion, ciudad, email) VALUES ('$rut', '$dv', '$nombres', '$apellidop', '$apellidom', '$direccion', '$ciudad', '$correo')";

  if($conexion->query($consulta)) {
    echo '<div class="alert alert-dismissible alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Bien Hecho!</strong> Los datos han sido insertados satisfactoreamente.</a>
          </div>';
  } else {
    echo '<div class="alert alert-dismissible alert-danger">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>ERROR!</strong> <a href="#" class="alert-link">No se pudieron insertar</a> los datos.
          </div>';
  }

?>

<form id="formid" class="form-horizontal" action="http://localhost/CRUD_UPLA/html/resultados/insertar.php" method="POST">
  <fieldset>
    <legend><h3 class="col-lg-offset-5">Ingresar Alumno</h3></legend>
    <div id="ok"></div>
    <div class="form-group">
      <label for="inputNombres" class="col-lg-2 control-label col-lg-offset-2">Nombres</label>
      <div class="col-lg-5">
        <input type="text" class="form-control" id="inputNombres" name="nombres" placeholder="Nombres" maxlength="50" required>
      </div>
    </div>
    <div class="form-group">
      <label for="inputApellidoP" class="col-lg-2 control-label col-lg-offset-2">Apellido Paterno</label>
      <div class="col-lg-5">
        <input type="text" class="form-control" id="inputApellidoP" name ="apellidop" placeholder="Apellido Paterno" maxlength="20" >
      </div>
    </div>
    <div class="form-group">
      <label for="inputApellidoM" class="col-lg-2 control-label col-lg-offset-2">Apellido Materno</label>
      <div class="col-lg-5">
        <input type="text" class="form-control" id="inputApellidoM" name="apellidom" placeholder="Apellido Materno" maxlength="20" >
      </div>
    </div>

    <div class="form-group">
      <label for="inputRut" class="col-lg-2 control-label col-lg-offset-2">RUT</label>
      <div class="col-xs-4">
        <input type="text" class="form-control rut" id="inputRut" name="rut" placeholder="RUT" maxlength="8" onkeypress="validate(event)" >
      </div>
      <div class="col-lg-1">
        <input type="text" class="form-control dv" id="inputDigVer" name="dv" placeholder="Dig. Ver." maxlength="1" >
      </div>
    </div>
    <div class="form-group">
      <label for="inputCorreo" class="col-lg-2 control-label col-lg-offset-2">Correo</label>
      <div class="col-lg-5">
        <input type="text" class="form-control" id="inputCorreo" name="correo" placeholder="Correo" maxlength="50" >
      </div>
    </div>
    <div class="form-group">
      <label for="inputDireccion" class="col-lg-2 control-label col-lg-offset-2">Dirección</label>
      <div class="col-lg-5">
        <input type="text" class="form-control" id="inputDireccion" name="dir" placeholder="Dirección" maxlength="60">
      </div>
    </div>
    <div class="form-group">
      <label for="inputCiudad" class="col-lg-2 control-label col-lg-offset-2">Ciudad</label>
      <div class="col-lg-5">
        <input type="text" class="form-control" id="inputCiudad" name="ciudad" placeholder="Ciudad" maxlength="20" >
      </div>
    </div>

    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-4">
        <button type="reset" class="btn btn-default">Cancelar</button>
        <input type="submit" class="btn btn-primary" value="Insertar"/>
      </div>
    </div>
  </fieldset>
</form></br></br></br></br>




<?php include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/html/overall/footer.php'); ?>

</body>
</html>
