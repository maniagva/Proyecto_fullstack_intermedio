<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="cacao, cafe, productos, artesanales">
    <meta name="author" content="maniagva">
    <meta name="description"
        content="
    MUJARI es una empresa sin fines de lucro formada por mujeres comprometidas en transformar el cacao de los cacaocultores del Piedemonte Llanero del Meta en productos de alta calidad. Garantizamos la trazabilidad desde la obtención del grano hasta la fabricación de nuestros productos con amor y dedicación. Estamos felices de llevar la calidad y el cariño de MUJARI a tu hogar y tu familia.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles_modal.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="../css/styles_dashboard.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <title>Mujari cafe y cacao</title>
</head>

<body>
    <?php

    if (isset($_GET['status'])) {
        if ($_GET['status'] == 1) {
            echo '<script>Swal.fire("¡Registro Exitoso!", "", "success");</script>';

        }
        if ($_GET['status'] == 2) {
            echo '<script>Swal.fire("¡Usuario ya existe!", "", "warning");</script>';

        }
        if ($_GET['status'] == 3) {
            echo
                '<script>Swal.fire("¡Usuario o contraseña incorrectos!", "", "error");</script>';
        }
    }
    ?>
    <header class="header">
        <nav>
            <div class="logo">
                <img src="img/logo.jpeg" alt="Logo de Mujari Cafe y cacao">
            </div>

            <div class="navbar">
                <ul class="nav-menu">
                    <li class="nav-item"><a href="#principal" class="nav-link">Quienes Somos</a></li>
                    <li class="nav-item"><a href="#lineas" class="nav-link">Lineas</a></li>
                    <li class="nav-item"><a href="#productos" class="nav-link">Productos</a></li>
                    <li class="nav-item"><a href="#contacto" class="nav-link">Contacto</a></li>
                </ul>
            </div>

            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>

    <!-- Informacion de la empresa -->
    <section id="principal">
        <div class="info">
            <h1>Mujari</h1>
            <p>Somos una empresa de mujeres sin ánimo de lucro, transformamos el grano de cacao de los cacaocultores
                del
                Piedemonte Llanero del Meta. Ofrecemos productos de calidad siguiendo los procesos y controlando la
                trazabilidad, desde el momento de la obtención del grano hasta la fabricación de los diversos
                productos
                finales que ofrece MUJARI. Nuestros productos están elaborados con cariño para ti y tu familia, y
                nos
                hace feliz llegar a tu hogar.
            </p>
            <button id="btn_registro">Registrate</button>
            <button id="btn_ingreso">Ingresa</button>
        </div>
    </section>
    <!-- seccion modal -->
    <section>
        <div id="myModal" class="modal">
            <div class="modal-content">
                <h2>Registro</h2>
                <form action="back/registro.php" method="post" id="registrationForm"
                    onSubmit="return validarPassword()">
                    <label for="nombre">Nombres:</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Nombre" required>
                    <label for="apellido">Apellidos:</label>
                    <input type="text" id="apellido" name="apellido" placeholder="Apellido" required>
                    <label for="identificacion">Numero de identificacion (Usuario):</label>
                    <input type="text" id="identificacion" name="identificacion" placeholder="Identificacion" required>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="xxxxx@ejemplo.com" required
                        autocomplete="email">
                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" placeholder="Contraseña" required
                        autocomplete="new-password">
                    <label for="password_confirm">Confirme contraseña:</label>
                    <input type="password" id="password_confirm" name="password_confirm"
                        placeholder="Confirme contraseña" required autocomplete="new-password">
                    <br>
                    <button class="register" type="submit" name="btnRegister">Continuar</button>
                    <button class="close" id="closeModalBtn">Cerrar</button>
                </form>
            </div>
        </div>
        <div id="login-modal" class="modal-login">
            <div class="modal-content-login">
                <h2>Iniciar sesión</h2>
                <form action="back/login.php" method="post" id="login-form">
                    <input name="usuario" type="text" placeholder="Usuario" id="username" required
                        autocomplete="username">
                    <input name="contrasena" type="password" placeholder="Contraseña" id="password_login" required
                        autocomplete="new-password">
                    <br>
                    <button name="login_btn" class="login" type="submit">Iniciar sesión</button>
                    <button class="close-login" id="close-modal-login">Cerrar</button>
                </form>
            </div>
        </div>
    </section>


    <!-- lineas -->
    <section id="lineas">
        <div class="lineas_countainer">
            <div class="linea_cacao">
                <img src="img/linea_cacao.jpg" alt="Imagen cacao">
                <h3>Linea cacao</h3>
            </div>
            <div class="linea_cafe">
                <img src="img/linea_cafe.jpg" alt="imagen cafe">
                <h3>Linea cafe</h3>
            </div>
            <div class="linea_licores">
                <img src="img/licores.jpg" alt="imagen licores">
                <h3>Licores</h3>
            </div>
        </div>
    </section>

    <!-- productos -->
    <section id="productos">
        <h2>Nuestros Productos</h2>
        <div class="lista_productos">
            <div class="lista1">
                <div>
                    <img src="img/chocolate_de_mesa.jpeg" alt="">
                    <h3>Chocolate de mesa</h3>
                </div>
                <div>
                    <img src="img/chocolate_instantaneo.jpg" alt="">
                    <h3>Chocolate instantaneo</h3>
                </div>
                <div>
                    <img src="img/chucula.png" alt="">
                    <h3>Chucula en polvo</h3>
                </div>
                <div>
                    <img src="img/grageas_chocolate.jpg" alt="">
                    <h3>Grageas de chocolate</h3>
                </div>
            </div>
            <div class="lista2">
                <div>
                    <img src="img/cafe_premium.jpg" alt="">
                    <h3>Cafe premium</h3>
                </div>
                <div>
                    <img src="img/vino_cafe.jpeg" alt="">
                    <h3>Vino de Cafe</h3>
                </div>
                <div>
                    <img src="img/crema_cafe.jpeg" alt="">
                    <h3>Crema de Cafe</h3>
                </div>
                <div>
                    <img src="img/crema_whiskey.jpg" alt="">
                    <h3>Crema de Whiskey</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- COntacto -->
    <footer id="contacto">
        <div class="main_footer">
            <div class="datos_contacto">
                <h3>Contactanos</h3>
                <ul>
                    <li>
                        <i><img src="img/telefono.png" alt="">+ 57 310 7533116</>
                    </li>
                    <br>
                    <li>
                        <i><img src="img/correo.png" alt="">mujaricafeycacao@gmail.com</i>
                    </li>
                    <br>
                    <li>
                        <i><img src="img/ubicacion.png" alt="">San Luis de Cubarral - Meta - Colombia</i>
                    </li>
                </ul>
            </div>
            <div class="redes_sociales">
                <a href="https://www.instagram.com" target="_blank">
                    <img src="img/instagram.png" alt="Instagram">
                </a>
                <a href="https://www.facebook.com" target="_blank">
                    <img src="img/facebook.png" alt="Facebook">
                </a>
                <a href="https://www.pinterest.com" target="_blank">
                    <img src="img/pinterest.png" alt="Pinterest">
                </a>
                <a href="https://web.whatsapp.com" target="_blank">
                    <img src="img/whatsapp.png" alt="WhatsApp">
                </a>
            </div>
        </div>
        <div class="copyright">
            <span>© Copyright 2023 | Pagina creada por maniagva</span>
        </div>
    </footer>
    <script src="js/script_menu.js"></script>
    <script src="js/script_modal.js"></script>
    <script src="js/script_contrasena.js"></script>
</body>

</html>