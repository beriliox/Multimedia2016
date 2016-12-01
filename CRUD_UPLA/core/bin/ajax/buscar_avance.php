<?php
include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/core/models/coneccion.php');
session_start();

if($_POST['dato']){

  $dato = $_POST['dato'];


$busqueda = mysql_query("SELECT  al.nombre as nombre_alumno, al.apellidop as apellidop_alumno, al.apellidom,
                                 al.rut, al.dv, car.nombre_carrera, al.promocion,

                                 asign.nombre_asign,

                                 ins.id_inscripcion, ins.periodo, ins.oportunidad, ins.nota_final,ins.estado

                        FROM 	   Alumno al, Inscripcion ins, Asignatura asign, Carrera car

                        WHERE 	 al.rut=ins.rut AND ins.cod_asign=asign.cod_asign AND

                                 asign.id_carrera = car.id_carrera AND
                                 al.id_carrera=car.id_carrera AND
                                 al.rut='$dato'

                        ORDER BY ins.periodo DESC");

if(mysql_num_rows($busqueda)>0){
  echo '<div class="table-responsive">
  <table class="table">
    <thead class="thead-inverse">
      <tr>
        <th>Nombre</th>
        <th>Rut</th>
        <th>Carrera</th>
        <th>Promocion</th>
        <th>Asignatura</th>
        <th>Periodo</th>
        <th>Oportunidad</th>
        <th>Nota Final</th>
        <th>Estado</th>';
        if(isset($_SESSION['app_id']) or isset($_SESSION['app_id_coord'])){
          echo '<th>Acción</th>';
        }
      '</tr>
    </thead>
    <tbody>';
}

if(mysql_num_rows($busqueda)>0){
	while($avance = mysql_fetch_array($busqueda)){
    echo '<tr>';
      echo '<td><a href="http://localhost/CRUD_UPLA/index.php?view=actualizar&rut=',$avance['rut'],'" target="_blank">' . $avance['nombre_alumno']. ' ' . $avance['apellidop_alumno'] .'</a></td>';
      echo '<td>' . $avance['rut']. '-' .$avance['dv'] .'</td>';
      echo '<td>' . $avance['nombre_carrera']. '</td>';
      echo '<td>' . $avance['promocion']. '</td>';
      echo '<td>' . $avance['nombre_asign']. '</td>';
      echo '<td>' . $avance['periodo']. '</td>';
      echo '<td>' . $avance['oportunidad']. '</td>';
      if (!$avance['nota_final']) {
        echo '<td class="warning">'.$avance['nota_final'].'</td>';

      } elseif($avance['nota_final'] < 4.0) {
        echo '<td style="background-color:#F78181;">'.$avance['nota_final'].'</td>';
      } elseif ($avance['nota_final'] >= 4.0 && $avance['nota_final'] < 5.0){
        echo '<td class="success">'.$avance['nota_final'].'</td>';
      } elseif ($avance['nota_final'] >= 5.0) {
        echo '<td class="info">'.$avance['nota_final'].'</td>';
      }
      echo '<td>' . $avance['estado']. '</td>';
      if(isset($_SESSION['app_id']) or isset($_SESSION['app_id_coord'])){
        echo '<td><a id="',$avance['id_inscripcion'],'" class="update_avance btn btn-success"><span class="glyphicon glyphicon-off"></span> Actualizar</a></td>';
    }

    echo '</tr>';
	}
  echo '  </tbody>
  </table>
  </div><hr>';
}else{
	echo '<div class="alert alert-dismissible alert-danger">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>ERROR!</strong>  No se pudieron encontrar los registros solicitados.
        </div>';
}
}
?>
<script src="http://localhost/CRUD_UPLA/views/app/js/js.js"></script>
