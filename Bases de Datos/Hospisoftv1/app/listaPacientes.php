<?php 
require_once 'bd.php'; //incluye la cadena de conexion PHP

// hacer el proceso de request - response

$sql = 'SELECT * FROM paciente';
$sentencia = $pdo->prepare($sql); //prepara consulta

$sentencia->execute(); //ejecuta la sentencia SQL 
$resultado=$sentencia->fetchAll(PDO::FETCH_OBJ);  // almacena el resultado de la consulta en formato array de PHP
/* echo '<pre>';
var_dump($resultado);
echo '</pre>'; */
?>