<?php
require_once 'bd.php';

$usuario = filter_var(trim($_POST['usuario']), FILTER_DEFAULT);
$password = filter_var(trim($_POST['password']), FILTER_DEFAULT);

/* echo '<pre>';
var_dump($usuario,$password);
echo '<pre>';  */

$sql = 'SELECT * FROM paciente where usuario_paciente=?';
$sentencia = $pdo->prepare($sql); //prepara consulta
$sentencia->execute([$usuario]); //ejecuta la sentencia SQL 
$paciente = $sentencia->fetch(PDO::FETCH_OBJ);

//Validamos usuario y clave
//Validación basada en el email de validacion
if (!password_verify($password, $paciente->password_paciente)) {
    header('Location:../index.php');
} else {
    $_SESSION['usuarioActivo'] = $paciente->usuario_paciente;
    header('Location:../panelPacientes.php');
}
