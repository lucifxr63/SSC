<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!--=============== REMIXICON ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="../assets/css/styles.css">

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

    <title>PROTOTIPO PAGINA ECOMERCE - DataTable</title>
</head>

<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">
                <img src="assets/img/imagenpag2.png" alt="logo"> *MARCA POR DEFINIR*
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#home" class="nav__link active-link">Home</a>
                    </li>
                    <li class="nav__item">
                        <a href="#program" class="nav__link">Servicios</a>
                    </li>
                    <li class="nav__item">
                        <a href="#data" class="nav__link">Datos</a>
                    </li>
                    <li class="nav__item">
                        <a href="#vehicles" class="nav__link">Vehículos</a>
                    </li>

                    <div class="nav__link">
                        <a href="#footer" class="button nav__button">Registrate Ahora</a>
                    </div>
                    <li class="nav__item">
                        <a href="../../index.html" class="nav__link">Cerrar Sesión</a>
                    </li>
                </ul>

                <div class="nav__close" id="nav-close">
                    <i class="ri-close-line"></i>
                </div>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-menu-line"></i>
            </div>
        </nav>
    </header>

    <!--==================== MAIN ====================-->
    <main class="main">
        <section class="datatable section" id="datatable">
            <div class="container">
                <div class="section__data">
                    <h2 class="section__subtitle">Información en Tabla</h2>
                    <div class="section__titles">
                        <h1 class="section__title-border">TABLA</h1>
                        <h1 class="section__title">DE DATOS</h1>
                    </div>
                </div>

                <div class="datatable__container">
                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Latitud</th>
                                <th>Longitud</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Los datos serán cargados dinámicamente por DataTables -->
                        </tbody>
                    </table>

                </div>
            </div>
        </section>
    </main>

    <!--==================== PIE DE PÁGINA ====================-->
    <footer class="footer section" id="footer">
        <!-- Contenido del pie de página -->
    </footer>

    <!--=============== SCROLL UP ===============-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-line"></i>
    </a>

    <!--=============== SCRIPTS ===============-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable({
                "ajax": {
                    "url": "https://ssc-production-3cb4.up.railway.app/backend/admin/get_test_data.php",
                    "dataSrc": "data"
                },
                "columns": [
                    { "data": "id" },
                    { "data": "nombre" },
                    { "data": "descripcion" },
                    { "data": "fecha_creacion" }
                ],
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json"
                }
            });
        });

    </script>

</body>

</html>