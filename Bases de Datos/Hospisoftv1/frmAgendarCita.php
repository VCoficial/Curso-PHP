<?php
session_start();
error_reporting(0);
if (!isset($_SESSION['usuarioActivo'])) {
    header('location:./index.php');
} else {
    require_once 'app/listaMedicos.php';
    require_once 'plantilla/cabeceraPacientes.php';
    var_dump($_SESSION['idPaciente']);
?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1>GRAFICAS</h1>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-<?php echo $_SESSION['tipo']; ?> alert-dismissible fade show" role="alert">
                        <?php echo $_SESSION['mensaje'];
                        /* session_unset(); */
                        ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
                <div class="col-md-5 text-center">
                    <div class="card">
                        <img src="https://w0.peakpx.com/wallpaper/955/713/HD-wallpaper-doctor-medical.jpg" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-body p-4 text-center">
                            <h5 class="card-title">Agendar Cita</h5>
                            <form action="app/insertarCita.php" method="POST">
                                <div class="mb-2 p-3">
                                    <label for="fechaCita" class="form-label">Fecha de la cita</label>
                                    <input type="date" class="form-control" id="fecha" name="fecha">
                                </div>
                                <!--<div class="mb-3">
                                    <label for="horaCita" class="form-label">Hora de la cita</label>
                                    <input type="time" class="form-control" id="horaCita" name="horaCita">
                                </div> -->
                                <div class="mb-3">
                                    <label for="horaCita">Hora Cita</label>
                                    <select name="hora" id="hora">
                                        <option value="0800">08:00</option>
                                        <option value="0900">09:00</option>
                                        <option value="1000">10:00</option>
                                        <option value="1100">11:00</option>
                                        <option value="1300">01:00</option>
                                        <option value="1400">02:00</option>
                                        <option value="1500">03:00</option>
                                        <option value="1600">04:00</option>
                                        <option value="1700">05:00</option>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <label for="medico">Medico</label>
                                    <select name="medico" id="medico">
                                        <!-- plantillas php para html con Php puro -->
                                        <?php foreach ($resultado as $medico) : ?>
                                            <option value="<?php echo $medico->idMedico; ?>">
                                                <?php echo $medico->nombreMedico . ' ' . $medico->apellidosMedico ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <label for="motivoCita">Motivo de la consulta</label>
                                <div class="mb-3">
                                    <textarea name="motivo" id="motivo" cols="60" rows="10"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="medico">Usuario</label>
                                    <input type="text" name="paciente" id="paciente" readonly value="<?php echo $_SESSION['idPaciente']; ?>">
                                </div>
                                <button type="submit" class="btn btn-primary">Agendar</button>
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