<?php
include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/core/models/coneccion.php');
session_start();

$dato = $_POST['dato'];


$busqueda = mysql_query("SELECT a.id_carrera, a.nombre_carrera, b.nombre, b.apellidop
                         FROM Carrera a, Coordinador b
                         WHERE a.id_coordinador=b.id AND (a.id_carrera LIKE '%$dato%' OR a.nombre_carrera  LIKE '%$dato%'
                                                           OR b.nombre LIKE '%$dato%') ORDER BY a.nombre_carrera ASC");

if(mysql_num_rows($busqueda)>0){
  echo '<div class="table-responsive">
  <table class="table">
    <thead class="thead-inverse">
      <tr>
        <th>Cod. Carrera</th>
        <th>Nombre Carrera</th>
        <th>Coordinador</th>';

        if(isset($_SESSION['app_id']) or isset($_SESSION['app_id_coord'])) { //admin Y Coord

          echo '<th>Acción</th>';

        }

      echo '</tr>
    </thead>
    <tbody>';
}

if(mysql_num_rows($busqueda)>0){
	while($carreras = mysql_fetch_array($busqueda)){
    echo '<tr>';
        echo '<td>' . $carreras['id_carrera']. '</td>';
        echo '<td>' . $carreras['nombre_carrera']. '</td>';
        echo '<td>' . $carreras['nombre']. ' ' .$carreras['apellidop'].'</td>';
        if(isset($_SESSION['app_id']) or isset($_SESSION['app_id_coord'])) { //admin Y Coord

        echo '<td>' . '<a id="',$carreras['id_carrera'],'" class="update_carreras btn btn-success"><i class="fa fa-repeat"></i> Actualizar </a>' . '</td>';
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
?>
<script src="http://localhost/CRUD_UPLA/views/app/js/js.js"></script>
