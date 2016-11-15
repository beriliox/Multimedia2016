<?php include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/html/overall/header.php'); ?>

<body>


<?php include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/html/overall/topnav.php'); ?>
<legend><h3 class="col-lg-offset-5">Listado de Alumnos</h3></legend>
<div class="table-responsive">
<table class="table">
  <thead class="thead-inverse">
    <tr>
      <th>Nombres</th>
      <th>Apellido Paterno</th>
      <th>Apellido Materno</th>
      <th>Rut</th>
      <th>Email</th>
      <th>Dirección</th>
      <th>Ciudad</th>
      <th>Acción</th>
    </tr>
  </thead>
  <tbody>
    <?php

    include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/config/config.php');

    $consulta=mysql_query("SELECT * FROM Alumno",$link);

    while($alumnos = mysql_fetch_assoc($consulta)) {
    #while($alumnos = $resultado->fetch_array(MYSQLI_BOTH)) {
      echo '<tr>';
      echo '<td>' . $alumnos['nombre']. '</td>';
      echo '<td>' . $alumnos['apellidop']. '</td>';
      echo '<td>' . $alumnos['apellidom']. '</td>';
      echo '<td>' . $alumnos['rut']. '-' .$alumnos['dv'] .'</td>';
      echo '<td>' . $alumnos['email']. '</td>';
      echo '<td>' . $alumnos['direccion']. '</td>';
      echo '<td>' . $alumnos['ciudad']. '</td>';
      echo '<td>' . '<a id="',$alumnos['rut'],'" class="update btn btn-success"><i class="fa fa-repeat"></i> Actualizar </a>' . '</td>';
      echo '</tr>';

    }

    ?>

  </tbody>
</table>
</div>
<hr>


<?php include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/html/overall/footer.php'); ?>

</body>
</html>
