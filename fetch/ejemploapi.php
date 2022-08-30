<?php
/*clase para manipular la base de datos */
class Bdatos
{
    public function obtenerConexion()
    {
        try {
            $link = new PDO("mysql:host=localhost;dbname=hospisoft;", 'root', '');
            $link->exec("set names utf8");
            $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $link;
        } catch (PDOException $error) {
            echo "Error en la Conexion: " . $error->getMessage() . "<br/>";
        }
    }

    public function listarRegistros($sql)
    {
        $link = $this->obtenerConexion();
        $consulta = $link->prepare("$sql");
        $consulta->execute();
        $datos = $consulta->fetchAll(PDO::FETCH_OBJ);  //transforma en objeto asociativo
        // return $datos;  //devuelve el resultado de la consulta como un objeto asociativo
        $datos = json_encode($datos);   //transforma el arreglos asociativo en JSON
        echo $datos;
    }
}

$prueba = new Bdatos();
$resultado = $prueba->listarRegistros('SELECT * FROM paciente');
