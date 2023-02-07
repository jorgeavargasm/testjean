<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, id");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');

include("../conexion/conexion.php");
require_once 'jwt/vendor/autoload.php';
use Firebase\JWT\JWT;

$conexion=conexion();
$array = array("result" => 'false');

//Basic auth http
/*if(!isset($_SERVER ['PHP_AUTH_USER'])){
	header("WWW-Authenticate: Basic realm=\"Private Area\""); //Enviando respuesta mediante el header
	header("HTTP/1.0 401 Unauthorized"); //Asignando respuesta http
	$array = array("result" => 'false', "msg" => 'Necesitas proporcionar credenciales');
}else{

	if($_SERVER ['PHP_AUTH_USER'] == "jorge" && $_SERVER ['PHP_AUTH_PW'] == "123456"){

		$array = array("result" => 'true', "msg" => 'Te encuentras en el area autorizada');*/
		
		//Obteniendo variables desde los headers
		$headers = getallheaders();
		

		if(isset($headers["id"])){
			$id=$headers["id"];
		}else{
			$id=$_REQUEST['id'];
		}

		$sql="delete from datos where id='$id'";
		$query=mysqli_query($conexion,$sql);
		if($query){
			$array = array("result" => 'true');
		}

	/*}else{
		header("WWW-Authenticate: Basic realm=\"Private Area\""); //Enviando respuesta mediante el header
		header("HTTP/1.0 401 Unauthorized"); //Asignando respuesta http
		$array = array("result" => 'false', "msg" => 'Credenciales invalidas');
	}
	
}*/

$resultado=json_encode($array);
echo $resultado;

?>