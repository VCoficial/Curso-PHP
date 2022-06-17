<?php 
require_once 'bd.php'; //incluye la cadena de conexion PHP

// Recibimos la data del formulario
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$especialidad = $_POST['especialidad'];
$password = $_POST["password"];

//----------------------------------------------------------------

// hacer el proceso de request - response

$sql = 'INSERT INTO medico(nombreMedico, apellidosMedico, emailMedico, especialidadMedico, passwordMedico)
VALUES (?, ?, ?, ?,?,?)';
$sentencia = $pdo->prepare($sql); //prepara consulta
$sentencia->execute([$nombre,$apellidos,$email,$especialidad,$password]); //ejecuta la sentencia SQL 

header('Location:../medicos.php');
?>