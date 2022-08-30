<?php require_once APPROOT . "/views/inc/header.php"; ?>

<div class="row">

    <div class="col-md-12">
        <br>
        <div class="card">
            <div class="card-header bg-primary bg-gradient text-white">
                <h5>Crear Fórmula</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-2">
                        <div class="mb-3">
                            <label for="" class="form-label">Fecha:</label>
                            <input type="date" name="fechaFormula" id="" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">

                        </div>
                    </div>
                    <div class="col-5">
                        <div class="mb-3">
                            <label for="" class="form-label">Medico:</label>

                            <select class="form-control" name="item" id="medico">
                            </select>


                        </div>
                    </div>
                    <div class="col-5">
                        <div class="mb-3">
                            <label for="" class="form-label">Paciente:</label>

                            <select class="form-control" name="item" id="paciente">
                            </select>


                        </div>
                    </div>
                    <hr>
                </div>
                <div class="row mb-1">
                    <div class="col-1"><label for="">Item:</label></div>
                    <div class="col-4">
                        <select class="form-control" name="item" id="valorOption">
                        </select>
                    </div>
                    <div class="col-6 "> <button type="button" class="btn btn-success" onclick="agregarDetalle()"> + </button></div>
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
<!-- fin del contenedor principal -->
</main>

<script src="<?php echo URLROOT; ?>css/sweetalert2.min.css"></script>
<script src="<?php echo URLROOT; ?>js/sweetalert2.all.min.js"></script>
<script src="<?php echo URLROOT; ?>js/formula.js"></script>
<?php require_once APPROOT . "/views/inc/footer.php"; ?>