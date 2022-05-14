<?php 
require_once 'bd.php'; //incluye la cadena de conexion PHP

// Recibimos la data del formulario
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellidos'];
$email=$_POST['email'];
$especialidad=$_POST['especialidad'];

//----------------------------------------------------------------

// hacer el proceso de request - response

$sql = "UPDATE medico SET nombre_medico=?,apellidos_medico=?,email=?,especialidad=? WHERE id_medico={$id}";
$sentencia = $pdo->prepare($sql); //prepara consulta
$sentencia->execute([$nombre,$apellido,$email,$especialidad]); //ejecuta la sentencia SQL 

header('Location:../medicos.php');
?>