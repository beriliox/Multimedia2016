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
<legend><h3 style="text-align:center;">Listado de Coordinadores</h3></legend>

<div class="row">
    <div class="col-lg-4 col-lg-offset-4">
        <div class="input-group">
              <input type="text" class="form-control" placeholder="Busca Coordinador por Apellido Paterno o RUT" id="bs-prod_c">
              <span class="input-group-btn">
                <a class="buscar_coordinador btn btn-default"><i class="fa fa-search" aria-hidden="true"></i></a>
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
      <th>Carrera</th>
      <th>Estado</th>
      <th>Ficha del Coordinador</th>

    </tr>
  </thead>
  <tbody>
    <?php

    include('core/models/coneccion.php');

    /*$consulta=mysql_query("SELECT c.id, c.nombre, c.apellidop, c.apellidom, c.rut, c.dv, c.email,
                                  c.direccion, c.ciudad, c.image_perfil, c.estado, car.nombre_carrera
                           FROM Coordinador c, Carrera car
                           WHERE car.id_coordinador = c.id",$link);*/


    $consulta=mysql_query("SELECT c.id, c.nombre, c.apellidop, c.apellidom, c.rut, c.dv, c.estado, c.rut, car.nombre_carrera FROM Coordinador c, Carrera car WHERE c.id = car.id_coordinador",$link);

    echo '<div id="agrega-registros_coord"></div>';

    while($alumnos = mysql_fetch_assoc($consulta)) {
    #while($alumnos = $resultado->fetch_array(MYSQLI_BOTH)) {
      echo '<tr class="oculto">';
      echo '<td>' . $alumnos['nombre']. '</td>';
      echo '<td>' . $alumnos['apellidop']. '</td>';
      echo '<td>' . $alumnos['apellidom']. '</td>';
      echo '<td>' . $alumnos['rut']. '-' .$alumnos['dv'] .'</td>';
      echo '<td>' . $alumnos['nombre_carrera']. '</td>';
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

    ?>

  </tbody>
</table>
</div></br></br></br></br>

<?php include('html/overall/footer.php'); ?>

</body>
</html>
