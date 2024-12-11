<?php
function loadEnv($path) {
    if (!file_exists($path)) {
        die("Error: El archivo .env no se encuentra en la ruta especificada ($path).");
    }

    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        // Ignorar líneas de comentarios
        if (strpos(trim($line), '#') === 0) {
            continue;
        }

        // Separar clave y valor
        list($name, $value) = explode('=', $line, 2);
        $_ENV[trim($name)] = trim($value);
    }
}

// Cargar el archivo .env
loadEnv(__DIR__ . '/../../.env'); // Ajusta la ruta si es necesario

// Verificar si las variables están definidas
$required_env_vars = ['DB_HOST', 'DB_USER', 'DB_PASSWORD', 'DB_NAME', 'DB_PORT'];
foreach ($required_env_vars as $var) {
    if (!isset($_ENV[$var])) {
        die("Error: La variable $var no está definida en el archivo .env.");
    }
}

// Variables de conexión
$DB_HOST = $_ENV['DB_HOST'];
$DB_USER = $_ENV['DB_USER'];
$DB_PASSWORD = $_ENV['DB_PASSWORD'];
$DB_NAME = $_ENV['DB_NAME'];
$DB_PORT = $_ENV['DB_PORT'];

// Intentar conexión
$db = mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME, $DB_PORT);

// Verificar conexión
if (!$db) {
    die("Conexión fallida: " . mysqli_connect_error());
}

echo "Conexión exitosa a la base de datos: $DB_NAME";
?>
