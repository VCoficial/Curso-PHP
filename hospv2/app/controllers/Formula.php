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
            //die(var_dump($data));
            $resultado = $this->formulaModel->add($data);
            if ($resultado) {
                $numFormula = $this->formulaModel->getLast();
                $this->detalleFormulaModel->add($data, $numFormula);
                echo json_encode('insercion Exitosa');
            } else {
                //die('no funciona !');
                echo json_encode('Error: No es posible crear la formula.');
            }
        } else {
            die('Debes enviar la info desde un formulario XXXXX');
        };


        /* insertar($idproveedor,$idusuario,$tipo_comprobante,$serie_comprobante,$num_comprobante,$fecha_hora,$impuesto,$total_compra,$idarticulo,$cantidad,$precio_compra,$precio_venta)

  
    $num_elementos=0;
    $sw=true;

    while ($num_elementos < count($idarticulo))
    {
    $sql_detalle = "INSERT INTO detalle_ingreso(idingreso, idarticulo,cantidad,precio_compra,precio_venta) VALUES ('$idingresonew', '$idarticulo[$num_elementos]','$cantidad[$num_elementos]','$precio_compra[$num_elementos]','$precio_venta[$num_elementos]')";
    ejecutarConsulta($sql_detalle) or $sw = false;
    $num_elementos=$num_elementos + 1;
    }

    return $sw; */
    }
}
