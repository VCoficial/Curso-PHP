<?php
//modelo correspondiente a cada controlador
class ClientesModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Dbase;
    }

    public function traerClientes()
    {
        $this->db->query("SELECT * from clientes");
        
        $resultSet = $this->db->getAll();
        return $resultSet;
    }

    public function buscarCliente($id)
    {
        $this->db->query("SELECT * from clientes where idCliente =:id");
        $this->db->bind(':id', $id);
        $resultSet = $this->db->getOne();
        return $resultSet;
    }


    public function InsertarClientes()
    {
        $identificacion = $_POST["identificacion"];
        $Nombre1 = $_POST["nombre1"];
        $Nombre2 = $_POST["nombre2"];
        $Apellido1 = $_POST["Apellido1"];
        $Apellido2 = $_POST["Apellido2"];
        $Telefono = $_POST["telefonoCliente"];
        $Correo = $_POST["correoCliente"];
        $vecesPrestado = $_POST["vecesPrestado"];

        $this->db->query("INSERT INTO `clientes`
        (`Identificacion`,`Nombre1`, `Nombre2`, `Apellido1`, `Apellido2`, `Telefono`, `Correo`,`vecesPrestado`) VALUES 
        ('$identificacion','$Nombre1','$Nombre2','$Apellido1','$Apellido2','$Telefono','$Correo','$vecesPrestado')");
        
        $this->db->execute();
    }

    public function actualizarUsuario($data)
    {
        $this->db->query('DELETE FROM usuarios WHERE idUsuarios= :id');
        //vinculacion de los datos
        
        $this->db->bind(':id', $data['id']);

        // ejecucion de la consulta

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    

}
