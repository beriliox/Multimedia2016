<?php

session_start();

#Estructura
require('core/models/class.Conexion.php');
require('core/bin/functions/Encrypt.php');
require('core/bin/functions/Users.php');
require('FPDF/fpdf.php');

//require('core/bin/functions/LostpassTemplate.php');

$users = Users();

?>
