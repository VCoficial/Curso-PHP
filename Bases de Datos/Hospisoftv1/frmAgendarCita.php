<?php
session_start();
if (!isset($_SESSION['usuarioActivo'])) {
    header('Location:index.php');
} else {
    require_once 'plantilla/cabeceraPacientes.php';
?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1>GRAFICAS</h1>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-5 text-center">
                    <img src="images/médicos-influencers-en-Instagram.jpg" class="img-fluid">
                </div>
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-body p-4">
                            <h5 class="card-title text-center">Agendar Cita</h5>
                            <form>
                                <div class="mb-3">
                                    <label for="fechaCita" class="form-label">Fecha de la cita</label>
                                    <input type="date" class="form-control" id="fechaCita" name="fechaCita">
                                </div>
                                <div class="mb-3">
                                    <label for="horaCita" class="form-label">Hora de la cita</label>
                                    <input type="time" class="form-control" id="horaCita" name="horaCita">
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php
    require_once 'plantilla/footer.php';
}
    ?>