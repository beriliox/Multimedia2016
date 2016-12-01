<?php
  if(isset($_SESSION['app_id']) or isset($_SESSION['app_id_coord']) or isset($_SESSION['app_id_prof'])) {

  } else{
    header('location: ?view=index');

  }
?>
<?php include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/html/overall/header.php'); ?>



<?php include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/html/overall/topnav.php'); ?>

<?php

  include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/core/models/coneccion.php');



  if($_GET['id_carrera']) {
  	$id_carrera = $_GET['id_carrera'];
  	$id_carrera = mysql_escape_String($id_carrera);
    $sql=mysql_query("SELECT car.*, coord.* FROM Carrera car, Coordinador coord WHERE car.id_coordinador = coord.id AND id_carrera = '$id_carrera'", $link);

    while($carreras = mysql_fetch_assoc($sql)) {

      echo '<form id="formid" class="form-horizontal">
        <fieldset>
          <legend><h3 class="col-lg-offset-5">Actualizar Carreras</h3></legend>
          <div class="form-group">
            <label for="inputNombres" class="col-lg-2 control-label col-lg-offset-2">Cod. Carrera</label>
            <div class="col-lg-5">
              <input type="text" class="form-control" id="inputCodCarrera_act" placeholder="Cod. Carrera" value="',$carreras['id_carrera'],'">
            </div>
          </div>
          <div class="form-group">
            <label for="inputApellidoP" class="col-lg-2 control-label col-lg-offset-2">Nombre Carrera</label>
            <div class="col-lg-5">
              <input type="text" class="form-control" id="inputNombreCarrera_act" placeholder="Nombre Carrera" maxlength="40" value="',$carreras['nombre_carrera'],'">
            </div>
          </div>
          <div class="form-group">
            <label for="inputCorreo" class="col-lg-2 control-label col-lg-offset-2">Coordinador</label>
            <div class="col-lg-5">
              <select class="form-control" id="inputCoordinador_act" maxlength="15">';


              echo '<option value="',$carreras['id'],'">'. $carreras['nombre']. ' ' . $carreras['apellidop'] . ' / ' . $carreras['rut'].'</option>';

              $consulta=mysql_query("SELECT DISTINCT nombre, id, apellidop, rut FROM Coordinador ORDER BY id",$link);

              while($coord = mysql_fetch_assoc($consulta)) {
                if(($carreras['nombre']!=$coord['nombre']) and $coord['nombre']!= ''){
                  echo '<option value="',$coord['id'],'">'. $coord['nombre']. ' ' . $coord['apellidop']. ' / ' . $coord['rut'].'</option>';
                }
              }

              echo '</select>
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-10 col-lg-offset-4">
              <a class="btn btn-default" href="?view=lista_carreras">Cancelar</a>
              <a id="',$carreras['id_carrera'],'" class="update_c_carrera btn btn-primary">Actualizar</a>
            </div>
          </div>
        </fieldset>
      </form>';
    }
  }
  echo '</br></br></br></br>'
?>

<?php include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/html/overall/footer.php'); ?>
