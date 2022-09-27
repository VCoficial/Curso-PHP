<?php
//modelo correspondiente a cada controlador
class FormulaModel
{

    private $db;

    public function __construct()
    {
        $this->db = new Dbase;
    }


    //retorna todos los registros
    public function getAll()
    {
        $this->db->query("SELECT * FROM formula");
        $resultSet = $this->db->getAll();
        return $resultSet;
    }

    public function add($data)
    {
        $this->db->query("INSERT INTO formula(fecha,idpaciente,idmedico) VALUES (:fecha,:idpaciente,:idMedico) ");
        //bindiamos
        $this->db->bind(':fecha', $data['fechaFormula']);
        $this->db->bind(':idpaciente', $data['idPaciente']);
        $this->db->bind(':idMedico', $data['idMedico']);
        //verificamos la ejecucion correcta del query 
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getLast()
    {
        $ultimo = $this->db->lastInsertId();
        return $ultimo;
    }

    public function rowCount()
    {
        $conteo = $this->db->rowCount();
        return $conteo;
    }
}
