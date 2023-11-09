<?php
session_start();
include '../database/conexion.php';

if (isset($_POST['btnDelete'])) {
    $id_cliente = $_POST['id_cliente'];

    $query = "DELETE FROM usuarios WHERE idusuarios = '$id_cliente'";

    if (mysqli_query($conexion, $query)) {
        header('Location: ../app/index.php?status=4');
    } else {
        echo "Error al eliminar el cliente: " . mysqli_error($conexion);
    }

    mysqli_close($conexion);
}
?>