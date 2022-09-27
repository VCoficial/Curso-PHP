<?php require_once APPROOT . "/views/inc/header.php"; ?>

<div class="row">
    <div class="col-12">
        <div class="card mt-1">
            <div class="card-header">
                <h5>Fórmula Médica</h5>
            </div>
            <div class="card-body">
                <form method="POST" id="frmFormula" name="frmFormula">
                    <div class="row">
                        <div class="col-2">
                            <label for="" class="form-label">Fecha:</label>
                            <input type="date" name="fechaFormula" id="" class="form-control form-control-sm" required>
                        </div>
                        <div class="col-2">
                            <label for="" class="form-label">Id. del Paciente:</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control form-control-sm" placeholder="Buscar" name="idPaciente" id="idPaciente" aria-label="paciente" aria-describedby="button-addon2">
                                <button class="btn btn-primary btn-sm" type="button" id="button-addon2" data-bs-toggle="modal" data-bs-target="#paciente">Buscar</button>
                            </div>
                        </div>
                        <div class="col-4">
                            <label for="" class="form-label">Nombre Paciente:</label>
                            <input type="text" class="form-control form-control-sm" name="nombrePaciente" id="nombrePaciente">
                        </div>
                        <div class="col-2">
                            <label for="" class="form-label">Fecha Nacimiento</label>
                            <input type="text" class="form-control form-control-sm" name="fechaPaciente" id="fechaPaciente">
                        </div>
                        <div class="col-2">
                            <label for="" class="form-label">E.P.S</label>
                            <input type="text" class="form-control form-control-sm" name="epsPaciente" id="epsPaciente">
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-2">
                            <label for="" class="form-label">Id. del Medico:</label>
                            <div class="input-group">
                                <input type="text" class="form-control form-control-sm" placeholder="Buscar" name="idMedico" id="idMedico" aria-label="medico" aria-describedby="button-addon2">
                                <button class="btn btn-primary btn-sm" type="button" id="button-addon2" data-bs-toggle="modal" data-bs-target="#medico">Buscar</button>
                            </div>

                        </div>
                        <div class="col-6">
                            <label for="" class="form-label">Nombre Completo del Médico:</label>
                            <input type="text" class="form-control form-control-sm" name="nombreMedico" id="nombreMedico">
                        </div>
                        <div class="col-3">
                            <label for="" class="form-label">Email:</label>
                            <input type="text" class="form-control form-control-sm" name="emailMedico" id="emailMedico">
                        </div>


                    </div>

                    <div class="row mb-1 mt-1">
                        <div class="col-4"></div>
                        <div class="col-4">
                            <button type="button" class="btn btn-primary btn-sm shadow-sm" data-bs-toggle="modal" data-bs-target="#items">
                                <i class="bi bi-plus-circle"> Items</i>
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">

                            <table class="table table-bordered table-sm" id="detalle">
                                <thead class=" table-light">
                                    <tr>
                                        <th>Item</th>
                                        <th>Descripcion</th>
                                        <th>Cantidad</th>
                                        <th>Observaciones/Posologia</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="card-footer d-flex justify-content-center">
                        <button type="reset" class="btn btn-secondary btn-sm ms-1">Cancelar</button>
                        <input type="submit" class="btn btn-success  btn-sm ms-1" name="btnGuardar" id="btnGuardar">

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Paciente-->
<div class="modal fade" id="paciente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pacientes</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <table class="table table-bordered table-sm table-hover" id="tblPaciente">
                    <thead class="table-light">
                        <tr>
                            <th>Accion</th>
                            <th>Identificacion</th>
                            <th>Nombre del Paciente</th>
                            <th>Apellidos</th>
                            <th>Fecha de Nacimiento</th>
                            <th>E.P.S</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Accion</th>
                            <th>Identificacion</th>
                            <th>Nombre del Paciente</th>
                            <th>Apellidos</th>
                            <th>Fecha de Nacimiento</th>
                            <th>E.P.S</th>
                        </tr>

                    </tfoot>
                </table>



            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- modal Medico  -->
<div class="modal fade" id="medico" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Medicos Activos</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <table class="table table-bordered table-sm table-hover" id="tblMedico">
                    <thead class="table-light">
                        <tr>
                            <th>Accion</th>
                            <th>Identificacion</th>
                            <th>Nombre del Medico</th>
                            <th>Apellidos</th>
                            <th>Email</th>
                            <th>Especialidad</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Accion</th>
                            <th>Identificacion</th>
                            <th>Nombre del Medico</th>
                            <th>Apellidos</th>
                            <th>Email</th>
                            <th>Especialidad</th>
                        </tr>

                    </tfoot>
                </table>



            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>




<!-- Modal Items-->
<div class="modal fade" id="items" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Items</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <table class="table table-bordered table-sm table-hover" id="tblItems">
                    <thead class="table-light">
                        <tr>
                            <th>Agregar</th>
                            <th>Id</th>
                            <th>Descripción del Item</th>


                        </tr>
                    </thead>
                    <tbody class="table-group-divider">

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Agregar</th>
                            <th>Id</th>
                            <th>Descripción del Item</th>

                        </tr>

                    </tfoot>
                </table>



            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>



<!-- fin del contenedor principal -->
</main>

<script src="<?php echo URLROOT; ?>js/bootstrap.bundle.min.js"></script>
<script src="<?php echo URLROOT; ?>jQuery-3.6.0/jquery-3.6.0.min.js"></script>
<script src="<?php echo URLROOT; ?>DataTables-1.12.1/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/sweetalert2.min.css">
<script src="<?php echo URLROOT; ?>js/sweetalert2.all.min.js"></script>
<script src="<?php echo URLROOT; ?>js/formula.js"></script>

<?php require_once APPROOT . "/views/inc/footer.php"; ?>