<?php

  include('../../core/models/coneccion.php');


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


		$sentencia = "CREATE TABLE ".$_POST['nombre_tabla']." (".$cuerpo_sentencia.")";
		echo $sentencia;
		$consulta=mysql_query($sentencia,$link);
	}
	else{
		$cuerpo_sentencia = $cuerpo_sentencia." ".$arr_nombrecampos[$i]." ".$arr_tipodatos[$i]." ".$arr_notnull[$i]." ".$arr_primarykey[$i];

		$sentencia = "CREATE TABLE ".$_POST['nombre_tabla']." (".$cuerpo_sentencia.")";
		echo $sentencia;
		$consulta=mysql_query($sentencia,$link);
	}

	header('Location: ../../index.php?view=crear_tabla')

?>
