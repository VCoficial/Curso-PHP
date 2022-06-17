<?php
session_start();
error_reporting(0);
if (!isset($_SESSION['usuarioActivo'])) {
    header('Location:index.php');
} else {
$id = $_GET['id'];
// echo $id;

require_once 'app/bd.php';
$sql = 'SELECT * FROM medico where idMedico = ?';
$sentencia = $pdo->prepare($sql);  //prepara consulta 
$sentencia->execute([$id]); //ejecuta la sentencia sql
$medico = $sentencia->fetch(PDO::FETCH_OBJ); //devuelve la fila con el resultado de la consulta
/* echo '<pre>';
var_dump($resultado);
echo '</pre>'; */
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Editar Contactos</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <h3>Actualizar Medico</h3>
                    <div class="card-body">
                        <form action="app/actualizarMedicos.php" method="POST">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">ID</label>
                                <input type="text" class="form-control" name="id" id="id" value="<?php echo $medico->id_medico; ?>" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $medico->nombre_medico; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Apellido</label>
                                <input type="text" class="form-control" name="apellidos" id="apellidos" value="<?php echo $medico->apellidos_medico; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Email</label>
                                <input type="text" class="form-control" name="email" id="email" value="<?php echo $medico->email; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Especialidad</label>
                                <input type="text" class="form-control" name="especialidad" id="especialidad" value="<?php echo $medico->especialidad; ?>">
                            </div>

                            <button type="submit" class="btn btn-primary">Actualizar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>

<?php 
}
?>