<?php 

	$host = 'u3r5w4ayhxzdrw87.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
	$user = 'ci9uudxph91zpamm';
	$password = 'uy4ca2zktmvnpsnt';
	$db = 'zx2oanmxntl5kzh1';

	//Se agrego la base de datos desde Heroku

	$conection = @mysqli_connect($host,$user,$password,$db);
	if (!$conection) {
		echo "Error en la conexion";
	}
 ?>