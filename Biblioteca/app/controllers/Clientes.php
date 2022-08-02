<?php

class Clientes extends Controller
{
    public function __construct()
    {
        $this->clientes = $this->getModel('ClientesModel');
    }
    
    public function index()
    {
        $data = [];
        $data = $this->clientes->traerClientes();
        $this->renderView('secciones/clientes', $data);
    }

    public function InsertarClientes(){
        $this->clientes->InsertarClientes();

        $data = $this->clientes->traerClientes();
        $this->renderView('secciones/clientes', $data);
    }
    public function ImprimirListado()
    {
        $data = $this->clientes->traerClientes();
        $this->renderView('secciones/listadoCliente', $data);
    }
}
