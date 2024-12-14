<?php
// Función para cargar las variables del archivo .env
function loadEnv($path) {
    if (!file_exists($path)) {
        die("Error: El archivo .env no se encuentra en la ruta especificada ($path).");
    }

    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        // Ignorar comentarios en el archivo .env
        if (strpos(trim($line), '#') === 0) continue;

        // Separar las claves y valores del archivo .env
        list($name, $value) = explode('=', $line, 2);
        $_ENV[trim($name)] = trim($value);
    }
}

// Cargar el archivo .env
loadEnv(__DIR__ . '/../../.env');

// Verificar si las variables están definidas
$required_env_vars = ['DB_HOST', 'DB_USER', 'DB_PASSWORD', 'DB_NAME', 'DB_PORT'];
foreach ($required_env_vars as $var) {
    if (!isset($_ENV[$var])) {
        die("Error: La variable $var no está definida en el archivo .env.");
    }
}

// Configuración de la conexión
$DB_HOST = $_ENV['DB_HOST'];
$DB_USER = $_ENV['DB_USER'];
$DB_PASSWORD = $_ENV['DB_PASSWORD'];
$DB_NAME = $_ENV['DB_NAME'];
$DB_PORT = $_ENV['DB_PORT'];

// Intentar conectar a la base de datos
$db = mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME, $DB_PORT);

// Verificar si la conexión fue exitosa
if (!$db) {
    die("Error de conexión: " . mysqli_connect_error());
}

// No generar ninguna salida aquí (ni mensajes ni espacios en blanco)
