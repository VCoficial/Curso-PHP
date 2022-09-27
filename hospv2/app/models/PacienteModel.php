<?php

//modelo correspondiente a cada controlador
class PacienteModel
{

    private $db;

    public function __construct()
    {
        $this->db = new Dbase;
    }

    public function getAll()
    {
        $this->db->query("SELECT * FROM paciente");
        $resultSet = $this->db->getAll();
        return $resultSet;
    }
}
