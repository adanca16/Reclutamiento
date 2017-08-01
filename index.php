<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">

	<title>Reclutamiento de Profesores, Campus Sarapiqui</title>
</head>
<body>
	<h1 >Ada </h1>
	

<?php 
	require_once('Conexion.php');
	$conexion = new Conexion();
	$resultdo=$conexion->conexion()->query("SELECT * FROM tbproductos");
	while($sql=$resultdo->fetch_assoc()){//Todos los valore de la tabla.
		echo $sql['idproducto'].' '.$sql['nombreproducto'];
	}

 ?> 


</body>
</html>