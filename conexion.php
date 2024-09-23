<?php 

// Conectar a la base de datos
$conexion = new mysqli("localhost", "root", "", "diciembre");

// Recibir datos del formulario HTML y validar
$materia = $_POST['materia'];
$materia = trim($materia); // Eliminar espacios en blanco al inicio y final
if (empty($materia)) {
    echo "Por favor, ingresa el nombre de la materia.";
    exit;
}

?>