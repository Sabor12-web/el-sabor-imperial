<?php
include 'db.php'; // Asegúrate de tener el archivo db.php en el mismo directorio
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $numero_personas = $_POST['numero_personas'];
    $mensaje = $_POST['mensaje'];

    $sql = "INSERT INTO reservaciones (nombre, email, telefono, fecha, hora, numero_personas, mensaje)
            VALUES ('$nombre', '$email', '$telefono', '$fecha', '$hora', '$numero_personas', '$mensaje')";

    if ($conn->query($sql) === TRUE) {
        echo "Reservación guardada con éxito.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>