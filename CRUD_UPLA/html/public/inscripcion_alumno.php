<?php include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/html/overall/header.php'); ?>

<body>

<?php include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/html/overall/topnav.php'); ?>
  <legend><h3 class="col-lg-offset-5">Inscripción Alumnos</h3></legend>
<div class="table-responsive">
<table class="table">
  <thead class="thead-inverse">
    <tr>
      <th>Nombres</th>
      <th>Apellido Paterno</th>
      <th>Apellido Materno</th>
      <th>Rut</th>
      <th>Carrera</th>
      <th>Promocion</th>
      <th>Asignatura</th>
      <th>Profesor</th>
      <th>Periodo</th>
      <th>Oportunidad</th>
      <th>Nota Final</th>
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

    $consulta=mysql_query("SELECT  al.nombre as nombre_alumno, al.apellidop as apellidop_alumno, al.apellidom, al.rut, al.dv, car.nombre_carrera, al.promocion, asign.nombre_asign,
                                    prof.nombre as nombre_profesor, prof.apellidop as apellidop_profesor, ins.periodo, ins.oportunidad, ins.nota_final, ins.estado
                            FROM Alumno al, Inscripcion ins, Asignatura asign, Carrera car, Coordinador coord, Prof_Carrera prof_car, Profesor prof,
                                 Prof_Asignatura prof_asign
                            WHERE al.rut=ins.rut AND ins.cod_asign=asign.cod_asign AND prof_asign.cod_asign=asign.cod_asign AND
                                  prof_car.id_profesor=prof.id AND prof_car.id_profesor=prof.id AND prof_car.id_carrera=car.id_carrera AND al.id_carrera=car.id_carrera
                            AND car.id_coordinador=coord.id",$link);

    while($alumnos = mysql_fetch_assoc($consulta)) {
    #while($alumnos = $resultado->fetch_array(MYSQLI_BOTH)) {
      echo '<tr>';
      echo '<td>' . $alumnos['nombre_alumno']. '</td>';
      echo '<td>' . $alumnos['apellidop_alumno']. '</td>';
      echo '<td>' . $alumnos['apellidom']. '</td>';
      echo '<td>' . $alumnos['rut']. '-' .$alumnos['dv'] .'</td>';
      echo '<td>' . $alumnos['nombre_carrera']. '</td>';
      echo '<td>' . $alumnos['promocion']. '</td>';
      echo '<td>' . $alumnos['nombre_asign']. '</td>';
      echo '<td>' . $alumnos['nombre_profesor']. ' ' .$alumnos['apellidop_profesor'] . '</td>';
      echo '<td>' . $alumnos['periodo']. '</td>';
      echo '<td>' . $alumnos['oportunidad']. '</td>';
      echo '<td>' . $alumnos['nota_final']. '</td>';
      echo '<td>' . $alumnos['estado']. '</td>';



      if(isset($_SESSION['app_id'])) { //admin

        echo '<td>' . '<a id="',$alumnos['rut'],'" class="update btn btn-success"><i class="fa fa-repeat"></i> Actualizar </a>' . '</td>';

      }
      echo '</tr>';

    }

    ?>

  </tbody>
</table>
</div>
<hr></br></br></br></br>


<?php include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/html/overall/footer.php'); ?>

</body>
</html>
