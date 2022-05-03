<?php 
require_once 'bd.php'; //incluye la cadena de conexion PHP

// Recibimos la data del formulario
$nombre= $_POST["nombre"];
$apellido= $_POST["apellido"];
$email= $_POST["email"];
$telefono= $_POST["telefono"];
$movil= $_POST["movil"];

//----------------------------------------------------------------

// hacer el proceso de request - response

$sql = 'INSERT INTO contacto(nombre,apellidos,email,telefono,movil)
VALUES (?, ?, ?, ?, ?) ';
$sentencia = $pdo->prepare($sql); //prepara consulta
$sentencia->execute([$nombre,$apellido,$email,$telefono,$movil]); //ejecuta la sentencia SQL 

header('Location:../index.php');
?>