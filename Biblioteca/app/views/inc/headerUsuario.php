
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
<link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">


<style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <!-- Custom styles for this template -->
  <link href="dashboard.css" rel="stylesheet">

</head>

<body>
  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Importaciones Arias</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
      </div>
    </div>
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link bg-dark text-light disabled" href="#">
          <?php
          //Poner la zona horaria
          date_default_timezone_set('America/Bogota');
          echo 'Hoy es '.date('d/M/Y')
          ?>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link bg-dark text-light" href="#"><i class="bi bi-person-circle">
          <b>
            <?php 
            echo $_SESSION['usuarioActivo'];
            ?>
          </b>
          </i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link bg-dark text-light" href="cerrarSistema.php"><i class="bi bi-box-arrow-right"> Salir del Sistema</i></a>
      </li>
    </ul>
  </header>
  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="panelPacientes.php">
                <span data-feather="home"></span>
                Inicio
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="app/listaMedicosEspecialidad.php">
                <span data-feather="file"></span>
                Listar Medicos por especialidad
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="frmAgendarCita.php">
                <span data-feather="shopping-cart"></span>
                Agendar Cita con Medico
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="users"></span>
                Imprimir Historia Clinica
              </a>
            </li>
          </ul>
        </div>
      </nav>