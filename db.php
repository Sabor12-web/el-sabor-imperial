<?php
$servername = "localhost"; // Cambia esto si es necesario
$username = "root";        // Tu usuario de MySQL
$password = "";            // Tu contraseña de MySQL
$dbname = "restaurante";   // Nombre de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>