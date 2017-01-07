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
    $sql=mysql_query("SELECT * FROM Administrador WHERE id = '$id'", $link);

    while($administradores = mysql_fetch_assoc($sql)) {

      echo '<form id="formid" class="form-horizontal">
        <fieldset>
          <center><legend><h3>Ficha del Administrador</h3></legend></center>
          <div class="form-group">
            <center>
              <img src="',$administradores['image_perfil'],'" alt="" class="img-responsive img-circle" style="width:240px; height:250px;"/>
            </center>
          </div>
          <div class="form-group">
            <label for="inputNombres" class="col-lg-2 control-label col-lg-offset-2">Nombres</label>
            <div class="col-lg-5">
              <input type="text" class="form-control" id="inputNombres_admin" name="nombres" placeholder="Nombres" maxlength="50" value="',$administradores['nombre'],'" disabled="disabled">
            </div>
          </div>
          <div class="form-group">
            <label for="inputApellidoP" class="col-lg-2 control-label col-lg-offset-2">Apellido Paterno</label>
            <div class="col-lg-5">
              <input type="text" class="form-control" id="inputApellidoP_admin" name ="apellidop" placeholder="Apellido Paterno" maxlength="20" value="',$administradores['apellidop'],'" disabled="disabled">
            </div>
          </div>
          <div class="form-group">
            <label for="inputApellidoM" class="col-lg-2 control-label col-lg-offset-2">Apellido Materno</label>
            <div class="col-lg-5">
              <input type="text" class="form-control" id="inputApellidoM_admin" name="apellidom" placeholder="Apellido Materno" maxlength="20" value="',$administradores['apellidom'],'" disabled="disabled">
            </div>
          </div>
          <label for="inputRut" class="col-lg-2 control-label col-lg-offset-2">RUT</label>
          <div class="form-group">
            <div class="col-lg-4 col-md-10 col-xs-9">
              <input type="text" class="form-control rut" id="inputRut_admin" name="rut" placeholder="RUT" maxlength="8" value="',$administradores['rut'],'" disabled="disabled">
            </div>
            <div class="col-lg-1 col-md-2 col-xs-3">
              <input type="text" class="form-control dv" id="inputDigVer_admin" name="dv" placeholder="Dig. Ver." maxlength="1" value="',$administradores['dv'],'" disabled="disabled">
            </div>
          </div>
          <div class="form-group">
            <label for="inputCorreo" class="col-lg-2 control-label col-lg-offset-2">Correo</label>
            <div class="col-lg-5">
              <input type="text" class="form-control" id="inputCorreo_admin" name="correo" placeholder="Correo" maxlength="50" value="',$administradores['email'],'" disabled="disabled">
            </div>
          </div>
          <div class="form-group">
            <label for="inputTelefono" class="col-lg-2 control-label col-lg-offset-2">Teléfono (+56 9)</label>
            <div class="col-lg-5">
              <input type="text" class="form-control" id="inputTelefono_admin" name="telefono" placeholder="Telefono" maxlength="8" value="',$administradores['telefono'],'" disabled="disabled">
            </div>
          </div>
          <div class="form-group">
            <label for="inputDireccion" class="col-lg-2 control-label col-lg-offset-2">Dirección</label>
            <div class="col-lg-5">
              <input type="text" class="form-control" id="inputDireccion_admin" name="dir" placeholder="Dirección" maxlength="60" value="',$administradores['direccion'],'" disabled="disabled">
            </div>
          </div>
          <div class="form-group">
            <label for="inputCiudad" class="col-lg-2 control-label col-lg-offset-2">Ciudad</label>
            <div class="col-lg-5">
              <input type="text" class="form-control" id="inputCiudad_admin" name="ciudad" placeholder="Ciudad" maxlength="50" value="',$administradores['ciudad'],'" disabled="disabled">
            </div>
          </div>
          <div class="form-group">
            <label for="inputurl_foto" class="col-lg-2 control-label col-lg-offset-2">URL Foto</label>
            <div class="col-lg-5">
              <input type="text" class="form-control" id="inputurl_foto_admin" name="url_foto" placeholder="URL Foto" maxlength="200" value="',$administradores['image_perfil'],'" disabled="disabled">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPass" class="col-lg-2 control-label col-lg-offset-2">Contraseña</label>
            <div class="col-lg-5">
              <input type="password" class="form-control" id="input_Pass_admin" name="pass" placeholder="Contraseña" maxlength="20" value="',$administradores['pass'],'" disabled="disabled">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEstado" class="col-lg-2 control-label col-lg-offset-2">Estado</label>
            <div class="col-lg-5">
              <select class="form-control" id="inputEstado_admin" name="estado" maxlength="15" disabled="disabled">';


              echo '<option>'. $administradores['estado']. '</option>';

              $consulta=mysql_query("SELECT DISTINCT estado FROM Alumno",$link);

              while($estado = mysql_fetch_assoc($consulta)) {
                if(($administradores['estado']!=$estado['estado']) and $estado['estado']!= ''){
                  echo '<option>'. $estado['estado']. '</option>';
                }
              }

              echo '</select>
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-10 col-lg-offset-4">
              <a class="btn btn-primary" href="?view=lista_administradores">Lista de Administrador</a>';
              if(isset($_SESSION['app_id']) or isset($_SESSION['app_id_coord'])){
                echo '<a id="',$administradores['id'],'" class="update_c_administrador btn btn-success col-lg-offset-1 col-md-offset-1 col-xs-offset-1"><span class="glyphicon glyphicon-off"></span> Actualizar Datos</a>';
                echo '<button id="habilitar_administrador" class="btn btn-default btn-success col-lg-offset-1 col-md-offset-1 col-xs-offset-1"><span class="glyphicon glyphicon-off"></span> Actualizar Datos</button>';
              } echo
            '</div>
          </div>
        </fieldset>
      </form>';
    }
  }
  echo '</br></br></br></br>'
?>

<?php include('html/overall/footer.php'); ?>
