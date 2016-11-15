<?php include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/html/overall/header.php'); ?>

<body>


<?php include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/html/overall/topnav.php'); ?>

<?php


  include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/config/config.php');

  if($_GET['rut']) {
  	$rut = $_GET['rut'];
  	$rut = mysql_escape_String($rut);
    $sql=mysql_query("SELECT * FROM Alumno WHERE rut = '$rut'", $link);

    while($alumnos = mysql_fetch_assoc($sql)) {

      echo '<form id="formid" class="form-horizontal" action="http://localhost/CRUD_UPLA/html/resultados/actualizar.php" method="GET">
        <fieldset>
          <legend><h3 class="col-lg-offset-5">Actualizar Alumno</h3></legend>
          <div id="ok"></div>
          <div class="form-group">
            <label for="inputNombres" class="col-lg-2 control-label col-lg-offset-2">Nombres</label>
            <div class="col-lg-5">
              <input type="text" class="form-control" id="inputNombres" name="nombres" placeholder="Nombres" maxlength="50" value="',$alumnos['nombre'],'">
            </div>
          </div>
          <div class="form-group">
            <label for="inputApellidoP" class="col-lg-2 control-label col-lg-offset-2">Apellido Paterno</label>
            <div class="col-lg-5">
              <input type="text" class="form-control" id="inputApellidoP" name ="apellidop" placeholder="Apellido Paterno" maxlength="20" value="',$alumnos['apellidop'],'">
            </div>
          </div>
          <div class="form-group">
            <label for="inputApellidoM" class="col-lg-2 control-label col-lg-offset-2">Apellido Materno</label>
            <div class="col-lg-5">
              <input type="text" class="form-control" id="inputApellidoM" name="apellidom" placeholder="Apellido Materno" maxlength="20" value="',$alumnos['apellidom'],'">
            </div>
          </div>

          <div class="form-group">
            <label for="inputRut" class="col-lg-2 control-label col-lg-offset-2">RUT</label>
            <div class="col-xs-4">
              <input type="text" class="form-control rut" id="inputRut" name="rut" placeholder="RUT" maxlength="8" onkeypress="validate(event)" value="',$alumnos['rut'],'">
            </div>
            <div class="col-lg-1">
              <input type="text" class="form-control dv" id="inputDigVer" name="dv" placeholder="Dig. Ver." maxlength="1" value="',$alumnos['dv'],'">
            </div>
          </div>
          <div class="form-group">
            <label for="inputCorreo" class="col-lg-2 control-label col-lg-offset-2">Correo</label>
            <div class="col-lg-5">
              <input type="text" class="form-control" id="inputCorreo" name="correo" placeholder="Correo" maxlength="50" value="',$alumnos['email'],'">
            </div>
          </div>
          <div class="form-group">
            <label for="inputDireccion" class="col-lg-2 control-label col-lg-offset-2">Dirección</label>
            <div class="col-lg-5">
              <input type="text" class="form-control" id="inputDireccion" name="dir" placeholder="Dirección" maxlength="60" value="',$alumnos['direccion'],'">
            </div>
          </div>
          <div class="form-group">
            <label for="inputCiudad" class="col-lg-2 control-label col-lg-offset-2">Ciudad</label>
            <div class="col-lg-5">
              <input type="text" class="form-control" id="inputCiudad" name="ciudad" placeholder="Ciudad" maxlength="20" value="',$alumnos['ciudad'],'">
            </div>
          </div>

          <div class="form-group">
            <div class="col-lg-10 col-lg-offset-4">
              <button type="reset" class="btn btn-default">Cancelar</button>
              <a id="',$alumnos['rut'],'" class="update_c btn btn-primary">Actualizar</a>
            </div>
          </div>
        </fieldset>
      </form>';
    }
  }
  echo '</br></br></br></br>'
?>

<?php include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/html/overall/footer.php'); ?>

</body>
</html>
