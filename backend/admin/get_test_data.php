<?php
// Incluye la conexión a la base de datos
require_once '../conexion/conexion.php'; // Ajusta la ruta según la ubicación de tu archivo conexion.php

// Configurar encabezado para devolver JSON
header('Content-Type: application/json');

try {
    // Consulta SQL para obtener los datos de la tabla ITEM
    $query = "SELECT id, nombre, descripcion, lat, lon FROM ITEM";
    $result = mysqli_query($db, $query);

    // Verifica si hay resultados
    if (!$result) {
        throw new Exception("Error en la consulta: " . mysqli_error($db));
    }

    // Crear un arreglo para almacenar los datos
    $data = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row; // Añadir cada fila al arreglo
    }

    // Devolver los datos en formato JSON
    echo json_encode([
        "success" => true,
        "data" => $data
    ]);
} catch (Exception $e) {
    // Si ocurre un error, devolver el mensaje de error en formato JSON
    echo json_encode([
        "success" => false,
        "message" => $e->getMessage()
    ]);
}
