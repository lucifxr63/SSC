<?php
require_once '../conexion/conexion.php';
header('Content-Type: application/json');

try {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        throw new Exception("Método no permitido. Usa POST.");
    }

    $id = $_POST['id'] ?? null;

    if (!$id) {
        throw new Exception("El ID es obligatorio.");
    }

    $query = "DELETE FROM ITEM WHERE id = ?";
    $stmt = mysqli_prepare($db, $query);
    mysqli_stmt_bind_param($stmt, 'i', $id);

    if (!mysqli_stmt_execute($stmt)) {
        throw new Exception("Error al eliminar el registro: " . mysqli_error($db));
    }

    echo json_encode(["success" => true, "message" => "Registro eliminado correctamente."]);
} catch (Exception $e) {
    echo json_encode(["success" => false, "message" => $e->getMessage()]);
}
?>
