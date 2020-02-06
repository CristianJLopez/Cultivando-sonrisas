<?php
	$usuario = "root";
	$password ="";
	$servidor ="localhost";
	$bd = "cultivando";

$conexion = mysqli_connect($servidor,$usuario,"") or die("No se pudo conectar con el servidor :(");
$db = mysqli_select_db($conexion,$bd) or die("No se econtro la BD :(");

//recuperar variables
$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$mensaje=$_POST['mensaje'];

//sentencia SQL
$sql="INSERT INTO datos VALUES('$nombre','$telefono','$mensaje')";

//ejecucion de sentencia
	$ejecutar = mysqli_query($conexion,$sql);

//verificar ejecucion
	if(!$ejecutar){
		echo "Lo siento, hubo un error :(";
	}else{
		echo "Datos guardados, Gracias :)<br><a href='index.html'>Volver<a>";
	}
?>