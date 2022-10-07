<?php

class Formula extends Controller
{
    public function __construct()
    {
        //configuramos el modelo correspondiente a este controlador
        $this->medicoModel = $this->getModel('MedicoModel');
        $this->itemModel = $this->getModel('ItemModel');
        $this->formulaModel = $this->getModel('FormulaModel');
        $this->detalleFormulaModel = $this->getModel('detalleFormulaModel');
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

    public function guardar()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'fechaFormula' => $_POST['fechaFormula'],
                'idPaciente' => $_POST['idPaciente'],
                'idMedico' => $_POST['idMedico'],
                'idItem' => $_POST["idItem"],
                'cantidad' => $_POST["cantidad"],
                'posologia' => $_POST["posologia"]
            ];
            $resultado = $this->formulaModel->add($data);
            if ($resultado) {
                $numFormula = $this->formulaModel->getLast();
                $respuesta = $this->detalleFormulaModel->add($data, $numFormula);
            }
            if ($respuesta) {
                echo json_encode('Exito: Formula Creada !.');
            } else {
                echo json_encode('Error: No se puede crear la Formula !.');
            }
        }
    }
}
