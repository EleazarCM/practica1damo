<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
require_once 'conexion.php';

    $id = $_POST ["id"];
    $nombre = $_POST ["nombre"];
    $apellido = $_POST["apellido"];
    $carrera = $_POST["carrera"];
    $anio = $_POST["anio"];

    $my_query = "insert into empleado (id, nombre, apellido, carrera , anio ) values
    (' ".$id."' , '".$nombre"','".$apellido"','".$carrera"','".$anio"')";

    $result = $mysql -> query($my_query);
    if($result == true){
        echo "Registro guardado";
    }else{

        echo "Error al guardar ";
    }


}else{
    echo "Erro desconocido";
}
 