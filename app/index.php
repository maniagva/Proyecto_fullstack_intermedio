<?php

session_start();
include '../database/conexion.php';

$nombre = $_SESSION['nombre'];
$apellido = $_SESSION['apellido'];
$usuario = $_SESSION['usuario'];
$email = $_SESSION['email'];

echo '<h1>Hola ' . $nombre . ' ' . $apellido . ' </h1>'

    ?>