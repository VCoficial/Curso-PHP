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
    public function formadd(){
        $data=[];
        $this->renderView('Medico/MedicoAgregar', $data);
    }
    public function delete(){
        echo "borrando medico";
    }
    public function search(){
        echo "buscando medico";
    }
}