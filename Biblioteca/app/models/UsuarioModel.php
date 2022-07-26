<?php
//modelo correspondiente a cada controlador
class UsuarioModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Dbase;
    }
    public function traerUsuarios()
    {

        $this->db->query("SELECT * from usuarios");
        
        $resultSet = $this->db->getAll();
        return $resultSet;
       
        
    }


    public function InsertarUsuarios()
    {

        $Nombre1 = $_POST["nombre1"];
        $Nombre2 = $_POST["nombre2"];
        $Apellido1 = $_POST["Apellido1"];
        $Apellido2 = $_POST["Apellido2"];
        $Telefono = $_POST["telefonoUsuario"];
        $Correo = $_POST["correoUsuario"];
        $Usuario = $_POST["usuario"];
        $password = $_POST["password"];
        $roles = $_POST["rol"];

        $this->db->query("INSERT INTO usuarios VALUES ('$Nombre1','$Nombre2','$Apellido1','$Apellido2','$Telefono','$Correo','$Usuario','$password','$roles')");
        
        $resultSet = $this->db->getAll();
        return $resultSet;
       
        
    }

}
