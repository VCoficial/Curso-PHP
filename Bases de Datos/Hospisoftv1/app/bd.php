<?php
//conexion a la BD de la forma clasica
session_start(); //Activa la configuracion de arreglos para almacenar las sesiones.

//Usuario y clave de Mysql
$usuario = 'root';
$password = '';

try {
    //creamos el conector instanciando la clase PDO
    $pdo = new PDO('mysql:host=localhost;dbname=hospisoft', $usuario, $password); //Usamos la clase PDO de PHP con el conector MYSQL
    /*     var_dump($pdo);
    echo '<br>';
    echo 'conexion exitosa'; */
} catch (PDOException $error) {
    echo 'ha ocurrido un error en la conexion'; //Mensaje de error para usuario normal
    //echo 'el error es :'.$error->getMessage(); //Mensaje de error para programador
}
