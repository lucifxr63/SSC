<?php
// Incluye la conexión a la base de datos
require_once '../conexion/conexion.php';

// Configurar encabezado para JSON
header('Content-Type: application/json');

try {
    // Verificar que los datos sean enviados por POST
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        throw new Exception("Método no permitido. Usa POST.");
    }

    // Capturar los datos enviados
    $nombre = $_POST['nombre'] ?? null;
    $descripcion = $_POST['descripcion'] ?? null;
    $lat = $_POST['lat'] ?? null;
    $lon = $_POST['lon'] ?? null;

    // Validar que todos los datos estén presentes
    if (!$nombre || !$descripcion || !$lat || !$lon) {
        throw new Exception("Todos los campos son obligatorios.");
    }

    // Insertar los datos en la tabla
    $query = "INSERT INTO ITEM (nombre, descripcion, lat, lon) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($db, $query);
    mysqli_stmt_bind_param($stmt, 'ssdd', $nombre, $descripcion, $lat, $lon);

    if (!mysqli_stmt_execute($stmt)) {
        throw new Exception("Error al insertar los datos: " . mysqli_error($db));
    }

    // Respuesta exitosa
    echo json_encode([
        "success" => true,
        "message" => "ITEM agregado exitosamente."
    ]);
} catch (Exception $e) {
    // Respuesta de error
    echo json_encode([
        "success" => false,
        "message" => $e->getMessage()
    ]);
}
?>
