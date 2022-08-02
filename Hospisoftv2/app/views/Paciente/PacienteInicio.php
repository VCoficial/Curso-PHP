<?php require_once APPROOT . "/views/inc/header.php"; ?>
<!-- titulo seccion -->
<h4>
    <small class="text-muted">Paciente</small>
    <a class="btn btn-success btn-sm" href="http://"><i class="bi bi-plus-circle"></i></a>
    <a class="btn btn-success btn-sm" href="<?php echo URLROOT; ?>Paciente/ImprimirListado"><i class="bi bi-plus-circle"></i>Imprime</a>

</h4>

<table class="table table-striped table-inverse table-responsive">
    <thead class="thead-inverse">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellidos</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $paciente) : ?>
            <tr>
                <td> <?php echo $paciente->idPaciente; ?></td>
                <td><?php echo $paciente->nombrePaciente; ?></td>
                <td><?php echo $paciente->apellidosPaciente; ?></td>
                <td><a class="btn btn-primary btn-sm" href="http://"><i class="bi bi-pencil-square"></i></a></td>
                <td><a class="btn btn-danger btn-sm" href="http://"><i class="bi bi-trash3"></i></a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>





<!-- fin del contenedor principal -->
</main>



<?php require_once APPROOT . "/views/inc/footer.php"; ?>