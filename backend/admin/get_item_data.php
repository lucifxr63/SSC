<?php
// Incluye la conexión a la base de datos
require_once '../conexion/conexion.php'; // Ajusta la ruta según tu estructura

// Configurar encabezados
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *'); // Permitir solicitudes desde cualquier origen (ajusta según tus necesidades)
header('Access-Control-Allow-Methods: GET');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With');

try {
    // Verificar si la conexión a la base de datos está activa
    if (!$db) {
        throw new Exception("Error al conectar a la base de datos.");
    }

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
        "count" => count($data),
        "data" => $data
    ]);
} catch (Exception $e) {
    // Si ocurre un error, devolverlo como JSON
    echo json_encode([
        "success" => false,
        "message" => $e->getMessage()
    ]);
}
?>
