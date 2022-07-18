<?php

class Paciente extends Controller{
    public function __construct()
    {    
        //Configuramos el modelo correspondiente a este controlador
        $this->pacienteModel = $this->getModel('PacienteModel');
    }
    public function index()
    {
        $data= $this->pacienteModel->listar();
        $this->renderView('Paciente/PacienteInicio', $data);
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