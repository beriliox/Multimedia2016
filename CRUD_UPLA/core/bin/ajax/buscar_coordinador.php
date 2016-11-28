<?php
include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/core/models/coneccion.php');

$dato = $_POST['dato'];


$busqueda = mysql_query("SELECT * FROM Coordinador WHERE apellidop LIKE '%$dato%' OR rut  LIKE '%$dato%' ORDER BY rut ASC");

if(mysql_num_rows($busqueda)>0){
  echo '<div class="table-responsive">
  <table class="table">
    <thead class="thead-inverse">
      <tr>
        <th>Nombres</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Rut</th>
        <th>Estado</th>
        <th>Ficha del Alumno</th>
      </tr>
    </thead>
    <tbody>';
}

if(mysql_num_rows($busqueda)>0){
	while($alumnos = mysql_fetch_array($busqueda)){
    echo '<tr>';
    echo '<td>' . $alumnos['nombre']. '</td>';
    echo '<td>' . $alumnos['apellidop']. '</td>';
    echo '<td>' . $alumnos['apellidom']. '</td>';
    echo '<td>' . $alumnos['rut']. '-' .$alumnos['dv'] .'</td>';
    if(!$alumnos['estado']) {
      echo '<td>' . '<a class="btn btn-default">Sin Estado </a>' . '</td>';
    } elseif($alumnos['estado'] == 'Activo') {
      echo '<td>' . '<a class="btn btn-success"><i class="fa fa-check"></i> Activo </a>' . '</td>';
    } elseif($alumnos['estado'] == 'Suspendido') {
      echo '<td>' . '<a class="btn btn-warning"><i class="fa fa-exclamation-triangle"></i> Suspendido </a>' . '</td>';
    } elseif($alumnos['estado'] == 'Eliminado') {
      echo '<td>' . '<a class="btn btn-danger"><i class="fa fa-times"></i> Eliminado </a>' . '</td>';
    }

        echo '<td>' . '<a id="',$alumnos['id'],'" class="update_coord btn btn-primary"><i class="fa fa-repeat"></i> Ficha del Coordinador </a>' . '</td>';
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
