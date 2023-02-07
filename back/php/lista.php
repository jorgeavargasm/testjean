<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');

include("../conexion/conexion.php");

$conexion=conexion();
$array = array();
$hoy = date("Y-m-d");
$sql="select * from datos where fecha >= '$hoy'";
$result=mysqli_query($conexion, $sql);

while($fila=mysqli_fetch_array($result)){

		$array[] = array(	
			"id" => $fila[0],
			"nombre" => $fila[1],
			"color" => $fila[2],
			"precio" => $fila[3],
			"fecha" => $fila[4]
		 );
}

$resultado=json_encode($array);
echo $resultado;

?>