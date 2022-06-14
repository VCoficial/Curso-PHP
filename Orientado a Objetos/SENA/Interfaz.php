<?php
/**
*Clase que hereda Vehiculos
*@author Andres;
*@version 1.0 junio de 2022
*@copyright novanet s.a.s
* **/

require_once 'Login.php';

class Usuario extends Persona{

    private string $rol;

    public function __construct($rol)
    {
        $this->rol=$rol;
    }

    public function mostrarRol(){
        return 'El rol del usuario es : '.$this->rol;
    }
}

$usuario = new Usuario("Aprendiz");
echo '<br>';
echo $usuario->mostrarRol();