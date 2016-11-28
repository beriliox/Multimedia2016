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
<legend><h3 class="col-lg-offset-5">Listado de Asignaturas</h3></legend>

<div class="row">
    <div class="col-lg-4 col-lg-offset-4">
        <div class="input-group">
              <input type="text" class="form-control" placeholder="Busca Asignatura por Código. o Nombre" id="bs-prod_asign">
              <span class="input-group-btn">
                <a class="buscar_asignaturas btn btn-default"><i class="fa fa-search" aria-hidden="true"></i></a>
              </span>
        </div>
      </div>
</div>
</br>

<div class="table-responsive">
<table class="table">
  <thead class="thead-inverse">
    <tr class="oculto">
      <th>Cod. Asignatura</th>
      <th>Nombre Asignatura</th>
      <th>Nombre Carrera</th>

      <?php

        if(isset($_SESSION['app_id']) or isset($_SESSION['app_id_coord'])) { //admin Y Coord

          echo '<th>Acción</th>';

        }
      ?>
    </tr>
  </thead>
  <tbody>
    <div id="agrega-registros_asignaturas"></div>

    <?php

    include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/core/models/coneccion.php');

    $consulta=mysql_query("SELECT asign.cod_asign, asign.nombre_asign, car.nombre_carrera
                           FROM Asignatura asign, Carrera car
                           WHERE asign.id_carrera = car.id_carrera",$link);

    while($asignaturas = mysql_fetch_assoc($consulta)) {
    #while($asignaturas = $resultado->fetch_array(MYSQLI_BOTH)) {
      echo '<tr class="oculto">';
            echo '<td>' . $asignaturas['cod_asign']. '</td>';
            echo '<td>' . $asignaturas['nombre_asign']. '</td>';
            echo '<td>' . $asignaturas['nombre_carrera']. '</td>';
          if(isset($_SESSION['app_id']) or isset($_SESSION['app_id_coord'])) { //admin y Coord
            echo '<td>' . '<a id="',$asignaturas['cod_asign'],'" class="update_asignaturas btn btn-success"><i class="fa fa-repeat"></i> Actualizar </a>' . '</td>';
          }
      echo '</tr>';

    }

    ?>

  </tbody>
</table>
</div>
</br></br></br></br>

<?php include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/html/overall/footer.php'); ?>

</body>
</html>
