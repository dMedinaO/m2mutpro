<?php

	#script para hacer la carga de informacion desde la base de datos a la tabla
	include ("../connection.php");

	session_start();
	$iduser = $_SESSION['idUser'];

	$query = "select * from job where job.user =$iduser AND job.tipo_job like '%queue%'";
	$resultado = mysqli_query($conexion, $query);

	if (!$resultado){
		die("Error");
	}else{

		while($data = mysqli_fetch_assoc($resultado)){

			$arreglo["data"][] = $data;
		}

		echo json_encode($arreglo);

	}

	mysqli_free_result($resultado);
	mysqli_close($conexion);
?>
