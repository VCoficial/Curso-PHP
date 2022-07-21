<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title><?php echo SITENAME ?></title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/starter-template/">

<link href="<?php echo URLROOT ;?>css/bootstrap.min.css" rel="stylesheet">
    <!-- Favicons -->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

  <!-- Custom styles for this template -->
  <link href="dashboard.css" rel="stylesheet">

</head>
<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><i class="bi bi-plus-lg"></i></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php"><i class="bi bi-house-heart-fill"> Inicio</i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=""><i class="bi bi-info-square-fill"> Acerca de</i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=""><i class="bi bi-journal-plus"> Libros</i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=""><i class="bi bi-people-fill"> Contacto</i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="" data-bs-toggle="modal" data-bs-target="#frmLogin"><i class="bi bi-key-fill"> Usuario</i></a>
                        </li>
                    </ul>
                    <a class="nav-link text-light" href="" data-bs-toggle="modal" data-bs-target="#frmLoginmedico"><i class="bi bi-person-rolodex"> Bibliotecario</i></a>
                </div>
            </div>
        </nav>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://www.city.ac.uk/__data/assets/image/0007/575620/varieties/breakpoint-max.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block text-light">
                        <h5>Médicos especialistas </h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://www.city.ac.uk/__data/assets/image/0007/575620/varieties/breakpoint-max.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block text-light">
                        <h5>Laboratorios de ultimá tecnologia</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://www.city.ac.uk/__data/assets/image/0007/575620/varieties/breakpoint-max.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block text-light">
                        <h5>Atención personalizada</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://img2.rtve.es/i/?w=1600&i=1650645866401.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Médicos especialistas</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary"> ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://vantravellers.com/wp-content/uploads/2021/02/libros-recomendados-que-debes-leer-en-tu-vida.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Hospitalización</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary"> ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://img2.rtve.es/i/?w=1600&i=1650645866401.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Médicos especialistas</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary"> ver más</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Medico -->
        <div class="modal fade" id="frmLoginmedico" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Login de Medico</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="app/validarIngresoMedico.php" method="POST">
                            <div class="mb-3">
                                <label for="usuario" class="form-label">Identificacion</label>
                                <input type="text" class="form-control" id="identificacion" name="identificacion" aria-describedby="usuarioHelp">
                                <div id="usuarioHelp" class="form-text">Ingrese su usuario registrado en el sistema</div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <a href="frmRegistroPaciente.php">¿Aun no tiene cuenta? Registrese aqui</a>
                    </div>
                    <div class="modal-footer">
                        <input type="reset" class="btn btn-secondary" data-bs-dismiss="modal" value="Cancelar">
                        <input type="submit" class="btn btn-primary" value="Guardar">
                    </div>
                    </form>
                </div>
            </div>
        </div>
    <!-- Cierre modal del Medico -->
        <!-- Modal Login-->
        <div class="modal fade" id="frmLogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Login del Sistema</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="app/validarIngresoPaciente.php" method="post">
                            <div class="mb-3">
                                <label for="Usuario" class="form-label">Usuario</label>
                                <input type="text" class="form-control" id="usuario" name="usuario" aria-describedby="usuarioHelp">
                                <div id="usuarioHelp" class="form-text">Ingrese su usuario registrado en el sistema</div>
                            </div>
                            <div class="mb-3">
                                <label for="Password" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="password">
                            </div>
                            <a href="frmRegistroPaciente.php"> ¿Aun no tiene cuenta? Registrese Aqui</a>
                    </div>
                    <div class="modal-footer">
                        <input type="reset" class="btn btn-secondary" data-bs-dismiss="modal" value="Cancelar">
                        <input type="submit" class="btn btn-primary" value="Enviar">
                    </div>
                    </form>
                </div>
            </div>
        </div>
    <!-- Cierre modal del login -->
    </div>



<?php require_once 'inc/footer.php' ; ?>