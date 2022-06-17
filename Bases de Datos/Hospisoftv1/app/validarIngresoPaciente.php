<?php
require_once 'bd.php';

$usuario = filter_var(trim($_POST['usuario']), FILTER_DEFAULT);
$password = filter_var(trim($_POST['password']), FILTER_DEFAULT);

/* echo '<pre>';
var_dump($usuario,$password);
echo '<pre>';  */

$sql = 'SELECT * FROM pacientes where userPaciente=?';
$sentencia = $pdo->prepare($sql); //prepara consulta
$sentencia->execute([$usuario]); //ejecuta la sentencia SQL 
$paciente = $sentencia->fetch(PDO::FETCH_OBJ);

//Validamos usuario y clave
//Validación basada en el email de validacion
if (!password_verify($password, $paciente->passwordPaciente)) {
    header('Location:../index.php');
} else {
    $_SESSION['idUsuario']= $paciente->idpaciente;
    $_SESSION['usuarioActivo'] = $paciente->userPaciente;
    header('Location:../panelPacientes.php');
}

//admin - 12345