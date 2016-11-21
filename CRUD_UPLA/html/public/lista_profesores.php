<?php include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/html/overall/header.php'); ?>

<body>


<?php include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/html/overall/topnav.php');
?>
<legend><h3 class="col-lg-offset-5">Listado de Profesores</h3></legend>


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
      <!--<th>URL Imagen</th>-->
      <th>Foto Perfil</th>
      <th>Estado</th>
      <?php

        if(isset($_SESSION['app_id'])) { //admin

          echo '<th>Acción</th>';

        }
      ?>
    </tr>
  </thead>
  <tbody>
    <?php

    include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/core/models/coneccion.php');

    $consulta=mysql_query("SELECT * FROM Profesor",$link);

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
      echo '<td>' . '<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-image="',$alumnos['image_perfil'],'" data-target="#image-gallery_prof">
                        <img class="img-responsive lista" src="',$alumnos['image_perfil'],'" alt="',$alumnos['nombre'],'">
                    </a>' .
           '</td>';
      if(!$alumnos['estado']) {
        echo '<td>' . '<a class="btn btn-default">Sin Estado </a>' . '</td>';
      } elseif($alumnos['estado'] == 'Activo') {
        echo '<td>' . '<a class="btn btn-success"><i class="fa fa-check"></i> Activo </a>' . '</td>';
      } elseif($alumnos['estado'] == 'Suspendido') {
        echo '<td>' . '<a class="btn btn-warning"><i class="fa fa-exclamation-triangle"></i> Suspendido </a>' . '</td>';
      } elseif($alumnos['estado'] == 'Eliminado') {
        echo '<td>' . '<a class="btn btn-danger"><i class="fa fa-times"></i> Eliminado </a>' . '</td>';
      }

        if(isset($_SESSION['app_id'])) { //admin
          echo '<td>' . '<a id="',$alumnos['id'],'" class="update_profesor btn btn-primary"><i class="fa fa-repeat"></i> Actualizar </a>' . '</td>';
        }
        echo '</tr>';

    }

    ?>

  </tbody>
</table>
</div>
<hr></br></br></br></br>
<!-- The Modal -->
<div class="modal fade" id="image-gallery_prof" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title titulo_centro"><span class="glyphicon glyphicon-user"></span> Foto Perfil del Profesor</h4>
            </div>
            <div class="modal-body">
                  <img id="image-gallery-image" class="img-responsive modal_alumno" src="">
            </div>
            <div class="modal-footer">
                <div class="col-md-2">
                  <button type="button" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/html/overall/footer.php'); ?>

</body>
</html>
