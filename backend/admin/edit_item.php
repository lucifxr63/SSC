<?php
require_once '../conexion/conexion.php';
header('Content-Type: application/json');

try {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        throw new Exception("Método no permitido. Usa POST.");
    }

    $id = $_POST['id'] ?? null;
    $nombre = $_POST['nombre'] ?? null;
    $descripcion = $_POST['descripcion'] ?? null;
    $lat = $_POST['lat'] ?? null;
    $lon = $_POST['lon'] ?? null;

    if (!$id || !$nombre || !$descripcion || !$lat || !$lon) {
        throw new Exception("Todos los campos son obligatorios.");
    }

    $query = "UPDATE ITEM SET nombre = ?, descripcion = ?, lat = ?, lon = ? WHERE id = ?";
    $stmt = mysqli_prepare($db, $query);
    mysqli_stmt_bind_param($stmt, 'ssddi', $nombre, $descripcion, $lat, $lon, $id);

    if (!mysqli_stmt_execute($stmt)) {
        throw new Exception("Error al actualizar el registro: " . mysqli_error($db));
    }

    echo json_encode(["success" => true, "message" => "Registro actualizado correctamente."]);
} catch (Exception $e) {
    echo json_encode(["success" => false, "message" => $e->getMessage()]);
}
?>
