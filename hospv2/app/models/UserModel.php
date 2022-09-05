<?php

//modelo correspondiente a cada controlador
class UserModel
{

    private $db;

    public function __construct()
    {
        $this->db = new Dbase;
    }


    //retorna todos los registros
    public function getAll()
    {
        $this->db->query("SELECT * FROM user");
        $resultSet = $this->db->getAll();
        // $resultSet = json_encode($resultSet);
        return $resultSet;
    }

    // retorna un registro de acuerdo al id
    public function getOne($id)
    {
        $this->db->query("SELECT * FROM users where idUser =:id");
        $this->db->bind(':id', $id);
        $resultSet = $this->db->getOne();
        return $resultSet;
    }
    public function findUserByEmail($email)
    {
        $this->db->query('SELECT * FROM users WHERE email = :email');
        // Bind value
        $this->db->bind(':email', $email);

        $row = $this->db->getOne();

        // Check row
        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function login($email, $password)
    {
        $this->db->query('SELECT * FROM users WHERE email = :email');
        // Bindiamos
        $this->db->bind(':email', $email);
        //obtenemos password de la BD
        $row = $this->db->getOne();
        $password_bd = $row->password;

        if (password_verify($password, $password_bd)) {
            return $row;
        } else {
            return false;
        }
    }
}
