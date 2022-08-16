<?php
//modelo correspondiente a cada controlador
class PenalizacionesModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Dbase;
    }


    public function traerPenalizaciones()
    {
        $this->db->query("SELECT * from penalizacion");

        return $this->db->getAll();
    }
//SELECT FechaInicio, FechaEntrega, clientes.Nombre1 as nombre from prestamos INNER JOIN clientes ON prestamos.Clientes_idCliente = clientes.idCliente where prestamos.Clientes_idCliente = 3
    public function traerDatosPrestamo($data)
    {
        $valor = $this->db->query("SELECT  FechaInicio, FechaEntrega, clientes.Nombre1 FROM prestamos INNER JOIN clientes
         ON :idCliente = :idPrestamo");

        $valor->bindParam(":idCliente", $data['idCliente'], pdo::PARAM_INT);
        $valor->bindParam(":idPrestamo", $data['idPrestamo'], pdo::PARAM_INT);

        return $this->db->getOne();

    }


}