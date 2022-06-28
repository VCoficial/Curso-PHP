<?php
/*
Configuracion general del framework
Constantes
*/

//directorio raiz del framework

define('APPROOT', dirname(dirname(__DIR__)));
//echo APPROOT;
//URL DE LA APP
define('URL ROOT', 'htpp://localhost/CURSOPHP/PHP/MVCA/');
//Nombre de la aplicación
define('SITENAME', 'MICROFRAMEWORK MVC');
//Credenciales para la bd
//cammbia a la forma nnueva de hacer constantes
define('DB_HOST', 'localhost'); //ojo: cambiarla en el display
define('DB_USER', 'root'); //usuario de la bd
define('DB_PASSWORD', ''); //password del usuario en la bd
define('DB_NAME', 'hospisoft'); //nombre de la bd
