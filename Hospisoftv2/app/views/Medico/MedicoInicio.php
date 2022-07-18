<?php require_once APPROOT . "/views/inc/header.php"; ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-4">
            <h1>Medico</h1>
        </div>
        <div class="col-6">
            <a href="<?php echo URLROOT; ?>Medico/formAdd" class="btn btn-success">Agregar</a>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Especialidad</th>
                        <th>Accion</th>
                        <th>Accion</th>
                    </tr>
                <tbody>
                    <?php foreach ($data as $medico) :; ?>
                        <tr>
                            <td><?php echo $medico->idMedico; ?></td>
                            <td><?php echo $medico->nombreMedico; ?></td>
                            <td><?php echo $medico->apellidosMedico; ?></td>
                            <td><?php echo $medico->especialidadMedico; ?></td>
                            <td><button type="button" class="btn btn-primary">Editar</button></td>
                            <td><button type="button" class="btn btn-danger">Borrar</button></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                </thead>
            </table>
        </div>
    </div>
</div>
</div>

<?php require_once APPROOT . "/views/inc/footer.php"; ?>