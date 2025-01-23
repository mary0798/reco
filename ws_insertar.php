<?php
// Configuración de la base de datos
$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "recorrido";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Datos a insertar
$nombre = "Juan Pérez";
$email = "juan.perez@example.com";

// SQL para la inserción
$sql = "INSERT INTO usuarios (nombre, email) VALUES ('$nombre', '$email')";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "Nuevo registro creado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
