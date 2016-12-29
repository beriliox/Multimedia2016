<?php

$servidor = 'localhost';
$usuario = 'root';
$pass = '';
$bd = 'Concentracion';

$conexion = new mysqli($servidor, $usuario, $pass, $bd);

if ($conexion->connect_errno) {
  echo "ERROR AL CONECTARSE {$conexion->connect_errno}";
}

$link = mysql_connect($servidor, $usuario, $pass)
    or die('No se pudo conectar: ' . mysql_error());
//echo 'Connected successfully';
mysql_select_db($bd) or die('No se pudo seleccionar la base de datos');

$dato = $_GET['dato'];

$consulta=mysql_query("SELECT  al.nombre as nombre_alumno, al.apellidop as apellidop_alumno, al.apellidom,
                                 al.rut, al.dv, car.nombre_carrera, al.promocion,

                                 asign.nombre_asign,

                                 ins.id_inscripcion, ins.periodo, ins.oportunidad, ins.nota_final,ins.estado

                        FROM 	   Alumno al, Inscripcion ins, Asignatura asign, Carrera car

                        WHERE 	 al.rut=ins.rut AND ins.cod_asign=asign.cod_asign AND

                                 asign.id_carrera = car.id_carrera AND
                                 al.id_carrera=car.id_carrera AND
                                 al.rut='$dato'

                        ORDER BY ins.periodo DESC",$link);
$registros = mysql_num_rows ($consulta);



  require_once 'Classes/PHPExcel.php';
  $objPHPExcel = new PHPExcel();
  $objPHPExcel->getActiveSheet()->setTitle('Avance Aumnos');

  $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A'.'1', 'Nombres')
            ->setCellValue('B'.'1', 'Apellido Paterno')
            ->setCellValue('C'.'1', 'Apellido Materno')
            ->setCellValue('D'.'1', 'Rut')
            ->setCellValue('E'.'1', 'Carrera')
            ->setCellValue('F'.'1', 'Promocion')
            ->setCellValue('G'.'1', 'Asignatura')
            ->setCellValue('H'.'1', 'Periodo')
            ->setCellValue('I'.'1', 'Oportunidad')
            ->setCellValue('J'.'1', 'Nota Final')
            ->setCellValue('K'.'1', 'Estado');


  $i = 2;
   while ($registro = mysql_fetch_object ($consulta)) {

      $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A'.$i, $registro->nombre_alumno)
            ->setCellValue('B'.$i, $registro->apellidop_alumno)
            ->setCellValue('C'.$i, $registro->apellidom)
            ->setCellValue('D'.$i, $registro->rut . '-' . $registro->dv)
            ->setCellValue('E'.$i, $registro->nombre_carrera)
            ->setCellValue('F'.$i, $registro->promocion)
            ->setCellValue('G'.$i, $registro->nombre_asign)
            ->setCellValue('H'.$i, $registro->periodo)
            ->setCellValue('I'.$i, $registro->oportunidad)
            ->setCellValue('J'.$i, $registro->nota_final)
            ->setCellValue('K'.$i, $registro->estado);


      $i++;

   }

  header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
  header('Content-Disposition: attachment;filename="Alumnos.xls"');
  header('Cache-Control: max-age=0');

  $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel,'Excel5');
  $objWriter->save('php://output');
  exit;
	mysql_close ();

?>
