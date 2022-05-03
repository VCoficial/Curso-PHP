<?php
require_once 'plantilla/cabecera.php';
?>

<h1>AGENDA DE CONTACTOS</h1>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <h2>REGISTRO DE CONTACTOS</h2>
                <div class="card-body">
                    <form action="crud/insertarContacto.php" method="POST">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre">
                        </div>
                        <div class="mb-3">
                            <label for="apellido" class="form-label">Apellidos</label>
                            <input type="text" class="form-control" id="apellido" name="apellido">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="telefono" class="form-label">Telefono</label>
                            <input type="text" class="form-control" id="telefono" name="telefono">
                        </div>
                        <div class="mb-3">
                            <label for="movil" class="form-label">Movil</label>
                            <input type="text" class="form-control" id="movil" name="movil">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">REGISTRARSE</button>
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
                        <th scope="col">Movil</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once 'crud/listaContactos.php';
                    foreach ($resultado as $datos) {
                    ?>
                        <tr>
                            <td><?php echo $datos->id ?></td>
                            <td><?php echo $datos->nombre ?></td>
                            <td><?php echo $datos->apellidos ?></td>
                            <td><?php echo $datos->email ?></td>
                            <td><?php echo $datos->telefono ?></td>
                            <td><?php echo $datos->movil ?></td>
                            <td><a href="frmEditar.php?id=<?php echo $datos->id ?>" type="button" class="btn btn-primary"><i class="bi bi-pencil-square"></i>Editar</a></td>
                            <td><a href="crud/eliminarContacto.php?id=<?php echo $datos->id ?>" type="button" class="btn btn-danger"><i class="bi bi-trash"></i>Eliminar</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
require_once 'plantilla/footer.php';
?>