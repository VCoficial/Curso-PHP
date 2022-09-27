<?php
//modelo correspondiente a cada controlador
class detalleFormulaModel
{

    private $db;

    public function __construct()
    {
        $this->db = new Dbase;
    }


    //retorna todos los registros
    public function getAll()
    {
        $this->db->query("SELECT * FROM detalleformula");
        $resultSet = $this->db->getAll();
        return $resultSet;
    }


    public function add($data, $numFormula)
    {
        $numeroElementos = 0;
        while ($$numeroElementos < $this->db->rowCount($data['idItem'])) {
            $this->db->query("INSERT INTO detalleformula(cantidad,posologia,consecutivoFormula, idItem) VALUES ('" . $data['cantidad'] . "','" . $data['posologia'] . "',$numFormula,'" . $data['idItem'] . "')");
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
            $numeroFilas = $numeroFilas + 1;
        }
    }
}
