<?php
// Incluye el archivo de conexión
require_once 'conexion.php'; // Ajusta la ruta según la ubicación de tu archivo conexion.php

// Verificar si la conexión es exitosa
if ($db) {
    echo "Conexión exitosa a la base de datos.";
} else {
    echo "Error: No se pudo conectar a la base de datos.";
}
?>
