<?php
$servername = "129.151.97.70"; // Cambia esto si tu servidor MySQL está en otra dirección
$username = "root"; // Reemplaza con tu nombre de usuario de MySQL
$password = ""; // Reemplaza con tu contraseña de MySQL
$dbname = "landinghcy"; // Reemplaza con el nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
//echo "Conexión exitosa";
?>
