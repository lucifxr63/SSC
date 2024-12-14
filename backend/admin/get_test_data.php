<?php
// Incluye el archivo de conexión
require_once '../conexion/conexion.php'; // Asegúrate de que la ruta sea correcta

header('Content-Type: application/json'); // Devuelve JSON
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Consulta SQL para obtener los datos
$query = "SELECT id, nombre, descripcion, fecha_creacion FROM test";
$result = mysqli_query($db, $query);

if (!$result) {
    echo json_encode([
        "success" => false,
        "message" => "Error al ejecutar la consulta: " . mysqli_error($db)
    ]);
    exit;
}

$data = [];
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

// Devuelve los datos en formato JSON
echo json_encode([
    "success" => true,
    "data" => $data
]);
exit;
?>
