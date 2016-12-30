<?php
include('../../../core/models/coneccion.php');
session_start();

$dato = $_POST['dato'];


$busqueda = mysql_query("SELECT * FROM Asignatura WHERE cod_asign LIKE '%$dato%' OR nombre_asign LIKE '%$dato%' ORDER BY nombre_asign ASC");

if(mysql_num_rows($busqueda)>0){
  echo '<div class="table-responsive">
  <table class="table">
    <thead class="thead-inverse">
      <tr>
      <th>Cod. Asignatura</th>
      <th>Nombre Carrera</th>';

        if(isset($_SESSION['app_id']) or isset($_SESSION['app_id_coord'])) { //admin Y Coord

          echo '<th>Acción</th>';

        }

      echo '</tr>
    </thead>
    <tbody>';
}

if(mysql_num_rows($busqueda)>0){
	while($asignaturas = mysql_fetch_array($busqueda)){
     echo '<tr>';
        echo '<td>' . $asignaturas['cod_asign']. '</td>';
        echo '<td>' . $asignaturas['nombre_asign']. '</td>';
        if(isset($_SESSION['app_id']) or isset($_SESSION['app_id_coord'])) { //admin Y Coord

        echo '<td>' . '<a id="',$asignaturas['cod_asign'],'" class="update_asignaturas btn btn-success"><i class="fa fa-repeat"></i> Actualizar </a>' . '</td>';
        }
     echo '</tr>';
	}
  echo '</tbody>
  </table>
  </div><hr>';
}else{
	echo '<div class="alert alert-dismissible alert-danger">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>ERROR!</strong>  No se pudieron encontrar los registros solicitados.
        </div>';
}
?>
<script src="views/app/js/js.js"></script>
