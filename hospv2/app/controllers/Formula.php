<?php


class Formula extends Controller
{

    public function __construct()
    {
        //configuramos el modelo correspondiente a este controlador
        $this->medicoModel = $this->getModel('MedicoModel');
    }
    public function index()
    {

        $data = [];
        $this->renderView('formula/formula', $data);
    }
}
