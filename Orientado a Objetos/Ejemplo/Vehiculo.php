<?php
/**
*Clase Base del proyecto
*@author Andres;
*@version 1.0 junio de 2022
*@copyright novanet s.a.s
* **/

class Vehiculo{
    //atributos de la clase
    //tenga en cuenta la visibilidad de los atributos
    public int $numeroRuedas;
    private string $placa;
    protected int $numeroPuertas;
    private bool $tieneTraccion; //el vehiculo tiene traccion en las 4 ruedas
    public static string $color;
    //metodos de la clase
    //metodo magico para crear la clase - metodo constructor
    public function __construct($numeroRuedas,$placa, $numeroPuertas, $tieneTraccion, $color)
    {   
        $this->numeroRuedas=$numeroRuedas;
        $this->placa=$placa;
        $this->numeroPuertas=$numeroPuertas;
        $this->tieneTraccion=$tieneTraccion;
        self:: $color=$color;
    }

    //metodo getter de la clase
    //return string
    public function mostrarPlaca()
    {
        return "la placa de su vehiculo es : ".$this->placa;
    }
    //return bool
    public function mostrarEstadoTraccion(){
        if($this->tieneTraccion){
            return 'SI TIENE TRACCION';
        }
        else
        {
            return 'NO TIENE TRACCION';
        };
    }

    public function mostrarColor()
        {
            return "el color de su vehiculo es : ".self::$color;
        }
            //Instalar extension "PHP Getters & Setters" - phproberto
    }

$moto = new Vehiculo(2,"Vdk89",0,true, "rojo"); //instanciar la clase
echo $moto->mostrarPlaca();
echo '<br>';
echo $moto->mostrarEstadoTraccion();
echo '<br>';
echo $moto->mostrarColor();