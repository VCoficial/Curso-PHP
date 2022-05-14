<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="./images/nurse.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>C.M. Lourdes</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <img src="./images/LOGO.png" class="img-fluid" alt="...">
            </div>
            <div class="col-md-2">
                Cra 100 con 98<br>
                Edificio La Celba<br>
                Cali-Valle
            </div>
            <div class="col-md-2">
                Emaio : clinicalourdes@gmail.com<br>
                Edificio La Celba<br>
                Cali-Valle
            </div>

            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">+</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php"><i class="bi bi-house-heart-fill"> Inicio</i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="panel.php"><i class="bi bi-info-square-fill"> Acerca de</i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="bi bi-journal-plus"> Citas</i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="bi bi-people-fill"> Contacto</i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="" data-bs-toggle="modal" data-bs-target="#frmLogin"><i class="bi bi-key-fill"> Login</i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="row">
                <div class="col-md-5">
                    <div class="card mt-3">
                        <div class="card-body">
                            <form action="crud/insertarContacto.php" method="POST">
                                <div class="mb-3">
                                    <label for="nombre" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" name="nombre" id="nombre">
                                </div>
                                <div class="mb-3">
                                    <label for="nombre" class="form-label">Apellido</label>
                                    <input type="text" class="form-control" name="apellidos" id="apellidos">
                                </div>
                                <div class="mb-3">
                                    <label for="nombre" class="form-label">Email</label>
                                    <input type="text" class="form-control" name="email" id="email">
                                </div>
                                <div class="mb-3">
                                    <label for="nombre" class="form-label">Telefono</label>
                                    <input type="text" class="form-control" name="telefono" id="telefono">
                                </div>
                                <div class="mb-3">
                                    <label for="nombre" class="form-label">Movil</label>
                                    <input type="text" class="form-control" name="movil" id="movil">
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card mt-3">
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="fecha_nace" class="form-label">Fecha_Nace</label>
                                <input type="date" class="form-control" name="fecha_nace" id="fecha_nace">
                            </div>
                            <div class="mb-3">
                                <label for="eps" class="form-label">E.P.S</label>
                                <input type="eps" class="form-control" name="eps" id="eps">
                            </div>
                            <div class="mb-3">
                                <label for="usuario" class="form-label">Usuario del Sistema</label>
                                <input type="text" class="form-control" name="usuario" id="usuario">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="text" class="form-control" name="password" id="password">
                            </div>
                            <button type="submit" class="btn btn-primary"><i class="bi bi-save-fill"> Guardar</i></button>
                            <button type="cancel" class="btn btn-secondary"><i class="bi bi-save-fill"> Cancelar</i></button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-5">

                </div>

                <div class="col-md-5">
                    <!-- Modal -->
                    <div class="modal fade" id="frmLogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Login del Sistema</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="Usuario" class="form-label">Usuario</label>
                                        <input type="text" class="form-control" id="usuario" aria-describedby="usuarioHelp">
                                        <div id="usuarioHelp" class="form-text">Ingrese su usuario registrado en el sistema</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="Password" class="form-label">Password</label>
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                    <a href="frmRegistroPaciente.php"> ¿Aun no tiene cuenta? Registrese Aqui</a>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Guardar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="row mt-5">
                        <div class="col-md-4">
                            <div class="card">
                                <img src="./images/especialista.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Medicos Especialistas</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Ver Más</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="./images/hospitaliza.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Hospitalización</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Ver Más</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="./images/Microscopio.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Laboratorios</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Ver Más</a>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-5 p-5 bg-dark text-light">
                            <div class="col-md-6 text-center">
                                <i class="bi bi-hospital-fill"></i> <br>
                                Cra 100 con 98 <br>
                                Edificio La Ceiba <br>
                                Cali - Valle
                            </div>
                            <div class="col-md-6">
                                <form>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1">
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
        </div>

        <!-- Fin contenedor principal -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
        <script src="dashboard.js"></script>
</body>

</html>