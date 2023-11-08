<?php

// session_start();
// include '../database/conexion.php';

// $nombre = $_SESSION['nombre'];
// $apellido = $_SESSION['apellido'];
// $usuario = $_SESSION['usuario'];
// $email = $_SESSION['email'];

// echo '<h1>Hola ' . $nombre . ' ' . $apellido . ' </h1>'

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBoard-Mujari</title>
    <link rel="stylesheet" href="../css/styles_dashboard.css">
</head>

<body>
    <header>
        <div class="wrapper">
            <nav class="right" id="sidebar">
                <div class="top">
                    <div class="card">
                        <div class="image">
                            <img src="../img/logo.jpeg">
                        </div>

                        <div class="text">
                            <span class="name">Mujari</span>
                            <span class="job">Admin</span>
                        </div>
                    </div>
                </div>

                <div class="container-menu">
                    <ul class="menu">
                        <li>
                            <a href="#" class="nav-link"><i class="bi bi-collection"></i>Ventas</a>
                        </li>
                        <li>
                            <a href="#" class="nav-link" data-toggle="dropdown" data-menu="components"><i
                                    class="bi bi-box"></i>Clientes</a>
                            <div id="components" class="dropdown-content">
                                <a href="#">Crear</a>
                                <a href="../database/verClientes.php">Ver</a>
                                <a href="#">Actualizar</a>
                                <a href="#">Borrar</a>
                            </div>
                        </li>
                        <li>
                            <a href="#"><i class="bi bi-layout-text-sidebar-reverse">
                                </i>Inventario</a>
                        </li>
                        <li>
                            <a href="#"><i class="bi bi-table"></i>Productos</a>
                        </li>
                    </ul>
                </div>

                <div class="bottom">
                    <span>Salir</span>
                </div>
            </nav>

            <div id="content">
                <nav class="top" id="content-nav">
                    <div>
                        <a href="#" class="btn primary" id="btn-sidebar"></a>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <script src="../js/script_dashboard.js"></script>
</body>

</html>