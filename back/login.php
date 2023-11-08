<?php

include '../database/conexion.php';

if (isset($_POST['login_btn'])) {
    $id = $_POST['usuario'];
    $pass = $_POST['contrasena'];
    $pass_code = base64_encode($pass);

    $consulta = mysqli_query($conexion, "SELECT * FROM usuarios WHERE identificacion ='$id' and pass = '$pass_code'");

    $existe = mysqli_num_rows($consulta);

    if ($existe == 1) {
        session_start();
        while ($datos = mysqli_fetch_array($consulta)) {
            $_SESSION['nombre'] = $datos['nombre'];
            $_SESSION['apellido'] = $datos['apellido'];
            $_SESSION['usuario'] = $datos['identificacion'];
            $_SESSION['email'] = $datos['email'];
        }
        header("Location:../app/index.php");
    } else {
        header('location:../index.php?status=3');
    }
}

?>