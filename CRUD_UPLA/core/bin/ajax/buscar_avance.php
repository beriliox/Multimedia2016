<?php
include('../../../core/models/coneccion.php');
session_start();

if($_POST['dato'  ]){

  $dato = $_POST['dato'];
  $nota_0 = 0;
  $nota1_2 = 0;
  $nota2_3 = 0;
  $nota3_4 = 0;
  $nota4_5 = 0;
  $nota5_6 = 0;
  $nota6_7 = 0;


$busqueda = mysql_query("SELECT  al.nombre as nombre_alumno, al.apellidop as apellidop_alumno, al.apellidom,
                                 al.rut, al.dv, car.nombre_carrera, al.promocion,

                                 asign.nombre_asign,

                                 ins.id_inscripcion, ins.periodo, ins.oportunidad, ins.nota_final,ins.estado

                        FROM 	   Alumno al, Inscripcion ins, Asignatura asign, Carrera car

                        WHERE 	 al.rut=ins.rut AND ins.cod_asign=asign.cod_asign AND

                                 asign.id_carrera = car.id_carrera AND
                                 al.id_carrera=car.id_carrera AND
                                 al.rut='$dato'

                        ORDER BY ins.periodo DESC");

if(mysql_num_rows($busqueda)>0){
  echo '<div class="table-responsive">
  <table class="table">
    <thead class="thead-inverse">
      <tr>
        <th>Nombre</th>
        <th>Rut</th>
        <th>Carrera</th>
        <th>Promocion</th>
        <th>Asignatura</th>
        <th>Periodo</th>
        <th>Oportunidad</th>
        <th>Nota Final</th>
        <th>Estado</th>';
        if(isset($_SESSION['app_id']) or isset($_SESSION['app_id_coord'])){
          echo '<th>Acción</th>';
        }
      '</tr>
    </thead>
    <tbody>';
}

if(mysql_num_rows($busqueda)>0){
	while($avance = mysql_fetch_array($busqueda)){
    echo '<tr>';
      echo '<td><a href="index.php?view=actualizar&rut=',$avance['rut'],'" target="_blank">' . $avance['nombre_alumno']. ' ' . $avance['apellidop_alumno'] .'</a></td>';
      echo '<td>' . $avance['rut']. '-' .$avance['dv'] .'</td>';
      echo '<td>' . $avance['nombre_carrera']. '</td>';
      echo '<td>' . $avance['promocion']. '</td>';
      echo '<td>' . $avance['nombre_asign']. '</td>';
      echo '<td>' . $avance['periodo']. '</td>';
      echo '<td>' . $avance['oportunidad']. '</td>';
      if (!$avance['nota_final']) {
        echo '<td class="warning">'.$avance['nota_final'].'</td>';

      } elseif($avance['nota_final'] < 4.0) {
        echo '<td style="background-color:#F78181;">'.$avance['nota_final'].'</td>';
      } elseif ($avance['nota_final'] >= 4.0 && $avance['nota_final'] < 5.0){
        echo '<td class="success">'.$avance['nota_final'].'</td>';
      } elseif ($avance['nota_final'] >= 5.0) {
        echo '<td class="info">'.$avance['nota_final'].'</td>';
      }
      echo '<td>' . $avance['estado']. '</td>';
      if(isset($_SESSION['app_id']) or isset($_SESSION['app_id_coord'])){
        echo '<td><a id="',$avance['id_inscripcion'],'" class="update_avance btn btn-success"><span class="glyphicon glyphicon-off"></span> Actualizar</a></td>';
    }

      echo '</tr>';

      if($avance['nota_final'] == 0.0){
        $nota_0++;
      }
      if($avance['nota_final'] > 0 && $avance['nota_final'] <= 1.9){
        $nota1_2++;
      }
      if($avance['nota_final'] <= 2.9 && $avance['nota_final'] > 2){
        $nota2_3++;
      }
      if($avance['nota_final'] <= 3.9 && $avance['nota_final'] > 3){
        $nota3_4++;
      }
      if($avance['nota_final'] <= 4.9 && $avance['nota_final'] > 4){
        $nota4_5++;
      }
      if($avance['nota_final'] <= 5.9 && $avance['nota_final'] > 5){
        $nota5_6++;
      }
      if($avance['nota_final'] <= 7 && $avance['nota_final'] > 6){
        $nota6_7++;
      }
	}
  echo '  </tbody>
  </table>
  </div>
  <script type="text/javascript" src="views/app/js/loader.js"></script>

   <script type="text/javascript">


   google.charts.load("current", {"packages":["corechart"]});

   google.charts.setOnLoadCallback(drawChart);

   google.charts.setOnLoadCallback(barChart);

   function drawChart() {


     var data = new google.visualization.DataTable();
     data.addColumn("string", "Topping");
     data.addColumn("number", "Slices");
     data.addRows([
       ["Aprobados", '.$nota4_5.' + '.$nota5_6.' + '.$nota6_7.'],
       ["Reprobados", '.$nota1_2.' + '.$nota2_3.' + '.$nota3_4.'],
       ["Inscritos", '.$nota_0.'],
     ]);

     var options = {"title":"Gráfico estadistico de aprobacion e inscripción",
                    "width":400,
                    "height":300};

     var chart = new google.visualization.PieChart(document.getElementById("chart_div"));
     chart.draw(data, options);
   }

   function barChart() {


       var data = google.visualization.arrayToDataTable([
      ["Element", "Cantidad  ", { role: "style" }],
      ["1~1.9", "12", "#F78181"],
      ["2~2.9", "18", "#F78181"],
      ["3~3.9", "20", "#F78181"],
      ["4~4.9", "15", "#98e698" ],
      ["5~5.9", "25", "#99ccff"],
      ["6~7", "16", "#99ccff"],
   ]);

   var data = google.visualization.arrayToDataTable([
           ["Element", "Cantidad  ", { role: "style" }],
           ["1~1.9", '.$nota1_2.', "#F78181"],
           ["2~2.9", '.$nota2_3.', "#F78181"],
           ["3~3.9", '.$nota3_4.', "#F78181"],
           ["4~4.9", '.$nota4_5.', "#98e698" ],
           ["5~5.9", '.$nota5_6.', "#99ccff"],
           ["6~7", '.$nota6_7.', "#99ccff"],
        ]);

     var options = {"title":"Gráfico estadistico de notas",
                    "width":400,
                    "height":300};

     var chart = new google.visualization.ColumnChart(document.getElementById("chart_div2"));
     chart.draw(data, options);
   }

  </script>
  <center>
        <h3 class="text-center">Gráficos</h3>
        <div class="container">
            <table class="columns">
              <tr>
                <td><div id="chart_div" style="border: 1px solid #ccc"></div></td>
                <td><div id="chart_div2" style="border: 1px solid #ccc"></div></td>
              </tr>
            </table>
      </div>
  </center>
  <hr>';
}else{
	echo '<div class="alert alert-dismissible alert-danger">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>ERROR!</strong>  No se pudieron encontrar los registros solicitados.
        </div>';
}
}

echo '<script src="views/app/js/js.js"></script>';
