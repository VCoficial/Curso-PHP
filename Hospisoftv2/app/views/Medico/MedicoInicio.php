<?php require_once APPROOT . "/views/inc/header.php";
error_reporting(0);
?>

<div class="row mt-3">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-primary bg-gradient text-white">
                <h5>Médicos Disponibles</h5>
            </div>
            <div class="card-body">
                <form action="<?php echo URLROOT; ?>Medico/search" method="POST">
                    <div class="input-group mb-2 w-50">
                        <input type="text" class="form-control form-control-sm " placeholder="Apellidos ..." aria-label="Recipient's username" aria-describedby="button-addon2" name="valor">
                        <button class="btn btn-secondary" type="submit"><i class="bi bi-search"></i></button>
                    </div>
                </form>
                <a class="btn btn-success btn-sm" href="<?php echo URLROOT; ?>Medico/formAdd"><i class="bi bi-plus-circle"></i> </a></small>
                <a class="btn btn-success btn-sm" href="<?php echo URLROOT; ?>Medico/ImprimirListado"><i class="bi bi-printer"></i></a></small>
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Email</th>
                            <th>Especialidad</th>
                            <th>Acción</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $index => $fila) :; ?>
                            <?php foreach ($fila as $index2 => $medico) :; ?>
                                <tr>
                                    <td><?php echo $medico->idMedico; ?></td>
                                    <td><?php echo $medico->nombreMedico; ?></td>
                                    <td><?php echo $medico->apellidosMedico; ?></td>
                                    <td><?php echo $medico->emailMedico; ?></td>
                                    <td><?php echo $medico->especialidadMedico; ?></td>
                                    <td><a class="btn btn-primary btn-sm" href="<?php echo URLROOT; ?>Medico/update/<?php echo $medico->idMedico;  ?>"><i class="bi bi-pencil-square"></i></a></td>
                                    <td><a class="btn btn-danger btn-sm" href="<?php echo URLROOT; ?>Medico/delete/<?php echo $medico->idMedico;  ?>"><i class="bi bi-trash3"></i></a></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="<?php echo $data["previous"]; ?>">Previo</a></li>
                        <?php for ($index = 1; $index <= $data['total']; $index++) : ?>
                            <li class="page-item"><a class="page-link" href=" <?php echo $index; ?>">
                                    <?php echo $index; ?>
                                </a></li>
                        <?php endfor; ?>
                        <li class="page-item"><a class="page-link" href=" <?php echo URLROOT; ?>Medico/<?php echo $data["next"]; ?>">Siguiente</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

</div>

<!-- fin del contenedor principal -->
</main>


<?php require_once APPROOT . "/views/inc/footer.php"  ?>