<?php
class Libros extends Controller
{
    public function __construct()
    {
        $this->libros = $this->getModel('LibrosModel');
    }
    
    public function index()
    {
        $data = [];
        $data = $this->libros->traerLibros();
        $this->renderView('secciones/libros', $data);
    }


}
