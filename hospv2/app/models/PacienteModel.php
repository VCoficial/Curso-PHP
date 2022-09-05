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

    public function getTable()
    {
        $this->db->query("SELECT idPaciente,nombrePaciente,apellidosPaciente,emailPaciente,telefonoPaciente FROM paciente");
        $resultSet = $this->db->getAll();
        return $resultSet;
    }
}
