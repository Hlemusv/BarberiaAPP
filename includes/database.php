<?php

$db = mysqli_connect('localhost', 'root', 'root', 'barberia');


if (!$db) {
    echo "Error: No se pudo conectar a MySQL.";
exit;
    
}
// echo "nos conectamos perra";