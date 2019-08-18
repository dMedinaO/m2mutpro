<?php

  include("../connection.php");
  include("../readDocument.php");
  include("../checkResultDB.php");

  #recibimos la data de interes
  $idJob = $_REQUEST['job'];

  #obtenemos el nombre del archivo y el tipo de data set
  $query = "select dataSet.nameDataSet, dataSet.kindModel from dataSet join job on (job.dataSet = dataSet.iddataSet) where job.idjob = $idJob";
  $resultado = mysqli_query($conexion, $query);

  $data = mysqli_fetch_assoc($resultado);
  $nameJob = $data['nameDataSet'];
  $tipoData = $data['kindModel'];

  $tipo=1;
  if ($tipoData == "PREDICTION"){
    $tipo=2;
  }
  
  #procesamos el comando
  $command = "python /var/www/html/m2mutpro/models/bin/getValuesResponse.py /var/www/html/m2mutpro/jobs/$idJob/$nameJob $tipo";
  $output = [];
  exec($command, $output);

  echo $output[0];

?>
