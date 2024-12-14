<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon">

    <!--=============== REMIXICON ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="../assets/css/styles.css">

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

    <title>Tabla ITEM - DataTables</title>

    <style>
        /* Estilos mejorados para el botón flotante */
        .floating-button {
            position: fixed;
            bottom: 20px;
            left: 20px;
            background: linear-gradient(135deg, #007bff, #0056b3);
            color: #fff;
            border: none;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            cursor: pointer;
            z-index: 1000;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .floating-button:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.4);
        }

        .floating-button i {
            font-size: 24px;
        }

        /* Estilos mejorados para el modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 1001;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(5px);
            animation: fadeIn 0.3s ease-out;
        }

        .modal-content {
            background: #f9f9f9;
            margin: 10% auto;
            padding: 30px;
            border-radius: 16px;
            width: 40%;
            max-width: 600px;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            animation: slideDown 0.3s ease-out;
        }

        .modal-content h2 {
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }

        .modal-content form {
            display: flex;
            flex-direction: column;
            gap: 15px;
            width: 100%;
        }

        .modal-content form input {
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
        }

        .modal-content form button {
            padding: 12px;
            background: linear-gradient(135deg, #007bff, #0056b3);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .modal-content form button:hover {
            background: linear-gradient(135deg, #0056b3, #003f7f);
        }

        .modal-content .close {
            position: absolute;
            top: 15px;
            right: 15px;
            color: #aaa;
            font-size: 24px;
            font-weight: bold;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .modal-content .close:hover {
            color: #333;
        }

        /* Animaciones */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes slideDown {
            from {
                transform: translateY(-50px);
            }

            to {
                transform: translateY(0);
            }
        }
    </style>

</head>

<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">
                <img src="../assets/img/imagenpag2.png" alt="logo"> *MARCA POR DEFINIR*
            </a>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#datatable" class="nav__link active-link">Tabla ITEM</a>
                    </li>
                    <li class="nav__item">
                        <a href="../../index.html" class="nav__link">Cerrar Sesión</a>
                    </li>
                </ul>
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
                        <h1 class="section__title">ITEM</h1>
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

    <!-- Botón flotante -->
    <button class="floating-button" id="openModalButton">
        <i class="ri-add-line"></i>
    </button>

    <!-- Modal para ingresar datos -->
    <div id="addItemModal" class="modal">
        <div class="modal-content">
            <span class="close" id="closeModalButton">&times;</span>
            <h2>Agregar Nuevo ITEM</h2>
            <form id="addItemForm">
                <input type="text" name="nombre" placeholder="Nombre" required>
                <input type="text" name="descripcion" placeholder="Descripción" required>
                <input type="number" step="any" name="lat" placeholder="Latitud" required>
                <input type="number" step="any" name="lon" placeholder="Longitud" required>
                <button type="submit">Guardar</button>
            </form>
        </div>
    </div>

    <!--=============== SCRIPTS ===============-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            const table = $('#example').DataTable({
                "ajax": {
                    "url": "/backend/admin/get_item_data.php",
                    "dataSrc": "data"
                },
                "columns": [
                    { "data": "id" },
                    { "data": "nombre" },
                    { "data": "descripcion" },
                    { "data": "lat" },
                    { "data": "lon" }
                ],
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json"
                }
            });

            // Abrir modal
            $('#openModalButton').click(function () {
                $('#addItemModal').css('display', 'block');
            });

            // Cerrar modal
            $('#closeModalButton').click(function () {
                $('#addItemModal').css('display', 'none');
            });

            // Enviar formulario
            $('#addItemForm').submit(function (e) {
                e.preventDefault();

                $.ajax({
                    url: "/backend/admin/add_item.php", // Backend para agregar datos
                    method: "POST",
                    data: $(this).serialize(),
                    success: function (response) {
                        if (response.success) {
                            alert('ITEM agregado exitosamente.');
                            table.ajax.reload(); // Recargar la tabla
                            $('#addItemModal').css('display', 'none'); // Cerrar modal
                            $('#addItemForm')[0].reset(); // Resetear formulario
                        } else {
                            alert('Error al agregar el ITEM: ' + response.message);
                        }
                    },
                    error: function () {
                        alert('Error al conectar con el servidor.');
                    }
                });
            });
        });
    </script>

</body>

</html>