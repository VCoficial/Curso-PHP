<?php
//Cargamos las librerias Base
require_once 'config/config.php'; 

//TODO: corregir este codigo con auto carga

//Carga de las clases de forma tradicional
/* require_once 'libs/Core.php'; //rutas o enrutador del framework
require_once 'libs/Controller.php'; //odm del framework
require_once 'libs/dbase.php'; //controlador base */

spl_autoload_register(function($nombreClase){
    require_once 'libs/'.$nombreClase.'.php';
});