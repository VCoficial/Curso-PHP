<?php

session_start(); // Activa las vairables de sesión
session_destroy(); // Destruye el arreglo de variables
session_unset(); // Crea el arreglo de variables de sesión vacio

header('Location:index.php');
