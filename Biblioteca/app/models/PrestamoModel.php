<?php
//modelo correspondiente a cada controlador
class PrestamoModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Dbase;
    }

    public function traerPrestamos()
    {
        $this->db->query("SELECT * from prestamos");
        
        $resultSet = $this->db->getAll();
        return $resultSet;
    }

    public function buscarCliente($id)
    {
        $this->db->query("SELECT * from prestamos where idPrestamo =:id");
        $this->db->bind(':id', $id);
        $resultSet = $this->db->getOne();
        return $resultSet;
    }

    

}
