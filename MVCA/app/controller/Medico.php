<?php

class Medico extends Controller{

  
    public function __construct()
    {
        $this->MedicoModel=$this->getModel('MedicoModel');
    }
    public function index()
    {
        $data=$this->MedicoModel->listarMedicos(); 
        $this->getView('Medico',$data);
    }
}