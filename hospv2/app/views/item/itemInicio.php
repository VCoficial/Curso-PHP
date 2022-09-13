<?php require_once APPROOT . "/views/inc/header.php"; ?>
<!-- titulo seccion -->
<h4>
    <small class="text-muted">Item</small>
    <a class="btn btn-success btn-sm" href="http://"><i class="bi bi-plus-circle"></i></a>
    <a class="btn btn-success btn-sm" href="<?php echo URLROOT; ?>Paciente/ImprimirListado"><i class="bi bi-plus-circle"></i> Imprime</a>

</h4>

<table class="table table-striped table-inverse table-responsive table-sm" id="tblPacientes">
    <thead class="thead-inverse">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>Acción</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>

    </tbody>
    <tfoot>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>Acción</th>
            <th>Acción</th>
        </tr>
    </tfoot>
</table>

<!-- fin del contenedor principal -->
</main>

<script src="<?php echo URLROOT; ?>js/bootstrap.bundle.min.js"></script>
<script src="<?php echo URLROOT; ?>jQuery-3.6.0/jquery-3.6.0.min.js"></script>
<script src="<?php echo URLROOT; ?>DataTables-1.12.1/js/jquery.dataTables.min.js"></script>

<?php require_once APPROOT . "/views/inc/footer.php"; ?>