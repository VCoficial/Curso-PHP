<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.98.0">
  <title><?php echo SITENAME ?></title>

  <link href="<?php echo URLROOT; ?>css/bootstrap.min.css" rel="stylesheet">
  <!-- Favicons -->

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>css/menu.css">

</head>

<body>


  <?php
  error_reporting(0);
  session_start();
  ?>


  <nav class="navbar navbar-expand-lg text-white  ">
    <div class="container-fluid text-white mt-3  ">
      <a class="navbar-brand text-white " href="<?php echo URLROOT; ?> Menu ">BIENVENIDO</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-white " aria-current="page"><?php echo $_SESSION["iniciar"] ?></a>
          </li>
        </ul>

        <a class="btn btn-danger" href="<?php echo URLROOT;?>Inicio">Cerrar Sesión</a>

      </div>
    </div>
  </nav>
  <hr class="text-white border-1 border">