<?php
require 'includes/funciones.php';

$servicios = obtenerServicios(); // va en funciones.php y tiene la ruta para la conexion a la base de dtos

echo json_encode($servicios);
