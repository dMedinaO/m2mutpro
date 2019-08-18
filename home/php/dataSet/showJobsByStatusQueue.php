<?php

	header("content-type: application/json");
	session_start();
  $iduser = $_SESSION['idUser'];

	#incluimos la conexion a la base de datos
	include ("../connection.php");

	#consulta para obtener los pacientes anormales segun el criterio chileno
	$query = "select COUNT(dataSet.tipoDataSet) as cantidad, dataSet.tipoDataSet  from dataSet where dataSet.user =$iduser AND dataSet.tipoDataSet like '%queue%' group by dataSet.tipoDataSet";
	$resultado = mysqli_query($conexion, $query);

	$responseData = [];

	if (!$resultado){
		die("Error");
	}else{

		while($data = mysqli_fetch_assoc($resultado)){

			$responseData[] = $data;

		}
	}

	echo json_encode($responseData);

	mysqli_free_result($resultado);
	mysqli_close($conexion);

?>
