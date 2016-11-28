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
<legend><h3 class="col-lg-offset-5">Listado de Carreras</h3></legend>

<div class="row">
    <div class="col-lg-4 col-lg-offset-4">
        <div class="input-group">
              <input type="text" class="form-control" placeholder="Busca Carrera por Cod. o Nombre o Coordinador" id="bs-prod_car">
              <span class="input-group-btn">
                <a class="buscar_carreras btn btn-default"><i class="fa fa-search" aria-hidden="true"></i></a>
              </span>
        </div>
      </div>
</div>
</br>

<div class="table-responsive">
<table class="table">
  <thead class="thead-inverse">
    <tr class="oculto">
      <th>Cod. Carrera</th>
      <th>Nombre Carrera</th>
      <th>Coordinador</th>
      <?php

        if(isset($_SESSION['app_id']) or isset($_SESSION['app_id_coord'])) { //admin Y Coord

          echo '<th>Acción</th>';

        }
      ?>
    </tr>
  </thead>
  <tbody>
    <div id="agrega-registros_carreras"></div>

    <?php

    include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/core/models/coneccion.php');

    $consulta=mysql_query("SELECT a.id_carrera, a.nombre_carrera, b.nombre, b.apellidop
                           FROM Carrera a, Coordinador b
                           WHERE a.id_coordinador=b.id",$link);

    while($carreras = mysql_fetch_assoc($consulta)) {
    #while($carreras = $resultado->fetch_array(MYSQLI_BOTH)) {
      echo '<tr class="oculto">';
      echo '<td>' . $carreras['id_carrera']. '</td>';
      echo '<td>' . $carreras['nombre_carrera']. '</td>';
      echo '<td>' . $carreras['nombre']. ' ' . $carreras['apellidop'] .'</td>';
        if(isset($_SESSION['app_id']) or isset($_SESSION['app_id_coord'])) { //admin y Coord
          echo '<td>' . '<a id="',$carreras['id_carrera'],'" class="update_carreras btn btn-success"><i class="fa fa-repeat"></i> Actualizar </a>' . '</td>';
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
