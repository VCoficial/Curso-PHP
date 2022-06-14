<?php
/**
*Clase que hereda Vehiculos
*@author Andres;
*@version 1.0 junio de 2022
*@copyright novanet s.a.s
* **/

require_once 'Vehiculo.php';

class Campero extends Vehiculo{
    private int $capacidadCarga;

    public function __construct($numeroRuedas,$placa, $numeroPuertas, $tieneTraccion, $color, $capacidadCarga)
    {
        parent::__construct($numeroRuedas,$placa, $numeroPuertas, $tieneTraccion, $color, $capacidadCarga);
        $this->capacidadCarga=$capacidadCarga;
    }

    public function mostrarCapacidadCarga(){
        return 'la capacidad de carga es : '.$this->capacidadCarga;
    }
}

$willis = new Campero(2,"Vdk89",0,true,"rojo",1000);
echo $willis->mostrarPlaca();
echo '<br>';
echo $willis->mostrarColor();
echo '<br>';
echo $willis->mostrarCapacidadCarga();