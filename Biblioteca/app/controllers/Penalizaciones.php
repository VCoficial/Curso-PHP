<?php

class Penalizaciones extends Controller
{
    public function __construct()
    {
        $this->penalizaciones = $this->getModel('PenalizacionesModel');
    }

    public function index()
    {
        $data = [];
        $data = $this->penalizaciones->traerPenalizaciones();
        $this->renderView('secciones/penalizaciones', $data);
    }


    public function abrirRegistrarPenalizacion()
    {
        $data = [];
        $this->renderView('Registros/registrarPenalizacion', $data);
    }

    public function buscarPenalizacion()
    {
        $data = [
            'idPrestamo' => $_POST['idPrestamo']
        ];

        $data = $this->penalizaciones->traerDatosPrestamo($data);

        $this->renderView('Registros/registrarPenalizacion', $data);
    }

}