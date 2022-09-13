<?php require_once APPROOT . "/views/inc/header.php"; ?>
<!-- titulo seccion -->
<h4 class="bg bg-info p-2">
    <small class="text-white">::: Mantenimiento Pacientes ::: </small>
    <a class="btn btn-primary btn-sm" href="http://"><i class="bi bi-plus-circle"></i></a>
    <a class="btn btn-primary btn-sm" href="<?php echo URLROOT; ?>Paciente/ImprimirListado"><i class="bi bi-printer"></i></a>
    <a class="btn btn-primary btn-sm" href="<?php echo URLROOT; ?>Paciente/ImprimirListado"><i class="bi bi-file-spreadsheet"></i></a>

</h4>

<table class="table table-striped table-inverse table-responsive table-sm" id="tblpaciente">
    <thead class="thead-inverse">
        <th>Id</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Email</th>
        <th>Telefono</th>
        <th>Movil</th>
        <th>Fecha Nacimiento</th>
    </thead>
    <tbody>
    </tbody>
    <tfoot>
        <th>Id</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Email</th>

    </tfoot>
</table>

<!-- fin del contenedor principal -->
</main>

<link rel="stylesheet" href="<?php echo URLROOT; ?>css/sweetalert2.min.css">
<script src="<?php echo URLROOT; ?>js/sweetalert2.all.min.js"></script>
<script src="<?php echo URLROOT; ?>jQuery-3.6.0/jquery-3.6.0.min.js"></script>
<script src="<?php echo URLROOT; ?>DataTables-1.12.1/js/jquery.dataTables.min.js"></script>
<!--  -->

<script src="<?php echo URLROOT; ?>js/paciente.js"></script>

<?php require_once APPROOT . "/views/inc/footer.php"; ?>