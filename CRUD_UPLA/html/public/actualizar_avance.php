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



  if($_GET['id_inscripcion']) {
  	$id_inscripcion = $_GET['id_inscripcion'];
  	$id_inscripcion = mysql_escape_String($id_inscripcion);
    $sql=mysql_query("SELECT ins.id_inscripcion, ins.rut, ins.cod_asign, ins.periodo, ins.oportunidad,
                             ins.nota_final, ins.estado, al.nombre, al.apellidop, al.apellidom, al.rut, al.dv,
                             asign.nombre_asign
                      FROM   Inscripcion ins, Alumno al, Asignatura asign
                      WHERE  id_inscripcion = '$id_inscripcion' AND ins.rut = al.rut
                             AND asign.cod_asign=ins.cod_asign", $link);

    while($avance = mysql_fetch_assoc($sql)) {


      echo '<form id="formid" class="form-horizontal">
        <fieldset>
        <div id="ok"></div>
          <center><legend><h3>Detalle Avance Académico</h3></legend></center>
          <div class="form-group">
            <label for="inputApellidoP" class="col-lg-2 control-label col-lg-offset-2">Alumno</label>
            <div class="col-lg-5">
              <input type="text" class="form-control" id="inputNombres_avance" placeholder="Nombre Alumno" maxlength="20" value="',$avance['nombre'],'" disabled="disabled">
            </div>
          </div>
          <div class="form-group">
            <label for="inputApellidoP" class="col-lg-2 control-label col-lg-offset-2">Apellido Paterno</label>
            <div class="col-lg-5">
              <input type="text" class="form-control" id="inputApellidoP_avance" placeholder="Apellido Paterno" maxlength="20" value="',$avance['apellidop'],'" disabled="disabled">
            </div>
          </div>
          <div class="form-group">
            <label for="inputApellidoP" class="col-lg-2 control-label col-lg-offset-2">Apellido Materno</label>
            <div class="col-lg-5">
              <input type="text" class="form-control" id="inputApellidoP_avance" placeholder="Apellido Materno" maxlength="20" value="',$avance['apellidom'],'" disabled="disabled">
            </div>
          </div>
          <label for="inputApellidoP" class="col-lg-2 control-label col-lg-offset-2">RUT</label>
          <div class="form-group">
            <div class="col-lg-4">
              <input type="text" class="form-control" id="inputApellidoP_avance" placeholder="RUT" value="',$avance['rut'],'" disabled="disabled">
            </div>
            <div class="col-lg-1">
              <input type="text" class="form-control" id="inputApellidoP_avance" placeholder="Dig. Ver." value="',$avance['dv'],'" disabled="disabled">
            </div>
          </div>
          <div class="form-group">
            <label for="inputCorreo" class="col-lg-2 control-label col-lg-offset-2">Asignatura</label>
            <div class="col-lg-5">
              <select class="form-control" id="inputAsignatura_avance" disabled="disabled">

              <option value="',$avance['cod_asign'],'">'. $avance['nombre_asign']. '</option>';

              $consulta=mysql_query("SELECT cod_asign, nombre_asign FROM Asignatura",$link);

              while($asignatura = mysql_fetch_assoc($consulta)) {
                if(($avance['cod_asign']!=$asignatura['cod_asign']) and $asignatura['cod_asign']!= ''){
                  echo '<option value="',$asignatura['cod_asign'],'">'. $asignatura['nombre_asign']. '</option>';
                }
              }

              echo '</select>
            </div>
          </div>
          <div class="form-group">
            <label for="inputApellidoP" class="col-lg-2 control-label col-lg-offset-2">Periodo</label>
            <div class="col-lg-5">
              <input type="text" class="form-control" id="inputApellidoP_avance" placeholder="Periodo" value="',$avance['periodo'],'" disabled="disabled">
            </div>
          </div>
          <div class="form-group">
            <label for="inputApellidoM" class="col-lg-2 control-label col-lg-offset-2">Oportunidad</label>
            <div class="col-lg-5">
              <input type="text" class="form-control" id="inputApellidoM_avance" placeholder="Oportunidad" value="',$avance['oportunidad'],'" disabled="disabled">
            </div>
          </div>
          <div class="form-group">
            <label for="inputApellidoM" class="col-lg-2 control-label col-lg-offset-2">Nota Final</label>
            <div class="col-lg-5">
              <input type="text" class="form-control" id="inputNotaFinal_avance" placeholder="Nota Final" value="',$avance['nota_final'],'">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEstado" class="col-lg-2 control-label col-lg-offset-2">Estado</label>
            <div class="col-lg-5">
              <select class="form-control" id="inputEstado_avance">';

              echo '<option>'. $avance['estado']. '</option>';

              $consulta=mysql_query("SELECT DISTINCT estado FROM Inscripcion",$link);

              while($estado = mysql_fetch_assoc($consulta)) {
                if(($avance['estado']!=$estado['estado']) and $estado['estado']!= ''){
                  echo '<option>'. $estado['estado']. '</option>';
                }
              }

              echo '</select>
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-10 col-lg-offset-4">
              <a class="btn btn-primary" href="?view=inscripcion_alumno">Avance Académico</a>';
                echo '<a id="',$avance['id_inscripcion'],'" class="update_c_avance btn btn-success col-lg-offset-1 col-md-offset-1 col-xs-offset-1"><span class="glyphicon glyphicon-off"></span> Actualizar Datos</a>';
      echo '</div>
          </div>
        </fieldset>
      </form>';
    }
  }
  echo '</br></br></br></br>'
?>

<?php include('html/overall/footer.php'); ?>
