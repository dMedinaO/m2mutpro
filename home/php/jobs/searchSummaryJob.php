<?php

  #session_start();
  #$idUSer = $_SESSION['idUser'];
  $idUSer = "1";

  include("../connection.php");
  include("../readDocument.php");
  include("../checkResultDB.php");

  #recibimos los parametros...
  $jobID = $_REQUEST['jobID'];

  #hacemos la consulta correspondiente
  $query = "select job.idjob, job.nameJob, job.dateInit, dataSet.kindModel, dataSet.numberExample, dataSet.response, job.mailIUser from job join dataSet on (dataSet.iddataSet = job.dataSet) where dataSet.iddataSet = $jobID";
  $resultado = mysqli_query($conexion, $query);
  $data = mysqli_fetch_assoc($resultado);

  #formamos la estructura para enviarla por ajax
  echo json_encode($data);
?>
