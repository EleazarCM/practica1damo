<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
require_once 'conexion.php';
    $id = $_POST ["id"];
    $nombre = $_POST ["nombre"];
    $apellido = $_POST["apellido"];
    $carrera = $_POST["carrera"];
    $anio = $_POST["anio"];
    

    $my_query = "UPDATE `estudiante` SET  nombre='$nombre', apellido ='$apellido', carrera ='$carrera', anio ='$anio' WHERE id ='$id'";

    $result = $mysql -> query($my_query);
    if($result == true){
        echo "Registro editados sastisfactoriamente...";
    }else{

        echo "Error al editados el registro...";
    }


}else{
    echo "Erro desconocido";
}

?>