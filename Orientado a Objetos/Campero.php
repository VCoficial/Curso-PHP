<?php
/**
*Clase que hereda Vehiculos
*@author Andres;
*@version 1.0 junio de 2022
*@copyright novanet s.a.s
* **/

require_once 'Vehiculo.php';

class Campero extends Vehiculo{
}

$willis = new Campero(2,"Vdk89",0,true);
echo $willis->mostrarPlaca();