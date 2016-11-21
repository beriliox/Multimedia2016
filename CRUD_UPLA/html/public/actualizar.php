<?php include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/html/overall/header.php'); ?>



<?php include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/html/overall/topnav.php'); ?>

<?php

  include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/core/models/coneccion.php');



  if($_GET['rut']) {
  	$rut = $_GET['rut'];
  	$rut = mysql_escape_String($rut);
    $sql=mysql_query("SELECT * FROM Alumno WHERE rut = '$rut'", $link);

    while($alumnos = mysql_fetch_assoc($sql)) {

      echo '<form id="formid" class="form-horizontal">
        <fieldset>
          <legend><h3 class="col-lg-offset-5">Actualizar Alumno</h3></legend>
          <div class="form-group">
            <label for="inputNombres" class="col-lg-2 control-label col-lg-offset-2">Nombres</label>
            <div class="col-lg-5">
              <input type="text" class="form-control" id="inputNombres_al" name="nombres" placeholder="Nombres" maxlength="50" value="',$alumnos['nombre'],'">
            </div>
          </div>
          <div class="form-group">
            <label for="inputApellidoP" class="col-lg-2 control-label col-lg-offset-2">Apellido Paterno</label>
            <div class="col-lg-5">
              <input type="text" class="form-control" id="inputApellidoP_al" name ="apellidop" placeholder="Apellido Paterno" maxlength="20" value="',$alumnos['apellidop'],'">
            </div>
          </div>
          <div class="form-group">
            <label for="inputApellidoM" class="col-lg-2 control-label col-lg-offset-2">Apellido Materno</label>
            <div class="col-lg-5">
              <input type="text" class="form-control" id="inputApellidoM_al" name="apellidom" placeholder="Apellido Materno" maxlength="20" value="',$alumnos['apellidom'],'">
            </div>
          </div>
          <label for="inputRut" class="col-lg-2 control-label col-lg-offset-2">RUT</label>
          <div class="form-group">
            <div class="col-lg-4 col-md-10 col-xs-9">
              <input type="text" class="form-control rut" id="inputRut_al" name="rut" placeholder="RUT" maxlength="8" value="',$alumnos['rut'],'">
            </div>
            <div class="col-lg-1 col-md-2 col-xs-3">
              <input type="text" class="form-control dv" id="inputDigVer_al" name="dv" placeholder="Dig. Ver." maxlength="1" value="',$alumnos['dv'],'">
            </div>
          </div>
          <div class="form-group">
            <label for="inputCorreo" class="col-lg-2 control-label col-lg-offset-2">Correo</label>
            <div class="col-lg-5">
              <input type="text" class="form-control" id="inputCorreo_al" name="correo" placeholder="Correo" maxlength="50" value="',$alumnos['email'],'">
            </div>
          </div>
          <div class="form-group">
            <label for="inputCorreo" class="col-lg-2 control-label col-lg-offset-2">Carrera</label>
            <div class="col-lg-5">
              <select class="form-control" id="inputCarrera_al" name="nombre_carrera" maxlength="15">';


                $consulta=mysql_query("SELECT * FROM Carrera",$link);

                while($carrera = mysql_fetch_assoc($consulta)) {
                  echo '<option>'. $carrera['id_carrera']. '</option>';
                }

              echo '</select>
            </div>
          </div>
          <div class="form-group">
            <label for="inputPromocion" class="col-lg-2 control-label col-lg-offset-2">Promoción</label>
            <div class="col-lg-5">
              <input type="text" class="form-control" id="inputPromocion_al" name="promocion" placeholder="Promoción" maxlength="4" value="',$alumnos['promocion'],'">
            </div>
          </div>
          <div class="form-group">
            <label for="inputDireccion" class="col-lg-2 control-label col-lg-offset-2">Dirección</label>
            <div class="col-lg-5">
              <input type="text" class="form-control" id="inputDireccion_al" name="dir" placeholder="Dirección" maxlength="60" value="',$alumnos['direccion'],'">
            </div>
          </div>
          <div class="form-group">
            <label for="inputCiudad" class="col-lg-2 control-label col-lg-offset-2">Ciudad</label>
            <div class="col-lg-5">
              <input type="text" class="form-control" id="inputCiudad_al" name="ciudad" placeholder="Ciudad" maxlength="50" value="',$alumnos['ciudad'],'">
            </div>
          </div>
          <div class="form-group">
            <label for="inputurl_foto" class="col-lg-2 control-label col-lg-offset-2">URL Foto</label>
            <div class="col-lg-5">
              <input type="text" class="form-control" id="inputurl_foto_al" name="url_foto" placeholder="URL Foto" maxlength="200" value="',$alumnos['image_perfil'],'">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEstado" class="col-lg-2 control-label col-lg-offset-2">Estado</label>
            <div class="col-lg-5">
              <select class="form-control" id="inputEstado_al" name="estado" maxlength="15">';

              echo '<option>'. $alumnos['estado']. '</option>';

              $consulta=mysql_query("SELECT DISTINCT estado FROM Alumno",$link);

              while($estado = mysql_fetch_assoc($consulta)) {
                if(($alumnos['estado']!=$estado['estado']) and $estado['estado']!= ''){
                  echo '<option>'. $estado['estado']. '</option>';
                }
              }

              echo '</select>
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-10 col-lg-offset-4">
              <button type="reset" class="btn btn-default">Cancelar</button>
              <a id="',$alumnos['rut'],'" class="update_c_alumno btn btn-primary">Actualizar</a>
            </div>
          </div>
        </fieldset>
      </form>';
    }
  }
  echo '</br></br></br></br>'
?>

<?php include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/html/overall/footer.php'); ?>
