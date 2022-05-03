<?php 
require_once 'bd.php'; //incluye la cadena de conexion PHP

// Recibimos la data del formulario
$id= $_POST["id"];
$nombre= $_POST["nombre"];
$apellido= $_POST["apellido"];

//----------------------------------------------------------------

// hacer el proceso de request - response

$sql = 'UPDATE contacto SET nombre=?, apellidos=? WHERE id = ($id)';
$sentencia = $pdo->prepare($sql); //prepara consulta
$sentencia->execute([$nombre,$apellido]); //ejecuta la sentencia SQL 

header('Location:../index.php');
?>