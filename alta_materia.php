<?php
//conectar a la bd
$conexion = new mysqli("localhost","root","","diciembre");

//recibimos datos del formulario html
$materia = $_POST["materia"];

//generamos la consulta para dar de alta en la bd
$alta = "INSERT INTO materia(nombre) VALUE('$materia')";

//ejecutamos la consulta
$conexion->query($alta);
//VERIFICAMOS EL ALTA
if ($conexion) {
    echo "Se ha dado de alta la materia ". $materia;
    } else {
        echo "No se ha dado de alta";
    }








?>