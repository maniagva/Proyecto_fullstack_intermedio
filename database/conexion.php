<?php
// archivo conexion a base de datos
$server = "localhost";
$user = "root";
$pass = "75103837";
$db = "mujari";

$conexion = new mysqli($server, $user, $pass, $db);

if ($conexion->connect_errno) {
    echo "error de conexion";
    exit();
}
?>