<?php
require_once 'bd.php';

$idMedico = filter_var(trim($_POST['identificacion']), FILTER_DEFAULT);
$password = filter_var(trim($_POST['password']), FILTER_DEFAULT);

/* echo  '<pre>';
var_dump($usuario,$password);
echo  '</pre>'; */

$sql = 'SELECT * FROM medico where idMedico=?';
$sentencia = $pdo->prepare($sql); //prepara consulta
$sentencia->execute([$idMedico]);  //ejecuta la sentencia sql
$medico = $sentencia->fetch(PDO::FETCH_OBJ);

//Validamos usuario y clave
//Validación basada en el email de validacion
if (!password_verify($password, $medico->passwordMedico)) {
    header('Location:../index.php');
} else {
    $_SESSION['idMedico'] = $medico->idMedico; //para almacenar las agendas del citio
    $_SESSION['usuarioActivo'] = $medico->nombreMedico;
    header('Location:../panelMedicos.php');
}

// 1150 - 12345