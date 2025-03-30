<?php
include 'db.php'; // Asegúrate de tener el archivo db.php en el mismo directorio

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['name'];
    $fecha = $_POST['date'];

    // Preparar y ejecutar la consulta SQL
    $sql = "INSERT INTO reservaciones (nombre, fecha) VALUES ('$nombre', '$fecha')";
    
    if ($conn->query($sql) === TRUE) {
        echo "¡Reservación confirmada para $nombre el $fecha!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close(); // Cerrar la conexión
}
?>