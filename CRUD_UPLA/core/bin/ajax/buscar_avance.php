<?php
include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/core/models/coneccion.php');

$dato = $_POST['dato'];


$busqueda = mysql_query("SELECT   al.nombre as nombre_alumno, al.apellidop as apellidop_alumno, al.apellidom,
         al.rut, al.dv, car.nombre_carrera, al.promocion,

         asign.nombre_asign,

         prof.nombre as nombre_profesor, prof.apellidop as apellidop_profesor,


         ins.periodo, ins.oportunidad, ins.nota_final,ins.estado

FROM 	   Alumno al, Inscripcion ins, Asignatura asign, Carrera car, Coordinador coord,
         Profesor prof, Prof_Asignatura prof_asign

WHERE 	 al.rut=ins.rut AND ins.cod_asign=asign.cod_asign AND
         asign.cod_asign=prof_asign.cod_asign AND prof_asign.id_profesor=prof.id AND

         asign.id_carrera = car.id_carrera AND
         al.id_carrera=car.id_carrera AND
         car.id_coordinador=coord.id
         AND al.rut LIKE '%$dato%'

ORDER BY ins.periodo DESC");

if(mysql_num_rows($busqueda)>0){
  echo '<div class="table-responsive">
  <table class="table">
    <thead class="thead-inverse">
      <tr>
        <th>Nombres</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Rut</th>
        <th>Carrera</th>
        <th>Promocion</th>
        <th>Asignatura</th>
        <th>Profesor</th>
        <th>Periodo</th>
        <th>Oportunidad</th>
        <th>Nota Final</th>
        <th>Estado</th>
      </tr>
    </thead>
    <tbody>';
}

if(mysql_num_rows($busqueda)>0){
	while($avance = mysql_fetch_array($busqueda)){
    echo '<tr>';
      echo '<td>' . $avance['nombre_alumno']. '</td>';
      echo '<td>' . $avance['apellidop_alumno']. '</td>';
      echo '<td>' . $avance['apellidom']. '</td>';
      echo '<td>' . $avance['rut']. '-' .$avance['dv'] .'</td>';
      echo '<td>' . $avance['nombre_carrera']. '</td>';
      echo '<td>' . $avance['promocion']. '</td>';
      echo '<td>' . $avance['nombre_asign']. '</td>';
      echo '<td>' . $avance['nombre_profesor']. ' ' .$avance['apellidop_profesor'] . '</td>';
      echo '<td>' . $avance['periodo']. '</td>';
      echo '<td>' . $avance['oportunidad']. '</td>';
      if (!$avance['nota_final']) {
        echo '<td>'.$avance['nota_final'].'</td>';

      } elseif($avance['nota_final'] < 4.0) {
        echo '<td style="background-color:#F78181;">'.$avance['nota_final'].'</td>';
      } elseif ($avance['nota_final'] >= 4.0 && $avance['nota_final'] < 5.0){
        echo '<td class="success">'.$avance['nota_final'].'</td>';
      } elseif ($avance['nota_final'] >= 5.0) {
        echo '<td class="info">'.$avance['nota_final'].'</td>';
      }
      echo '<td>' . $avance['estado']. '</td>';
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
?>
<script src="http://localhost/CRUD_UPLA/views/app/js/js.js"></script>
