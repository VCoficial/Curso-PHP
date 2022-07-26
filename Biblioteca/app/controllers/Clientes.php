<?php

class Clientes extends Controller
{
    public function __construct()
    {
    }
    
    public function index()
    {
        $data = [];
        $this->renderView('secciones/clientes', $data);
    }
}
