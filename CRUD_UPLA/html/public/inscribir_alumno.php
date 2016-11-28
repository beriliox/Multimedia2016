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
?>

  <form class="form-horizontal">
        <fieldset>
          <legend><h3 class="col-lg-offset-5">Inscribir Alumno</h3></legend>
          <div class="form-group">
            <label for="inputAlumno" class="col-lg-2 control-label col-lg-offset-2">Alumno</label>
            <div class="col-lg-5">
              <select class="form-control" id="inputAlumno_ins" >
                <option></option>
                <?php
                $consulta=mysql_query("SELECT DISTINCT nombre, rut FROM Alumno ORDER BY rut",$link);

                while($alumno = mysql_fetch_assoc($consulta)) {
                  if($alumno['nombre']) {
                    echo '<option value="',$alumno['rut'],'">'. $alumno['nombre']. '</option>';
                  }
                }
                 ?>

              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="inputAsignatura" class="col-lg-2 control-label col-lg-offset-2">Asignatura</label>
            <div class="col-lg-5">
              <select class="form-control" id="inputAsignatura_ins">
                <option></option>
                <?php
                $consulta=mysql_query("SELECT nombre_asign, cod_asign FROM Asignatura",$link);

                while($asignatura = mysql_fetch_assoc($consulta)) {
                  if($asignatura['cod_asign']) {

                  echo '<option value="',$asignatura['cod_asign'],'">'. $asignatura['nombre_asign']. '</option>';
                }
                }
                 ?>

              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="inputPeriodo" class="col-lg-2 control-label col-lg-offset-2">Periodo</label>
            <div class="col-lg-5">
              <select class="form-control" id="inputPeriodo_ins">
                <option></option>
                <option>2016/1</option>
                <option>2016/2</option>
                <option>2017/1</option>
                <option>2017/2</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="inputOportunidad" class="col-lg-2 control-label col-lg-offset-2">Oportunidad</label>
            <div class="col-lg-5">
              <select class="form-control" id="inputOportunidad_ins">
                <option></option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-10 col-lg-offset-4">
              <button type="reset" class="btn btn-default">Cancelar</button>
              <a class="inscribir_alumno btn btn-primary">Inscribir</a>
            </div>
          </div>
        </fieldset>
      </form>


<?php include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/html/overall/footer.php'); ?>
