<?php

  include("../connection.php");
  include("../readDocument.php");
  include("../checkResultDB.php");

  $idJob = $_REQUEST['job'];

  #hacemos la query
  $query = "delete from dataSet where dataSet.iddataSet = $idJob";
  $resultado = mysqli_query($conexion, $query);
  
?>
