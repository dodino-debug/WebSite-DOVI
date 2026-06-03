<?php
$servidor = "localhost";
$usuario = "tu_usuario";
$password = "tu_contraseña";
$base_datos = "nombre_de_tu_bd";

// Crear conexión
$conn = new mysqli($servidor, $usuario, $password, $base_datos);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

echo "¡Conexión exitosa con MySQLi!";
?>

<!-- Adaptar las credenciales para la conexion de la base de datos --> 