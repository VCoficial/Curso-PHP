<?php
require_once 'bd.php'; //incluye la cadena de conexion PHP

// Recibimos la data del formulario
$nombre = filter_var(trim($_POST['nombre']), FILTER_DEFAULT);
$apellido = filter_var(trim($_POST["apellidos"]), FILTER_DEFAULT);
$email = filter_var(trim($_POST["email"]), FILTER_DEFAULT);
$telefono = filter_var(trim($_POST["telefono"]), FILTER_DEFAULT);
$movil = filter_var(trim($_POST["movil"]), FILTER_DEFAULT);
$fecha = filter_var(trim($_POST["fecha_nace"]), FILTER_DEFAULT);
$eps = filter_var(trim($_POST["eps"]), FILTER_DEFAULT);
$usuario = filter_var(trim($_POST["usuario"]), FILTER_DEFAULT);
$password = filter_var(trim($_POST["password"]), FILTER_DEFAULT);

//encripacion de la pwd
$password = password_hash($password, PASSWORD_DEFAULT);
//"Password_Default" toma la encriptación de Php mas util recientemente 

//----------------------------------------------------------------

// hacer el proceso de request - response
$sql = 'INSERT INTO paciente(nombre_paciente,apellidos_paciente,email_paciente,telefono_paciente,movil_paciente,fecha_nace_paciente,eps_paciente,usuario_paciente,password_paciente)
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?) ';
$sentencia = $pdo->prepare($sql); //prepara consulta
$sentencia->execute([$nombre, $apellido, $email, $telefono, $movil, $fecha, $eps, $usuario, $password]); //ejecuta la sentencia SQL 

if($sentencia->rowCount()>=1){
    $_SESSION['tipo']='primary';
    $_SESSION['mensaje']='Operación Exitosa';
}else{
    $_SESSION['tipo']='danger';
    $_SESSION['mensaje']='Ha ocurrido un error en la inserción !';
};

//$result=$_SESSION['¡INSERCIÓN EXITOSA!'];

header('Location:../frmRegistroPaciente.php');
