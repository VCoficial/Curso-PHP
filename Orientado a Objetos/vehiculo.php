<?php
/*
Clase Base del proyecto
@author andres
@version 1.0 junio de 2022
@copyright novanet s.a.s
https://github.com/VCoficial
*/

class Vehiculo{
    //atributos de la clase
    //tenga en cuenta la visibilidad de los atributos
    public int $numeroRuedas;
    private string $placa;
    protected int $numeroPuertas;
    private bool $tieneTraccion; //el vehiculo tiene traccion en las 4 ruedas
    //metodos de la clase
    //metodo magico para crear la clase - metodo constructor
    public function __construct($numeroRuedas,$placa, $numeroPuertas, $tieneTraccion)
    {   
        $this->numeroRuedas=$numeroRuedas;
        $this->placa=$placa;
        $this->numeroPuertas=$numeroPuertas;
        $this->tieneTraccion=$tieneTraccion;
    }

    //metodo getter de la clase
    //return string
    public function mostrarPlaca()
    {
        return "la placa de su vehiculo es : ".$this->placa;
    }

    //Instalar extension "PHP Getters & Setters" - phproberto
}

//fin de la clase
$moto = new Vehiculo(2,"Vdk89",0,true);

echo $moto->mostrarPlaca();
