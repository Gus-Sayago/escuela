<?php
include_once('conexion.php');

// Preparar la consulta SQL utilizando sentencias preparadas para prevenir la inyección SQL
$stmt = $conexion->prepare("INSERT INTO materia (nombre) VALUES (?)");
$stmt->bind_param("s", $materia);

// Ejecutar la consulta
$stmt->execute();

// Verificar el resultado
if ($stmt->affected_rows > 0) {
    echo "Se ha dado de alta con éxito: " . $materia;
} else {
    echo "No se ha podido dar de alta.";
}

// Cerrar la sentencia y la conexión
$stmt->close();
$conexion->close();
?>