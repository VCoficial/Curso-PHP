<?php
/*
clase base para manipular el gestor de base de datos
ORM Básico
*/
class Dbase
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $password = DB_PASSWORD;
    private $bdatos = DB_NAME;

    //variables para la consulta

    private $dbh;  //para almacenar la conexion
    private $stmt; //para los resultados de los querys
    private $error; //para los errores


    //hacemos la conexion 
    public function __construct()
    {
        //FIXME: agregar opciones de mysql
        //$dsn : almacenamos la ruta
        $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->bdatos . ";charset=utf8";
        try {
            $this->dbh = new PDO($dsn, $this->user, $this->password);
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            echo "se ha generado un error en la conexion:" . $this->error;
        }
    }
    // Método para parametrizar las consultas 
    // le deben llegar 3 parametros:
    // el parametro, el valor adjunto y el tipo de parametro
    //@return parametro

    public function bind($parameter, $value, $type = null)
    {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                case is_array($value):
                    $type = PDO::PARAM_INT;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($parameter, $value, $type);
    }



    //procesar la consultas y aplicar el prepare
    public function query($sql)
    {
        $this->stmt = $this->dbh->prepare($sql);
    }
    //ejecuta la consulta
    public function execute()
    {
        return $this->stmt->execute();
    }
    //ejecuta la consulta y devuelve arreglo de objetos
    //
    public function getAll()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }
    //ejecuta la consulta y devuelve una fila del arreglo
    //
    public function getOne()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }
    //para la paginación se necesita contar el numero de registros de la consulta

    public function rowCount()
    {
        $this->execute();
        return $this->stmt->rowCount();
    }
    public function lastInsertId()
    {
        //$this->execute();
        return $this->dbh->lastInsertId();
    }
}
