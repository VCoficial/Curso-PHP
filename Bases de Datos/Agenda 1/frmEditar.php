<?php

$id = $_GET['id'];
echo $id;

require_once 'crud/bd.php';
$sql = 'SELECT * FROM contacto WHERE id = ?';
$sentencia = $pdo->prepare($sql); //prepara consulta
$sentencia->execute([$id]); //ejecuta la sentencia SQL 
$resultado=$sentencia->fetch();//devuelve la fila con el resultado
/* echo '<pre>';
var_dump($resultado);
echo '<pre>'; */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="" id="" value="<?php echo $resultado[0] ; ?>">
        <input type="text" name="" id="" value="<?php echo $resultado[1] ; ?>">
        <input type="text" name="" id="" value="<?php echo $resultado[2] ; ?>">
    </form>
</body>
</html>