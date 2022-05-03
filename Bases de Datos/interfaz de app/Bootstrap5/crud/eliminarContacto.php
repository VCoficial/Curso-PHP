<?php 

require_once 'bd.php'; //incluye la cadena de conexion PHP

$id = $_GET['id'];

$sql="DELETE FROM contacto WHERE id=($id)";
$sentencia = $pdo->prepare($sql); //prepara consulta
$sentencia->execute(); //ejecuta la sentencia SQL 

header('Location:../index.php');

?>