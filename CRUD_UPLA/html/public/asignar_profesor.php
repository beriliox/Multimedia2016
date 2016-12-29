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
?>

  <form class="form-horizontal">
        <fieldset>
          <legend><h3 class="col-lg-offset-5">Asignar Profesor</h3></legend>
          <div class="form-group">
            <label for="inputProfesor" class="col-lg-2 control-label col-lg-offset-2">Profesor</label>
            <div class="col-lg-5">
              <select class="form-control" id="inputProfesor_asign">
                <option></option>
                <?php
                $consulta=mysql_query("SELECT DISTINCT nombre, id FROM Profesor ORDER BY id",$link);

                while($profesor = mysql_fetch_assoc($consulta)) {
                  echo '<option value="',$profesor['id'],'">'. $profesor['nombre']. '</option>';
                }
                 ?>

              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="inputAsignatura" class="col-lg-2 control-label col-lg-offset-2">Asignatura</label>
            <div class="col-lg-5">
              <select class="form-control" id="inputAsignatura_asign">
                <option></option>
                <?php
                $consulta=mysql_query("SELECT DISTINCT nombre_asign, cod_asign FROM Asignatura",$link);

                while($asignatura = mysql_fetch_assoc($consulta)) {
                  echo '<option value="',$asignatura['cod_asign'],'">'. $asignatura['nombre_asign']. '</option>';
                }
                 ?>

              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-10 col-lg-offset-4">
              <button type="reset" class="btn btn-default">Cancelar</button>
              <a class="asignar_profesor btn btn-primary">Asignar</a>
            </div>
          </div>
        </fieldset>
      </form>


<?php include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/html/overall/footer.php'); ?>
