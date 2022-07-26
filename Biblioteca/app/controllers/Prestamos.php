<?php

class Prestamos extends Controller
{
    public function __construct()
    {
        //Configuramos el modelo correspondiente a este controlador
        //$this->pacienteModel = $this->getModel('PacienteModel');
    }
    public function index()
    {
        //$data = $this->pacienteModel->listar();
        $data = [];
        $this->renderView('/secciones/prestamos', $data);
    }
}
