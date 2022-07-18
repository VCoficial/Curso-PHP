<?php

class Medico extends Controller{
    public function __construct()
    {    
        //Configuramos el modelo correspondiente a este controlador
        $this->medicoModel = $this->getModel('MedicoModel');
    }
    public function index()
    {
        $data= $this->medicoModel->listar();
        $this->renderView('Medico/MedicoInicio', $data);
    }
    public function add(){
        $data=[];
        echo "agregando medico";
    }
    public function delete(){
        echo "borrando medico";
    }
    public function search(){
        echo "buscando medico";
    }
}