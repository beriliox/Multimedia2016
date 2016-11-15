<?php
include('/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/config/config.php');

if($_POST['rut']) {
	$rut = $_POST['rut'];
	$rut = mysql_escape_String($rut);
	$sql = "DELETE FROM Alumno WHERE rut='$rut'";
	mysql_query($sql);
}
?>
