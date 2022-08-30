<?php

//modelo correspondiente a cada controlador
class MedicoModel
{

    private $db;

    public function __construct()
    {
        $this->db = new Dbase;
    }


    //retorna todos los registros
    public function getAll()
    {
        $this->db->query("SELECT * FROM medico");
        $resultSet = $this->db->getAll();
        // $resultSet = json_encode($resultSet);
        return $resultSet;
    }

    // retorna un registro de acuerdo al id
    public function getOne($id)
    {
        $this->db->query("SELECT * FROM medico where idMedico =:id");
        $this->db->bind(':id', $id);
        $resultSet = $this->db->getOne();
        return $resultSet;
    }
    // agrega un registro
    public function add($data)
    {
        $this->db->query("INSERT INTO medico(nombreMedico,apellidosMedico,emailMedico,especialidadMedico) VALUES (:nombreMedico,:apellidosMedico,:emailMedico,:especialidadMedico) ");
        //bindiamos
        $this->db->bind(':nombreMedico', $data['nombreMedico']);
        $this->db->bind(':apellidosMedico', $data['apellidosMedico']);
        $this->db->bind(':emailMedico', $data['emailMedico']);
        $this->db->bind(':especialidadMedico', $data['especialidadMedico']);
        //verificamos la ejecucion correcta del query
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    //actualiza un registro
    public function update($data)
    {
        $this->db->query('UPDATE medico SET nombreMedico=:nombreMedico,
        apellidosMedico=:apellidosMedico,emailMedico=:emailMedico,
        especialidadMedico=:especialidadMedico WHERE idMedico=:idMedico       
        ');
        //vinculacion de los datos
        $this->db->bind(':idMedico', $data['idMedico']);
        $this->db->bind(':nombreMedico', $data['nombreMedico']);
        $this->db->bind(':apellidosMedico', $data['apellidosMedico']);
        $this->db->bind(':emailMedico', $data['emailMedico']);
        $this->db->bind(':especialidadMedico', $data['especialidadMedico']);

        // ejecucion de la consulta

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }


    //borra un registro de forma REAL

    public function delete($data)
    {
        $this->db->query('DELETE FROM medico WHERE idMedico = :idMedico');
        //vinculacion de los datos
        $this->db->bind(':idMedico', $data['idMedico']);

        // ejecucion de la consulta

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    //buscar por apellido
    public function search($data)
    {
        $this->db->query("SELECT * FROM medico WHERE apellidosMedico LIKE CONCAT(:nombreMedico,'%')");
        $valor = $data['valor'];
        $this->db->bind(':nombreMedico', $valor);
        $resultSet = $this->db->getAll();
        return $resultSet;
    }

    public function rowCount()
    {
        $this->db->query("SELECT * FROM medico");
        $resultSet = $this->db->rowCount();
        return $resultSet;
    }


    /**
     * totalMedicos
     *  Devuelve total medicos para la paginacion
     * @return void
     */
    public function totalMedicos()
    {
        $this->db->query("SELECT COUNT(idMedico) as numevents FROM medico");
        $resultSet = $this->db->getOne();
        return  $resultSet;
    }


    /**
     * totalPages
     * devuelve el total de paginas de acuerdo al limite y al offset
     * @param  mixed $perPage
     * @param  mixed $offset
     * @return void
     */
    public function totalPages($perPage, $offset)
    {
        $this->db->query("SELECT * from medico ORDER BY apellidosMedico ASC LIMIT :limit OFFSET :offset");
        $this->db->bind(":limit", $perPage);
        $this->db->bind(":offset", $offset);
        $resultSet = $this->db->getAll();
        return $resultSet;
    }
    //=========================== paginacion  =====================
}
