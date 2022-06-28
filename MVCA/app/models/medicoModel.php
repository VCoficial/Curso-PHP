<?php 
//modelo correspondiente a cada controlador
class MedicoModel{
    
    private $db;

    public function __construct()
    {
         $this->db=new dbase;
    }
    public function listarMedicos(){
        $this->db->query("SELECT * FROM medico");
        $resultSet=$this->db->getAll();
        return $resultSet;
    }
}