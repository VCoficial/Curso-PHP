<?php
session_start();
error_reporting(0);
if (!isset($_SESSION['usuarioActivo'])) {
    header('Location:index.php');
} else {
    require_once 'plantilla/cabeceraMedicos.php';
?>
<!-- INICIO DEL CONTENIDO -->
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h5>Mantenimiento de Medicos</h5>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form action="app/insertarMedico.php" method="POST">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="nombre" id="nombre">
                            </div>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Apellido</label>
                                <input type="text" class="form-control" name="apellidos" id="apellidos">
                            </div>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Email</label>
                                <input type="text" class="form-control" name="email" id="email">
                            </div>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Especialidad</label>
                                <input type="text" class="form-control" name="especialidad" id="especialidad">
                            </div>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="password">
                            </div>
                            <button type="submit" class="btn btn-primary"><i class="bi bi-save-fill"></i></button>
                        </form>
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellidos</th>
                            <th scope="col">Email</th>
                            <th scope="col">Especialidad</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require_once 'app/listaMedicos.php';
                        foreach ($resultado as $datos) {
                        ?>
                            <tr>
                                <td><?php echo $datos->idMedico ?></td>
                                <td><?php echo $datos->nombreMedico ?></td>
                                <td><?php echo $datos->apellidosMedico ?></td>
                                <td><?php echo $datos->emailMedico ?></td>
                                <td><?php echo $datos->especialidadMedico ?></td>
                                <td> <a href="frmEditarMedicos.php?id=<?php echo $datos->idMedico ?>" type="button" class="btn btn-primary"><i class="bi bi-pen-fill"></i></a> </td>
                                <td> <a href="app/eliminarMedico.php?id=<?php echo $datos->idMedico ?>" type="button" class="btn btn-danger"><i class="bi bi-trash-fill"></i></a> </td>
                            </tr>
                        <?php  } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- FIN DEL CONTENIDO -->

    <?php
    require_once 'plantilla/footer.php';
}
    ?>