<?php

class Prestamos extends Controller
{
    public function __construct()
    {
        $this->clientes = $this->getModel('PrestamoModel');
    }
    public function index()
    {
        $data = [];
        $data = $this->clientes->traerPrestamos();
        $this->renderView('/secciones/prestamos', $data);
    }
}
