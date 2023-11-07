<?php

session_start();
include '../database/conexion.php';

$nombre = $_SESSION['nombre'];
$apellido = $_SESSION['apellido'];
$usuario = $_SESSION['usuario'];
$email = $_SESSION['email'];

$nombre_completo = $nombre . ' ' . $apellido;

$query = mysqli_query($conexion, "SELECT * FROM usuarios")


    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBoard-Mujari</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"
        crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/styles_dashboard _opc1.css">
</head>

<body>
    <div class="wrapper">
        <nav class="right" id="sidebar">
            <div class="top">
                <div class="card">
                    <div class="image">
                        <img src="../img/logo.jpeg">
                    </div>

                    <div class="text">
                        <span class="name">
                            <?php echo "<h3>$nombre_completo</h3>" ?>
                        </span>
                        <span class="email">
                            <?php echo "<p>$email</p>" ?>
                        </span>
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
                            <a onclick="mostrarModulo('modulo1')">Ver</a>
                            <a onclick="mostrarModulo('modulo2')">Crear</a>
                            <a onclick="mostrarModulo('modulo3')">Actualizar</a>
                            <a onclick="mostrarModulo('modulo4')">Borrar</a>
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
                <a href="../database/logout.php">
                    <span>Salir</span>
                </a>

            </div>
        </nav>

        <div id="content">
            <nav class="top" id="content-nav">
                <div>
                    <a href="#" class="btn primary" id="btn-sidebar"></a>
                </div>
            </nav>
            <section id="general-section">
                <div class="principal">
                    <div class="modulo" id="modulo1">
                        <h3>Listado Clientes</h3>
                        <div class="wrapper">
                            <div class="container">
                                <div class="filter">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="show-row">
                                                <select class="form-control">
                                                    <option value="5" selected="selected">5</option>
                                                    <option value="10">10</option>
                                                    <option value="15">15</option>
                                                    <option value="20">20</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4"></div>
                                        <div class="col-sm-4">
                                            <div class="search-row">
                                                <input type="text" name="search" class="form-control"
                                                    placeholder="Enter your keyword">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <table id="music" class="table table-responsive table-hover">
                                    <thead>
                                        <tr class="myHead">
                                            <th>#</th>
                                            <th>id</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Cédula</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                        while ($datos = mysqli_fetch_array($query)) {
                                            $id = $datos['idusuarios'];
                                            $nombre = $datos['nombre'];
                                            $apellido = $datos['apellido'];
                                            $identificacion = $datos['identificacion'];
                                            $email = $datos['email'];

                                            echo '
                                        <tr data-url="FQS7i2z1CoA">
                                            <td></td>
                                            <td>' . $id . '</td>
                                            <td>' . $nombre . '</td>
                                            <td>' . $apellido . '</td>
                                            <td>' . $identificacion . '</td>
                                            <td>' . $email . '</td>
                                        </tr>
                                        ';
                                        }

                                        ?>
                                    </tbody>
                                </table>
                                <div class="text-center controller">
                                    <ul class="pagination"></ul>
                                    <ul class="pager">
                                        <li><a href="javascript:void(0)" class="prev">Previous</a></li>
                                        <li><a href="javascript:void(0)" class="next">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modulo" id="modulo2">
                        <h3>MODULO 2</h3>
                    </div>
                    <div class="modulo" id="modulo3">
                        <h3>MODULO 3</h3>
                    </div>
                    <div class="modulo" id="modulo4">
                        <h3>MODULO 4</h3>
                    </div>
                </div>
            </section>
        </div>
    </div>
</body>
<script src="../js/script_dashboard.js"></script>
<script src="../js/script_tabla.js"></script>

</html>