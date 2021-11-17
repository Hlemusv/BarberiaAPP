<?php

function obtenerServicios(): array
{

    try {
        require 'database.php';
//escribir codigo de SLQ
        $sql = "SELECT * FROM servicios;";
        $db->set_charset("utf8"); //importante para que aparezca algo
        $consulta = mysqli_query($db, $sql);

        
        //Arreglo Vacio
        $servicios = [];
        $i = 0;

        //Obtener resultados desde la base de datos 
        while ($row = mysqli_fetch_assoc($consulta)) {
            $servicios[$i]['id'] = $row['id'];
            $servicios[$i]['nombre'] = $row['nombre'];
            $servicios[$i]['precio'] = $row['precio'];

            $i++;
        }
    // echo "<pre>";
        // var_dump(mysqli_fetch_assoc($consulta)); // fetch_all nos retorna todo // fetch_array fetch_assoc
        // echo "</pre>";
        return $servicios;
    } catch (\Throwable $th) {
        //throw $th;

        var_dump($th);
    }
}
