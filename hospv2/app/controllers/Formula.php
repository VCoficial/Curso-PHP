<?php


class Formula extends Controller
{

    public function __construct()
    {
        //configuramos el modelo correspondiente a este controlador
        $this->medicoModel = $this->getModel('MedicoModel');
        $this->itemModel = $this->getModel('ItemModel');
    }
    public function index()
    {

        $data = [];
        $this->renderView('formula/formula', $data);
    }

    public function getItems()
    {
        $items = $this->itemModel->getAll();
        echo json_encode($items);
    }
}
