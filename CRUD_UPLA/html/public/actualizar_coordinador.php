<?php
  if(isset($_SESSION['app_id']) or isset($_SESSION['app_id_coord']) or isset($_SESSION['app_id_prof'])) {

  } else{
    header('location: ?view=index');

  }
?>
<?php include('html/overall/header.php'); ?>



<?php include('html/overall/topnav.php'); ?>

<?php

  include('core/models/coneccion.php');



  if($_GET['id']) {
  	$id = $_GET['id'];
  	$rut = mysql_escape_String($id);
    $sql=mysql_query("SELECT * FROM Coordinador WHERE id = '$id'", $link);

    while($alumnos = mysql_fetch_assoc($sql)) {

      echo '<form id="formid" class="form-horizontal">
        <fieldset>
          <legend><h3 class="col-lg-offset-5">Ficha del Coordinador</h3></legend>
          <div class="form-group">
            <div class="col-lg-2 col-lg-offset-5 col-xs-6 col-xs-offset-3 col-md-3 col-md-offset-4">
              <img src="',$alumnos['image_perfil'],'" alt="" class="img-responsive  img-circle"/>
            </div>
          </div>
          <div class="form-group">
            <label for="inputNombres" class="col-lg-2 control-label col-lg-offset-2">Nombres</label>
            <div class="col-lg-5">
              <input type="text" class="form-control" id="inputNombres_coord" name="nombres" placeholder="Nombres" maxlength="50" value="',$alumnos['nombre'],'" disabled="disabled">
            </div>
          </div>
          <div class="form-group">
            <label for="inputApellidoP" class="col-lg-2 control-label col-lg-offset-2">Apellido Paterno</label>
            <div class="col-lg-5">
              <input type="text" class="form-control" id="inputApellidoP_coord" name ="apellidop" placeholder="Apellido Paterno" maxlength="20" value="',$alumnos['apellidop'],'" disabled="disabled">
            </div>
          </div>
          <div class="form-group">
            <label for="inputApellidoM" class="col-lg-2 control-label col-lg-offset-2">Apellido Materno</label>
            <div class="col-lg-5">
              <input type="text" class="form-control" id="inputApellidoM_coord" name="apellidom" placeholder="Apellido Materno" maxlength="20" value="',$alumnos['apellidom'],'" disabled="disabled">
            </div>
          </div>
          <label for="inputRut" class="col-lg-2 control-label col-lg-offset-2">RUT</label>
          <div class="form-group">
            <div class="col-lg-4 col-md-10 col-xs-9">
              <input type="text" class="form-control rut" id="inputRut_coord" name="rut" placeholder="RUT" maxlength="8" value="',$alumnos['rut'],'" disabled="disabled">
            </div>
            <div class="col-lg-1 col-md-2 col-xs-3">
              <input type="text" class="form-control dv" id="inputDigVer_coord" name="dv" placeholder="Dig. Ver." maxlength="1" value="',$alumnos['dv'],'" disabled="disabled">
            </div>
          </div>
          <div class="form-group">
            <label for="inputCorreo" class="col-lg-2 control-label col-lg-offset-2">Correo</label>
            <div class="col-lg-5">
              <input type="text" class="form-control" id="inputCorreo_coord" name="correo" placeholder="Correo" maxlength="50" value="',$alumnos['email'],'" disabled="disabled">
            </div>
          </div>
          <div class="form-group">
            <label for="inputCorreo" class="col-lg-2 control-label col-lg-offset-2">Telefono (+56 9)</label>
            <div class="col-lg-5">
              <input type="text" class="form-control" id="inputTelefono_coord" name="telefodno" placeholder="Telefono" maxlength="8" value="',$alumnos['telefono'],'" disabled="disabled">
            </div>
          </div>
          <div class="form-group">
            <label for="inputDireccion" class="col-lg-2 control-label col-lg-offset-2">Dirección</label>
            <div class="col-lg-5">
              <input type="text" class="form-control" id="inputDireccion_coord" name="dir" placeholder="Dirección" maxlength="60" value="',$alumnos['direccion'],'" disabled="disabled">
            </div>
          </div>
          <div class="form-group">
            <label for="inputCiudad" class="col-lg-2 control-label col-lg-offset-2">Ciudad</label>
            <div class="col-lg-5">
              <input type="text" class="form-control" id="inputCiudad_coord" name="ciudad" placeholder="Ciudad" maxlength="50" value="',$alumnos['ciudad'],'" disabled="disabled">
            </div>
          </div>
          <div class="form-group">
            <label for="inputurl_foto" class="col-lg-2 control-label col-lg-offset-2">URL Foto</label>
            <div class="col-lg-5">
              <input type="text" class="form-control" id="inputurl_foto_coord" name="url_foto" placeholder="URL Foto" maxlength="200" value="',$alumnos['image_perfil'],'" disabled="disabled">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPass" class="col-lg-2 control-label col-lg-offset-2">Contraseña</label>
            <div class="col-lg-5">
              <input type="password" class="form-control" id="input_Pass_coord" name="pass" placeholder="Contraseña" maxlength="20" value="',$alumnos['pass'],'" disabled="disabled">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEstado" class="col-lg-2 control-label col-lg-offset-2">Estado</label>
            <div class="col-lg-5">
              <select class="form-control" id="inputEstado_coord" name="estado" maxlength="10" disabled="disabled">';

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
              <a class="btn btn-primary" href="?view=coordinadores">Lista de Coordinadores</a>';
              if(isset($_SESSION['app_id'])){
                echo '<a id="',$alumnos['id'],'" class="update_c_coordinador btn btn-success col-lg-offset-1 col-md-offset-1 col-xs-offset-1"><span class="glyphicon glyphicon-off"></span> Actualizar Datos</a>';
                echo '<button id="habilitar_coordinador" class="btn btn-default btn-success col-lg-offset-1 col-md-offset-1 col-xs-offset-1"><span class="glyphicon glyphicon-off"></span> Actualizar Datos</button>';
              }
      echo '</div>

          </div>
        </fieldset>
      </form>';
    }
  }
  echo '</br></br></br></br>'
?>

<?php include('html/overall/footer.php'); ?>
