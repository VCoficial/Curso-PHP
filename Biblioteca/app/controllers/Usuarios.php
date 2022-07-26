<?php

class Usuarios extends Controller
{
    public $data = [];
    public function __construct()
    {
        //Configuramos el modelo correspondiente a este controlador
        //$this->pacienteModel = $this->getModel('PacienteModel');

        $this->menu = $this->getModel('UsuarioModel');

    }
    public function index()
    {


        $this->data = $this->menu->traerUsuarios();


        //$data = $this->pacienteModel->listar();
        $this->renderView('/secciones/usuarios', $this->data);
    }

    public function InsertarUsuarios(){
        $this->data = $this->menu->InsertarUsuarios();
    }

    



}
