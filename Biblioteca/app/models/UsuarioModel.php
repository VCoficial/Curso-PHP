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


    public function buscarUsuario($id)
    {
        $this->db->query("SELECT * from usuarios where idUsuarios =:id");
        $this->db->bind(':id', $id);
        $resultSet = $this->db->getOne();
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

        $this->db->query("INSERT INTO `usuarios`
        (`Nombre1`, `Nombre2`, `Apellido1`, `Apellido2`, `Telefono`, `correo`, `Usuario`, `Passwordd`, `Roles_idRoles`) VALUES 
        ('$Nombre1','$Nombre2','$Apellido1','$Apellido2','$Telefono','$Correo','$Usuario','$password',$roles)");
        
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
