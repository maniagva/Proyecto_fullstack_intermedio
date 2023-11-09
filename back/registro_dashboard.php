<?php

include '../database/conexion.php';

if (isset($_POST['btnRegister'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $identificacion = $_POST['identificacion'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $pass_en = base64_encode($pass);

    $validacion = mysqli_query($conexion, "SELECT * FROM usuarios where identificacion = '$identificacion'");
    $cant = mysqli_num_rows($validacion);

    if ($cant == 1) {
        header('location:../app/index.php?status=2');
    } else {
        mysqli_query($conexion, "INSERT INTO usuarios(nombre, apellido, identificacion, email, pass) VALUES ('$nombre', '$apellido', '$identificacion', '$email', '$pass_en')");

        header('location:../app/index.php?status=1');
    }
}

?>