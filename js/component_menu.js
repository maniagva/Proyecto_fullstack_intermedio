class menumain extends HTMLElement{
    constructor(){
        super();
    }
    connectedCallback(){
        this.innerHTML = `
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
                            <a href="../app/verClientes.php">Ver</a>
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
    <script src="../js/script_dashboard.js"></script>
        `;
    }
}

window.customElements.define("menu-main", menumain)
