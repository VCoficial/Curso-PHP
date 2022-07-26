<?php
class Libros extends Controller
{
    public function __construct()
    {
    }
    
    public function index()
    {
        $data = [];
        $this->renderView('secciones/libros', $data);
    }
}
