<?php
/**
*Clase Base del proyecto
*@author Andres;
*@version 1.0 junio de 2022
*@copyright novanet s.a.s
* **/

class Persona{

    public static string $nombre;
    private string $numeroIdentificacion;
    private bool $contraseña;

    public function __construct($nombre, $numeroIdentificacion, $contraseña)
    {   
        self:: $nombre=$nombre;
        $this->contraseña=$contraseña;
        $this->numeroIdentificacion=$numeroIdentificacion;
    }

    //metodo getter de la clase
    //return string
    public function mostrarNombre()
    {
        return "Su nombre es : ".self::$nombre;
    }

    public function mostrarID()
    {
        return "Su numero de id es : ".$this->numeroIdentificacion;
    }
    //return bool
    public function validacion(){
        if($this->contraseña){
            return 'CONTRASEÑA CORRECTA';
        }
        else
        {
            return 'CONTRASEÑA INCORRECTA';
        };
    }
    }

$persona = new Persona("Andres", "1004701817",  true);
echo $persona->mostrarNombre();
echo '<br>';
echo $persona->mostrarID();
echo '<br>';
echo $persona->validacion()

?>