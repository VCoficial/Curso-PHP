<?php require_once APPROOT . "/views/inc/header.php"; ?>

<div class="row">

    <div class="col-md-12">
        <br>
        <div class="card">
            <div class="card-header bg-info bg-gradient text-white">
                <button type="button" class="btn btn-primary shadow-sm">Crear Fórmula</button>

            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-2">
                        <div class="mb-3">
                            <label for="" class="form-label">Consecutivo:</label>
                            <input type="text" name="fechaFormula" id="" class="form-control form-control-sm" required>

                        </div>
                    </div>
                    <div class="col-2">
                        <div class="mb-3">
                            <label for="" class="form-label">Fecha:</label>
                            <input type="date" name="fechaFormula" id="" class="form-control form-control-sm" required>

                        </div>
                    </div>
                    <div class="col-5">
                        <div class="mb-3">
                            <label for="" class="form-label">Medico:</label>
                            <select class="form-control form-control-sm" name="medico" id="medico">
                            </select>


                        </div>
                    </div>

                    <hr>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="" class="form-label">Identificación:</label>

                            <select class="form-control form-control-sm" name="paciente" id="paciente">
                            </select>
                        </div>

                    </div>
                    <div class="col-5">
                        <div class="mb-3">
                            <label for="" class="form-label">Paciente:</label>

                            <select class="form-control form-control-sm" name="paciente" id="paciente">
                            </select>
                        </div>

                    </div>
                    <div class="col-3">
                        <div class="mb-3">
                            <label for="" class="form-label">edad:</label>

                            <select class="form-control form-control-sm" name="paciente" id="paciente">
                            </select>


                        </div>
                    </div>

                </div>
                <div class="row mb-2">
                    <div class="col-4">
                        <button type="button" class="btn btn-primary btn-sm shadow-sm" data-bs-toggle="modal" data-bs-target="#items">
                            Agregar Items <i class="bi bi-plus-circle"></i>
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
                    <button type="submit" class="btn btn-success  btn-sm ms-1">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>





<!-- Modal -->
<div class="modal fade" id="items" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
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
<!-- <script src="<?php //echo URLROOT; 
                    ?>js/sweetalert2.all.min.js"></script> -->
<script src="<?php echo URLROOT; ?>js/formula.js"></script>

<?php require_once APPROOT . "/views/inc/footer.php"; ?>