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




	$total_campos = $_POST['total_campos'];

	$arr_nombrecampos = array();
	$arr_tipodatos = array();

	$arr_notnull = array();
	$arr_primarykey = array();
	$sentencia;
	$i = 1;
	while($i <= $total_campos){

		array_push($arr_nombrecampos, $_POST['nombre_campo'.$i]);
		array_push($arr_tipodatos, $_POST['tipo_dato'.$i]);
		if($_POST['null'.$i]=='yes'){
			array_push($arr_notnull, "NOT NULL");
		}
		else{
			array_push($arr_notnull, " ");
		}
		if($_POST['pk'.$i]=='yes'){
			array_push($arr_primarykey, "PRIMARY KEY");
		}else{
			array_push($arr_primarykey," ");
		}

		$i++;

	}


	$i = 0;
	$cuerpo_sentencia="";
	if($total_campos > 1){
		while($i <= $total_campos-2){

	    	$cuerpo_sentencia = $cuerpo_sentencia." ".$arr_nombrecampos[$i]." ".$arr_tipodatos[$i]." ".$arr_notnull[$i]." ".$arr_primarykey[$i].",";
	    	$i++;

		}

		$cuerpo_sentencia = $cuerpo_sentencia." ".$arr_nombrecampos[$i]." ".$arr_tipodatos[$i]." ".$arr_notnull[$i]." ".$arr_primarykey[$i];


		$sentencia = "ALTER TABLE ".$_POST['nombre_tabla']." ADD (".$cuerpo_sentencia.")";
		echo $sentencia;
		$consulta=mysql_query($sentencia,$link);
	}
	else{
		$cuerpo_sentencia = $cuerpo_sentencia." ".$arr_nombrecampos[$i]." ".$arr_tipodatos[$i]."  ".$arr_notnull[$i]." ".$arr_primarykey[$i];

		$sentencia = "ALTER TABLE ".$_POST['nombre_tabla']." ADD (".$cuerpo_sentencia.")";
		echo $sentencia;
		$consulta=mysql_query($sentencia,$link);
	}

	header('Location: http://localhost/CRUD_UPLA/index.php?view=crear_tabla')

?>
