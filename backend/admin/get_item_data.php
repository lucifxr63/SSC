<?php
// Incluye la conexión a la base de datos
require_once '../conexion/conexion.php'; // Ajusta la ruta según tu estructura

// Configurar el encabezado para devolver JSON
header('Content-Type: application/json');

try {
    // Consulta SQL para obtener los datos de la tabla ITEM
    $query = "SELECT id, nombre, descripcion, lat, lon FROM ITEM";
    $result = mysqli_query($db, $query);

    // Verificar si la consulta es válida
    if (!$result) {
        throw new Exception("Error en la consulta: " . mysqli_error($db));
    }

    // Crear un arreglo para almacenar los resultados
    $data = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row; // Agregar cada fila al arreglo
    }

    // Enviar la respuesta como JSON
    echo json_encode([
        "success" => true,
        "data" => $data
    ]);
} catch (Exception $e) {
    // Si ocurre un error, devolverlo como JSON
    echo json_encode([
        "success" => false,
        "message" => $e->getMessage()
    ]);
}
