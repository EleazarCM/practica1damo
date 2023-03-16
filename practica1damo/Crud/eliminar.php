<?php

if($_SERVER["REQUEST_METHOD"] == "DELETE"){
require_once 'conexion.php';

    $id = $_GET ["id"];
    $my_query = "DELETE FROM ciudad where id = $id ";

    $result = $mysql -> query($my_query);
    if($result == true){
        echo "Registro elimindados sastisfactoriamente...";
    }else{

        echo "Error al eliminar el registro...";
    }


}else{
    echo "Erro desconocido";
}
 
?>