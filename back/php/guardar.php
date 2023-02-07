<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');

include("../conexion/conexion.php");
require_once 'jwt/vendor/autoload.php';
use Firebase\JWT\JWT;

$conexion=conexion();
$array = array("result" => 'false');

$nombre=$_REQUEST['nombre'];
$color=$_REQUEST['color'];
$precio=$_REQUEST['precio'];
$fecha=$_REQUEST['fecha'];

$sql="INSERT INTO `datos`(`nombre`, `color`, `precio`, `fecha`) VALUES ('$nombre','$color','$precio','$fecha')";
$query=mysqli_query($conexion,$sql);
if($query){
    $id=mysqli_insert_id($conexion);
	$array = array("result" => 'true',"id" => $id);
}

$resultado=json_encode($array);
echo $resultado;

?>