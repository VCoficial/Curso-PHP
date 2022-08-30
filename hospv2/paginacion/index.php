<?php
require_once 'bd.php';
$limite = 100; //registros a mostrar por pantalla
$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 1;
$inicio = ($pagina - 1) * $limite;
$sql = "SELECT * FROM paciente LIMIT $inicio,$limite";
$sentencia = $pdo->prepare($sql);  //prepara consulta                         
$sentencia->execute(); //ejecuta la sentencia sql
$resultado = $sentencia->fetchAll(PDO::FETCH_OBJ);
// Calculamos total de registros de la tabla
$sql2 = "SELECT count(idPaciente) FROM paciente";
$sentencia2 = $pdo->prepare($sql2);  //prepara consulta                         
$sentencia2->execute(); //ejecuta la sentencia sql
$totalRegistros = $sentencia2->fetch();
$totalPaginas = ceil($totalRegistros[0] / $limite);
$anterior = $pagina - 1;
$siguiente = $pagina + 1;
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="alert alert-success" role="alert">
                AGENDA DE PACIENTES
            </div>
        </div>
        <div class="row">

            <div class="col-md-12">

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellidos</th>


                        </tr>
                    </thead>
                    <tbody>


                        <?php foreach ($resultado as $datos) {
                        ?>
                            <tr>
                                <td> <?php echo $datos->idPaciente; ?> </td>
                                <td> <?php echo $datos->nombrePaciente; ?> </td>
                                <td> <?php echo $datos->apellidosPaciente; ?> </td>

                            </tr>
                        <?php  } ?>


                    </tbody>
                </table>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="index.php?pagina=<?php echo $anterior; ?>">Anterior</a></li>
                        <?php for ($i = 1; $i <= $totalPaginas; $i++) : ?>
                            <li class="page-item"><a class="page-link" href="index.php?pagina=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                        <?php endfor; ?>
                        <li class="page-item"><a class="page-link" href="index.php?pagina=<?php echo $siguiente; ?>">Siguiente</a></li>
                    </ul>
                </nav>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>