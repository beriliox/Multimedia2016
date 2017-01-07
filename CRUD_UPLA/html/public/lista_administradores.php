<?php
  if(isset($_SESSION['app_id']) or isset($_SESSION['app_id_coord']) or isset($_SESSION['app_id_prof'])) {

  } else{
    header('location: ?view=index');

  }
?>
<?php include('html/overall/header.php'); ?>

<body>


<?php include('html/overall/topnav.php');
?>
<legend><h3 style="text-align:center;">Listado de Administradores</h3></legend>

<div class="row">
    <div class="col-lg-4 col-lg-offset-4">
        <div class="input-group">
              <input type="text" class="form-control" placeholder="Busca Administrador por Apellido Paterno o RUT" id="bs-prod_p">
              <span class="input-group-btn">
                <a class="buscar_administrador btn btn-default"><i class="fa fa-search" aria-hidden="true"></i></a>
              </span>
        </div>
      </div>
</div>
</br>

<div class="table-responsive">
<table class="table">
  <thead class="thead-inverse">
    <tr class="oculto">
      <th>Nombres</th>
      <th>Apellido Paterno</th>
      <th>Apellido Materno</th>
      <th>Rut</th>
      <th>Estado</th>
      <th>Ficha del Administrador</th>
    </tr>
  </thead>
  <tbody>
    <?php

    include('core/models/coneccion.php');

    $consulta=mysql_query("SELECT * FROM Administrador",$link);
    echo '<div id="agrega-registros_admin"></div>';

    while($administradores = mysql_fetch_assoc($consulta)) {
    #while($administradores = $resultado->fetch_array(MYSQLI_BOTH)) {
      echo '<tr class="oculto">';
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

        echo '<td>' . '<a id="',$administradores['id'],'" class="update_administrador btn btn-primary"><i class="fa fa-user-circle" aria-hidden="true"></i> Ficha del Administrador </a>' . '</td>';
        echo '</tr>';

    }

    ?>

  </tbody>
</table>
</div>
</br></br></br></br>

<?php include('html/overall/footer.php'); ?>

</body>
</html>
