<?php
session_start();
include '../database/conexion.php';

if (isset($_POST['btnUpdate'])) {
    $id_cliente = $_POST['id_cliente'];
    $nuevo_nombre = $_POST['nuevo_nombre'];
    $nuevo_apellido = $_POST['nuevo_apellido'];
    $nueva_identificacion = $_POST['nueva_identificacion'];
    $nuevo_email = $_POST['nuevo_email'];

    $query = "UPDATE usuarios SET nombre = '$nuevo_nombre', apellido = '$nuevo_apellido', identificacion = '$nueva_identificacion', email = '$nuevo_email' WHERE idusuarios = '$id_cliente'";

    if (mysqli_query($conexion, $query)) {
        header('Location: ../app/index.php?status=3');
    } else {
        echo "Error al actualizar el cliente: " . mysqli_error($conexion);
    }

    mysqli_close($conexion);
}
?>