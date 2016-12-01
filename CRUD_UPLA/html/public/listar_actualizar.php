<?php
  if(isset($_SESSION['app_id']) or isset($_SESSION['app_id_coord']) or isset($_SESSION['app_id_prof'])) {

  } else{
    header('location: ?view=index');

  }
?>
<?php include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/html/overall/header.php'); ?>

<body>


<?php include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/html/overall/topnav.php');
?>
<legend><h3 style="text-align:center;">Listado de Alumnos</h3></legend>

<div class="row">
    <div class="col-lg-4 col-lg-offset-4">
        <div class="input-group">
              <input type="text" class="form-control" placeholder="Busca Alumno por Apellido Paterno o RUT" id="bs-prod">
              <span class="input-group-btn">
                <a class="buscar_alumno btn btn-default"><i class="fa fa-search" aria-hidden="true"></i></a>
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
      <th>Ficha del Alumno</th>

    </tr>
  </thead>
  <tbody>
    <div id="agrega-registros"></div>
    <?php

    include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/core/models/coneccion.php');

    $consulta=mysql_query("SELECT a.nombre, a.apellidop, a.apellidom, a.rut, a.dv, a.email, c.nombre_carrera,
                                  a.promocion, a.estado
                           FROM Alumno a, Carrera c
                           WHERE a.id_carrera=c.id_carrera AND a.rut != '10206103' AND a.rut != '10475515' ORDER BY a.apellidop",$link);


            while($alumnos = mysql_fetch_assoc($consulta)) {
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

                  echo '<td>' . '<a id="',$alumnos['rut'],'" class="update btn btn-primary"><i class="fa fa-user-circle" aria-hidden="true"></i> Ficha del Alumno </a>' . '</td>';
                echo '</tr>';

            }

    ?>

  </tbody>
</table>
</div></br>
<center>
    <ul class="pagination" id="pagination"></ul>
</center>
</br></br></br></br>
<?php include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/html/overall/footer.php'); ?>

</body>
</html>
