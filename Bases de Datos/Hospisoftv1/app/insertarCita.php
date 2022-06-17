<?php
require_once 'bd.php'; //incluye la cadena de conexion PHP
// error_reporting(E_ALL); //Esto me activa el despliegue de error para programador

// Recibimos la data del formulario y validamos
$fecha = filter_var(($_POST['fecha']), FILTER_DEFAULT);
$hora = filter_var(($_POST["hora"]), FILTER_DEFAULT);
$idMedico = filter_var(($_POST["medico"]), FILTER_DEFAULT);
$motivo = filter_var(($_POST["motivo"]), FILTER_DEFAULT);
$idPaciente = filter_var(($_POST["paciente"]), FILTER_DEFAULT);

//encripacion de la pwd
$password = password_hash($password, PASSWORD_DEFAULT);
//"Password_Default" toma la encriptación de Php mas util recientemente 

//----------------------------------------------------------------

// hacer el proceso de request - response
$sql = 'INSERT INTO agenda(fecha, hora, idMedico, motivo, idPaciente)
VALUES (?, ?, ?, ?, ?) ';
$sentencia = $pdo->prepare($sql); //prepara consulta
$sentencia->execute([$fecha, $hora, $idMedico, $motivo, $idPaciente]); //ejecuta la sentencia SQL 

/* var_dump ($sentencia->rowCount()); */
if($sentencia->rowCount()>=1){
    $_SESSION['tipo']='primary';
    $_SESSION['mensaje']='Operación Exitosa';
}else{
    $_SESSION['tipo']='danger';
    $_SESSION['mensaje']='No es posible registrar la cita, agenda ocupada !';
};

//$result=$_SESSION['¡INSERCIÓN EXITOSA!'];

header('Location:../frmAgendarCita.php'); 
