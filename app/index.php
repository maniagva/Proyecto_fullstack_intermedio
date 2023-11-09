<?php

session_start();
include '../database/conexion.php';

$nombre = $_SESSION['nombre'];
$apellido = $_SESSION['apellido'];
$usuario = $_SESSION['usuario'];
$email = $_SESSION['email'];

$nombre_completo = $nombre . ' ' . $apellido;

$query = mysqli_query($conexion, "SELECT * FROM usuarios");

if (isset($_GET['status'])) {
    if ($_GET['status'] == 1) {
        echo '<script>alert("registro éxitoso");</script>';
    }
    if ($_GET['status'] == 2) {
        echo '<script>alert("Usuario ya existe");</script>';
    }
    if ($_GET['status'] == 3) {
        echo '<script>alert("Registro actualizado exitosamente");</script>';
    }
    if ($_GET['status'] == 4) {
        echo '<script>alert("Registro borrado ");</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBoard-Mujari</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"
        crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/styles_dashboard.css">
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
                        <div>
                            <form action="../back/registro_dashboard.php" method="post" id="registrationForm"
                                onSubmit="return validarPassword()">
                                <h3>Registrar Nuevo Cliente</h3>
                                <div class="form-group">
                                    <label for="nombre">Nombre:</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre"
                                        placeholder="Nombre" required>
                                </div>
                                <div class="form-group">
                                    <label for="apellido">Apellido:</label>
                                    <input type="text" class="form-control" id="apellido" name="apellido"
                                        placeholder="Apellido" required>
                                </div>
                                <div class="form-group">
                                    <label for="identificacion">Numero de identificacion (Usuario):</label>
                                    <input type="text" class="form-control" id="identificacion" name="identificacion"
                                        placeholder="Identificacion" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="xxxxx@ejemplo.com" required autocomplete="email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Contraseña:</label>
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="Contraseña" required autocomplete="new-password">
                                </div>
                                <div class="form-group">
                                    <label for="password_confirm">Confirme contraseña:</label>
                                    <input type="password" class="form-control" id="password_confirm"
                                        name="password_confirm" placeholder="Confirme contraseña" required
                                        autocomplete="new-password">
                                </div>
                                <br>
                                <button class="btn_dashboard" type="submit" name="btnRegister">Guardar</button>
                            </form>
                        </div>
                    </div>

                    <div class="modulo" id="modulo3">
                        <div>
                            <form action="../back/actualizar_cliente.php" method="post">
                                <h3>Actualizar Cliente</h3>
                                <div class="form-group">
                                    <label for="id_cliente">ID del Cliente a Actualizar</label>
                                    <input type="text" class="form-control" id="id_cliente" name="id_cliente"
                                        placeholder="ID del Cliente" required>
                                </div>
                                <div class="form-group">
                                    <label for="nuevo_nombre">Nuevo Nombre:</label>
                                    <input type="text" class="form-control" id="nuevo_nombre" name="nuevo_nombre"
                                        placeholder="Nuevo Nombre" required>
                                </div>
                                <div class="form-group">
                                    <label for="nuevo_apellido">Nuevo Apellido:</label>
                                    <input type="text" class="form-control" id="nuevo_apellido" name="nuevo_apellido"
                                        placeholder="Nuevo Apellido" required>
                                </div>
                                <div class="form-group">
                                    <label for="nueva_identificacion">Nueva Identificación:</label>
                                    <input type="text" class="form-control" id="nueva_identificacion"
                                        name="nueva_identificacion" placeholder="Nueva Identificación" required>
                                </div>
                                <div class="form-group">
                                    <label for="nuevo_email">Nuevo Email:</label>
                                    <input type="email" class="form-control" id="nuevo_email" name="nuevo_email"
                                        placeholder="Nuevo Email" required>
                                </div>
                                <br>
                                <button class="btn_dashboard" type="submit" name="btnUpdate">Actualizar</button>
                            </form>
                        </div>
                    </div>

                    <div class="modulo" id="modulo4">

                        <div>
                            <form action="../back/eliminar_cliente.php" method="post">
                                <h3>Eliminar Cliente</h3>
                                <div class="form-group">
                                    <label for="id_cliente">ID del Cliente a Eliminar:</label>
                                    <input type="text" class="form-control" id="id_cliente" name="id_cliente"
                                        placeholder="ID del Cliente" required>
                                </div>
                                <button class="btn_dashboard" type="submit" name="btnDelete">Eliminar Cliente</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</body>
<script src="../js/script_dashboard.js"></script>
<script src="../js/script_tabla.js"></script>
<script src="../js/script_contrasena.js"></script>

</html>