<?php
class Libros extends Controller
{
    public $data = [];
    public function __construct()
    {
        $this->libros = $this->getModel('LibrosModel');
    }

    public function index()
    {
        $this->data = $this->libros->traerTodosLosLibros();

        $this->renderView('secciones/libros', $this->data);
    }


    public function InsertarEditorial()
    {

        $this->data = [
            'editorial' => $_POST['editorial']
        ];

        $this->libros->insertarEditorial($this->data);

        $this->abrirRegistrarLibros();
    }

    public function InsertarLibro()
    {

        $this->data = [
            'nomLibro' => $_POST['nombreLibro'],
            'editorial' => $_POST['editorial'],
            'fechaIngreso' => $_POST['fechaIngresoLibro'],
            'nomAutor' => $_POST['NonbreAutor'],
            'fechaPublicacion' => $_POST['fechaPublicacion'],
            'libroCantidad' => $_POST['CantidadIngresadaLibro'],
        ];

        $this->libros->InsertarLibro($this->data);

        $this->renderView('Registros/registrarLibros', $this->data);

    }

    public function buscarLibro()
    {
        $this->data = [];
        $this->data = [
            'buscarLibro' => $_POST['buscarLibro']
        ];

        $this->data = $this->libros->buscarLibro($this->data);
        //var_dump($this->data);
        $this->renderView('busquedas/buscarLibros', $this->data);
    }

    public function abrirBuscarLibro()
    {
        $this->renderView('busquedas/buscarLibros', $this->data);
    }

    public function editarLibro($id)
    {
        $this->data = [];
        $this->data = [
            'id' => $id
        ];

        $buscar = $this->libros->buscarLibroActualizar($this->data);
        $traerEditoriales = $this->libros->traerEditoriales();

        $this->data = array_merge($buscar, $traerEditoriales);

        /*echo "<pre>";
        print_r($this->data);
        echo "<pre>";*/

        $this->renderView('Actualizar/ActualizarLibros', $this->data);
    }

    public function abrirRegistrarLibros()
    {
        $this->data = [];
        $this->data = $this->libros->traerEditoriales();
        $this->renderView('Registros/registrarLibros', $this->data);
    }


    public function actualizarLibro()
    {
        $this->data = [
            'idLibro' => $_POST['idLibro'],
            'nombreLibro' => $_POST['nombreLibro'],
            'editorial' => $_POST['editorial'],
            'fechaIngresoLibro' => $_POST['fechaIngresoLibro'],
            'NonbreAutor' => $_POST['NonbreAutor'],
            'CantidadIngresadaLibro' => $_POST['CantidadIngresadaLibro'],
        ];


        $this->libros->ActualizarLibro($this->data);
        $this->index();
    }
}
