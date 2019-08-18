<?php

  include("../connection.php");
  include("../readDocument.php");
  include("../checkResultDB.php");

  #recibimos la data de interes
  $idJob = $_REQUEST['job'];
  $tipo = $_REQUEST['tipo'];

  #obtenemos el nombre del archivo
  $query = "select dataSet.nameDataSet  from dataSet join job on (job.dataSet = dataSet.iddataSet) where job.idjob = $idJob";
  $resultado = mysqli_query($conexion, $query);

  $data = mysqli_fetch_assoc($resultado);
  $nameJob = $data['nameDataSet'];

  #procesamos el comando
  $command = "python /var/www/html/m2mutpro/models/bin/getValuesFrequence.py /var/www/html/m2mutpro/jobs/$idJob/$nameJob $tipo";
  $output = [];
  exec($command, $output);

  echo $output[0];

?>
