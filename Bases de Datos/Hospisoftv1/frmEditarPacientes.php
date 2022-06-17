<?php
session_start();
if (!isset($_SESSION['usuarioActivo'])) {
    header('Location:index.php');
} else {
require_once 'plantilla/cabeceraMedicos.php';
?>
<!-- INICIO DEL CONTENIDO -->
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Mantenimiento de Pacientes</h1>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form action="app/insertarPaciente.php" method="POST">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="nombre" id="nombre">
                            </div>
                            <div class="mb-3">
                                <label for="apellidos" class="form-label">Apellido</label>
                                <input type="text" class="form-control" name="apellidos" id="apellidos">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" name="email" id="email">
                            </div>
                            <div class="mb-3">
                                <label for="telefono" class="form-label">Telefono</label>
                                <input type="text" class="form-control" name="telefono" id="telefono">
                            </div>
                            <div class="mb-3">
                                <label for="movil" class="form-label">Movil</label>
                                <input type="text" class="form-control" name="movil" id="movil">
                            </div>
                            <div class="mb-3">
                                <label for="fecha_nace" class="form-label">Fecha_Nace</label>
                                <input type="date" class="form-control" name="fecha_nace" id="fecha_nace">
                            </div>
                            <div class="mb-3">
                                <label for="eps" class="form-label">E.P.S</label>
                                <input type="text" class="form-control" name="eps" id="eps">
                            </div>
                            <div class="mb-3">
                                <label for="usuario" class="form-label">Usuario del Sistema</label>
                                <input type="text" class="form-control" name="usuario" id="usuario">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="text" class="form-control" name="password" id="password">
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
                            <th scope="col">Telefono</th>
                            <th scope="col">EPS</th>
                            <th scope="col">Usuario</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require_once 'app/listaPacientes.php';
                        foreach ($resultado as $datos) {
                        ?>
                            <tr>
                                <td> <?php echo $datos->id_paciente; ?> </td>
                                <td> <?php echo $datos->nombre_paciente; ?> </td>
                                <td> <?php echo $datos->apellidos_paciente; ?> </td>
                                <td> <?php echo $datos->email_paciente; ?> </td>
                                <td> <?php echo $datos->telefono_paciente; ?> </td>
                                <td> <?php echo $datos->eps_paciente; ?> </td>
                                <td> <?php echo $datos->usuario_paciente; ?> </td>
                                <td> <a href="frmEditar.php?id=<?php echo $datos->id ?>" type="button" class="btn btn-primary"><i class="bi bi-pen-fill"></i></a> </td>
                                <td> <a href="app/eliminarPaciente.php?id=<?php echo $datos->id_paciente ?>" type="button" class="btn btn-danger"><i class="bi bi-trash-fill"></i></a> </td>
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