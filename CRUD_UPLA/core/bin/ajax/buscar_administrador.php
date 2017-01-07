<?php
include('../../../core/models/coneccion.php');

$dato = $_POST['dato'];


$busqueda = mysql_query("SELECT *  FROM Administrador WHERE apellidop LIKE '%$dato%' OR rut  LIKE '%$dato%' ORDER BY rut ASC");

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
        <th>Ficha del Administrador</th>

      </tr>
    </thead>
    <tbody>';
}

if(mysql_num_rows($busqueda)>0){
	while($administradores = mysql_fetch_array($busqueda)){
    echo '<tr>';
    echo '<td>' . $administradores['nombre']. '</td>';
    echo '<td>' . $administradores['apellidop']. '</td>';
    echo '<td>' . $administradores['apellidom']. '</td>';
    echo '<td>' . $administradores['rut']. '-' .$administradores['dv'] .'</td>';
    if(!$administradores['estado']) {
      echo '<td>' . '<a class="btn btn-default">Sin Estado </a>' . '</td>';
    } elseif($administradores['estado'] == 'Activo') {
      echo '<td>' . '<a class="btn btn-success"><i class="fa fa-check"></i> Activo </a>' . '</td>';
    } elseif($administradores['estado'] == 'Suspendido') {
      echo '<td>' . '<a class="btn btn-warning"><i class="fa fa-exclamation-triangle"></i> Suspendido </a>' . '</td>';
    } elseif($administradores['estado'] == 'Eliminado') {
      echo '<td>' . '<a class="btn btn-danger"><i class="fa fa-times"></i> Eliminado </a>' . '</td>';
    }

    echo '<td>' . '<a id="',$administradores['id'],'" class="update_profesor btn btn-primary"><i class="fa fa-user-circle" aria-hidden="true"></i> Ficha del Administrador </a>' . '</td>';
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
<script src="views/app/js/js.js"></script>
