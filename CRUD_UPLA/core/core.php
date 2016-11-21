<?php

session_start();

#Constantes de la APP
define('HTML_DIR','/Applications/XAMPP/xamppfiles/htdocs/CRUD_UPLA/html/');
define('APP_TITLE','CRUD_UPLA');
define('APP_COPY','Copyright &copy; ' . date('Y',time()) . ' Multimedia Software.');
define('APP_URL','http://localhost/CRUD_UPLA/');



#Estructura
require('core/models/class.Conexion.php');
require('core/bin/functions/Encrypt.php');
require('core/bin/functions/Users.php');
//require('core/bin/functions/LostpassTemplate.php');

$users = Users();

?>
