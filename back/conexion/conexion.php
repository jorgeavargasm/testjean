<?php
function conexion(){

setlocale(LC_TIME, 'es_CO'); //Setea zona horario
date_default_timezone_set('America/Bogota');	
$conexion = mysqli_connect( "localhost", "root", "" ) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db($conexion, "prueba_vue");	
mysqli_set_charset($conexion,"utf8");

return $conexion;

}

?>