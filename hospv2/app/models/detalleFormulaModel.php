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
        $numeroFilas = 0;
        while ($numeroFilas < count($data['idItem'])) {
            $this->db->query("INSERT INTO detalleformula(cantidad, posologia,consecutivoFormula,idItem) VALUES (:cantidad,:posologia,:consecutivoFormula,:idItem)");
            //vinculamos las variables del array con los parametros de la consulta
            $this->db->bind(':cantidad', $data['cantidad'][$numeroFilas]);
            $this->db->bind(':posologia', $data['posologia'][$numeroFilas]);
            $this->db->bind(':consecutivoFormula', $numFormula);
            $this->db->bind(':idItem', $data['idItem'][$numeroFilas]);
            $resulset = $this->db->execute();
            $numeroFilas = $numeroFilas + 1;
        }
        if ($resulset) {
            return true;
        } else {
            return false;
        }
    }
}
