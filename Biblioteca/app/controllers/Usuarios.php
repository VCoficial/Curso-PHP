<?php
class Usuarios extends Controller
{
    public function __construct()
    {
        //Configuramos el modelo correspondiente a este controlador
        //$this->pacienteModel = $this->getModel('PacienteModel');

        $this->usuarios = $this->getModel('UsuarioModel');

    }
    public function index()
    {
        $data = [];//corregir mas tarde
        $data = $this->usuarios->traerUsuarios();
        //$data = $this->pacienteModel->listar();
        $this->renderView('/secciones/usuarios', $data);
    }

    public function InsertarUsuarios(){
        $this->usuarios->InsertarUsuarios();

        $data = $this->usuarios->traerUsuarios();
        $this->renderView('/secciones/usuarios', $data);
    }

    
    public function editarUsuario($id)
    {
     
        /*$this->usuarios->actualizarUsuario($id);

        $data = [
            'id' => $usuario->idUsuarios,
            'otro' => $usuario->Nombre1
        ];

        die(var_dump($data));*/


    }



}
