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

    public function mostrarPlaca()
    {

    }

    //Instalar extension "PHP Getters & Setters" - phproberto
}

//fin de la clase
$suzuki = new Vehiculo(4,"Vdk89",2,true);
$mazda3 = new Vehiculo(4,"Seta",4,false);
$bws = new Vehiculo(2,"qteimporta",0,false);

var_dump($mazda3);
