<?php

class Medico extends Controller{

    public function __construct()
    {
        
    }
    public function index()
    {
        $data=[]; //temporal por que no hay
        $this->getView('Medico',$data);
    }
    public function generarFormula(){
        echo 'Este es el metodo generar formula del medico';
    }
    public function otroMetodo(){
        echo 'Este es el otro metodo del otro medico';
    }
}