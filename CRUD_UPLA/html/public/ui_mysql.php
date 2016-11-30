<?php include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/html/overall/header.php'); ?>

<body>


  <?php include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/html/overall/topnav.php'); ?>

<center><h3>Panel de Control Base de Datos</h3></center>
<div class="table-responsive">
<table class="table">
  <thead class="thead-inverse">
    <tr>
      <th>Nombre Tabla</th>
      <?php //$consulta=mysql_query("SHOW FULL TABLES FROM concentracion",$link);

        if(isset($_SESSION['app_id']) or isset($_SESSION['app_id_coord'])) { //admin Y Coord

          echo '<th>Acción</th>';

        }
      ?>
    </tr>
  </thead>
  <tbody>
    <?php

    include('core/models/coneccion.php');

    $consulta=mysql_query("SHOW FULL TABLES FROM concentracion",$link);

    while($tablas = mysql_fetch_assoc($consulta)) {
    #while($alumnos = $resultado->fetch_array(MYSQLI_BOTH)) {
      echo '<tr>';
      echo '<td>' . $tablas['Tables_in_concentracion']. '</td>';


        if(isset($_SESSION['app_id']) or isset($_SESSION['app_id_coord'])) { //admin y Coord

          echo '<td>' . '<a id="',$tablas['Tables_in_concentracion'],'" class="update_tabla btn btn-primary"><i class="fa fa-repeat"></i> Modificar Tabla </a>' . '</td>';
        }
        echo '</tr>';

    }

    ?>

  </tbody>
</table>
<?php
if(isset($_SESSION['app_id']) or isset($_SESSION['app_id_coord'])) {

    echo '<a class="crear_tabla btn btn-primary">Crear Nueva Tabla</a>';
    
}
?>

</div>

<br><br><br><br>

<?php include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/html/overall/footer.php'); ?>
