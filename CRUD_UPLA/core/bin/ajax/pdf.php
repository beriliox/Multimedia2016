<?php

include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/core/models/coneccion.php');
include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/FPDF/fpdf.php');


$dato = $_GET['dato'];

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 10);
$pdf->Image('http://www.upla.cl/normasgraficas/wp-content/uploads/2016/01/cropped-logo_upla-1.png' , 10 ,8, 70 , 20,'PNG');
$pdf->Cell(85, 10, '', 0);
$pdf->Cell(65, 10, 'CRUD UPLA', 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(40, 10, 'Fecha:  '.date('d-m-Y').'', 0);
$pdf->Ln(25);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(60, 8, '', 0);
$pdf->Cell(150, 20, 'AVANCE ACADEMICO DEL ALUMNO', 0);
$pdf->Ln(10);
$pdf->Cell(60, 8, '', 0);
$pdf->Ln(23);
$pdf->SetFont('Arial', 'B', 6);
$pdf->Cell(17, 8, 'Nombres', 0);
$pdf->Cell(14, 8, 'A. Paterno', 0);
$pdf->Cell(14, 8, 'A. Paterno', 0);
$pdf->Cell(13, 8, 'RUT', 0);
$pdf->Cell(28, 8, 'Carrera', 0);
$pdf->Cell(14, 8, 'Promocion', 0);
$pdf->Cell(45, 8, 'Asignatura', 0);
$pdf->Cell(16, 8, 'Periodo', 0);
$pdf->Cell(15, 8, 'Opor.', 0);
$pdf->Cell(16, 8, 'Nota F.', 0);
$pdf->Cell(13, 8, 'Est.', 0);


$pdf->Ln(8);
$pdf->SetFont('Arial', '', 5);
//CONSULTA
$alumnos = mysql_query("SELECT   al.nombre as nombre_alumno, al.apellidop as apellidop_alumno, al.apellidom,
         al.rut, al.dv, car.nombre_carrera, al.promocion,

         asign.nombre_asign,

         ins.periodo, ins.oportunidad, ins.nota_final,ins.estado

FROM 	   Alumno al, Inscripcion ins, Asignatura asign, Carrera car

WHERE 	 al.rut=ins.rut AND ins.cod_asign=asign.cod_asign AND

         asign.id_carrera = car.id_carrera AND
         al.id_carrera=car.id_carrera AND
         al.rut='$dato'

ORDER BY ins.periodo DESC");

while($alumno = mysql_fetch_array($alumnos)){
  $pdf->Cell(17, 8, $alumno['nombre_alumno'], 0);
  $pdf->Cell(14, 8, $alumno['apellidop_alumno'], 0);
  $pdf->Cell(14, 8, $alumno['apellidom'], 0);
	$pdf->Cell(13, 8, $alumno['rut']. '-'. $alumno['dv']  , 0);
  $pdf->Cell(28, 8, $alumno['nombre_carrera'], 0);
  $pdf->Cell(14, 8, $alumno['promocion'], 0);
  $pdf->Cell(45, 8, $alumno['nombre_asign'], 0);
  $pdf->Cell(16, 8, $alumno['periodo'], 0);
  $pdf->Cell(15, 8, $alumno['oportunidad'], 0);
  $pdf->Cell(16, 8, $alumno['nota_final'], 0);
  $pdf->Cell(13, 8, $alumno['estado'], 0);


	$pdf->Ln(8);
}

$pdf->Output('Acance_alumno.pdf','D');
?>
