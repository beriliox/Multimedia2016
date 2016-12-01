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



  if($_GET['cod_asign']) {
  	$cod_asign = $_GET['cod_asign'];
  	$cod_asign = mysql_escape_String($cod_asign);
    $sql=mysql_query("SELECT asign.*, car.* FROM Asignatura asign, Carrera car WHERE asign.cod_asign = '$cod_asign' AND asign.id_carrera = car.id_carrera", $link);

    while($asignaturas = mysql_fetch_assoc($sql)) {

      echo '<form id="formid" class="form-horizontal">
        <fieldset>
          <legend><h3 class="col-lg-offset-5">Actualizar Asignaturas</h3></legend>
          <div class="form-group">
            <label for="inputNombres" class="col-lg-2 control-label col-lg-offset-2">Cod. Asignatura</label>
            <div class="col-lg-5">
              <input type="text" class="form-control" id="inputCodAsignatura_act" placeholder="Cod. Asignatura" value="',$asignaturas['cod_asign'],'">
            </div>
          </div>
          <div class="form-group">
            <label for="inputApellidoP" class="col-lg-2 control-label col-lg-offset-2">Nombre Asignatura</label>
            <div class="col-lg-5">
              <input type="text" class="form-control" id="inputNombreAsignatura_act" placeholder="Nombre Asignatura" maxlength="40" value="',$asignaturas['nombre_asign'],'">
            </div>
          </div>

          <div class="form-group">
            <label for="inputCarrera" class="col-lg-2 control-label col-lg-offset-2">Nombre Carrera</label>
            <div class="col-lg-5">
              <select class="form-control" id="inputNombreCarrera_asign_act" maxlength="15" >

              <option value="',$asignaturas['id_carrera'],'">'. $asignaturas['nombre_carrera']. '</option>';

                $consulta=mysql_query("SELECT id_carrera, nombre_carrera FROM Carrera",$link);

                while($carrera = mysql_fetch_assoc($consulta)) {
                  if(($asignaturas['id_carrera']!=$carrera['id_carrera']) and $carrera['id_carrera']!= ''){
                  echo '<option value="',$carrera['id_carrera'],'">'. $carrera['nombre_carrera']. '</option>';
                  }
                }

        echo '</select>
            </div>
         </div>

          <div class="form-group">
            <div class="col-lg-10 col-lg-offset-4">
              <a class="btn btn-default" href="?view=lista_asignaturas">Cancelar</a>
              <a id="',$asignaturas['cod_asign'],'" class="update_c_asignatura btn btn-primary">Actualizar</a>
            </div>
          </div>
        </fieldset>
      </form>';
    }
  }
  echo '</br></br></br></br>'
?>

<?php include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/html/overall/footer.php'); ?>
