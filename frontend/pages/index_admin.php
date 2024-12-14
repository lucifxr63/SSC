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
    <link rel="stylesheet" href="../assets/css/modal/modal_agregados.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

    <title>Tabla ITEM - DataTables</title>


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
                                <th>Acciones</th> <!-- Nueva columna -->
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

    <!-- Modal para editar datos -->
    <div id="editItemModal" class="modal">
        <div class="modal-content">
            <span class="close" id="closeEditModalButton">&times;</span>
            <h2>Editar ITEM</h2>
            <form id="editItemForm">
                <input type="hidden" name="id" required> <!-- Campo oculto para el ID -->
                <input type="text" name="nombre" placeholder="Nombre" required>
                <input type="text" name="descripcion" placeholder="Descripción" required>
                <input type="number" step="any" name="lat" placeholder="Latitud" required>
                <input type="number" step="any" name="lon" placeholder="Longitud" required>
                <button type="submit">Guardar Cambios</button>
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
                    { "data": "lon" },
                    {
                        "data": null, // Columna para acciones
                        "render": function (data, type, row) {
                            return `
                        <button class="edit-btn" data-id="${row.id}" data-nombre="${row.nombre}" data-descripcion="${row.descripcion}" data-lat="${row.lat}" data-lon="${row.lon}">Editar</button>
                        <button class="delete-btn" data-id="${row.id}">Eliminar</button>
                    `;
                        },
                        "orderable": false, // Deshabilitar orden en la columna de acciones
                        "searchable": false // Deshabilitar búsqueda en la columna de acciones
                    }
                ],
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json"
                }
            });

            // Evento para el botón de eliminar
            $('#example').on('click', '.delete-btn', function () {
                const id = $(this).data('id');
                if (confirm('¿Estás seguro de que deseas eliminar este registro?')) {
                    $.ajax({
                        url: "/backend/admin/delete_item.php", // Ruta al backend de eliminación
                        method: "POST",
                        data: { id: id },
                        success: function (response) {
                            if (response.success) {
                                alert('ITEM eliminado exitosamente.');
                                table.ajax.reload(); // Recargar la tabla
                            } else {
                                alert('Error al eliminar el ITEM: ' + response.message);
                            }
                        },
                        error: function () {
                            alert('Error al conectar con el servidor.');
                        }
                    });
                }
            });

            // Evento para el botón de editar
            $('#example').on('click', '.edit-btn', function () {
                const id = $(this).data('id');
                const nombre = $(this).data('nombre');
                const descripcion = $(this).data('descripcion');
                const lat = $(this).data('lat');
                const lon = $(this).data('lon');

                // Abrir modal de edición con los valores prellenados
                $('#editItemModal').css('display', 'block');
                $('#editItemForm input[name="id"]').val(id);
                $('#editItemForm input[name="nombre"]').val(nombre);
                $('#editItemForm input[name="descripcion"]').val(descripcion);
                $('#editItemForm input[name="lat"]').val(lat);
                $('#editItemForm input[name="lon"]').val(lon);
            });

            // Cerrar modal de edición
            $('#closeEditModalButton').click(function () {
                $('#editItemModal').css('display', 'none');
            });

            // Enviar formulario de edición
            $('#editItemForm').submit(function (e) {
                e.preventDefault();

                $.ajax({
                    url: "/backend/admin/edit_item.php", // Backend para editar datos
                    method: "POST",
                    data: $(this).serialize(),
                    success: function (response) {
                        if (response.success) {
                            alert('ITEM editado exitosamente.');
                            table.ajax.reload(); // Recargar la tabla
                            $('#editItemModal').css('display', 'none'); // Cerrar modal
                        } else {
                            alert('Error al editar el ITEM: ' + response.message);
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