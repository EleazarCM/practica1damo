<?php
$mysql =new mysqli("localhost","root", "","dbuca");
if ($mysql -> connect_error){
 echo"error";
die ("error al conectarse");

}else{

echo "conectado";
}
?>