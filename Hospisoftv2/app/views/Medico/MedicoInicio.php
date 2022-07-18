<?php require_once APPROOT . "/views/inc/header.php"; ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-4">
            <h1>Medico</h1>
        </div>
        <div class="col-12">
            <table class="table table-striped">
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
                            <td><button type="button" class="btn btn-primary">Button</button></td>
                            <td><button type="button" class="btn btn-danger">Button</button></td>
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