<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');

include("../conexion/conexion.php");
require_once 'jwt/vendor/autoload.php';
use Firebase\JWT\JWT;

$conexion=conexion();
$array = array("result" => 'false');

$id=$_REQUEST['id'];
$nombre=$_REQUEST['nombre'];
$color=$_REQUEST['color'];
$precio=$_REQUEST['precio'];
$fecha=$_REQUEST['fecha'];

$sql="update datos set nombre='$nombre', color='$color', precio='$precio', fecha='$fecha' where id='$id'";
$query=mysqli_query($conexion,$sql);
if($query){
	$array = array("result" => 'true');
}

$resultado=json_encode($array);
echo $resultado;

?>