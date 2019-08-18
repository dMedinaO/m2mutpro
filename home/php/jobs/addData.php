<?php

  #session_start();
  #$idUSer = $_SESSION['idUser'];
  $idUSer = "1";

  include("../connection.php");
  include("../readDocument.php");
  include("../checkResultDB.php");

  #recibimos los parametros...
  $email = $_REQUEST['email'];
  $nameJob = $_REQUEST['nameJob'];
  $pdbCode = $_REQUEST['pdbCode'];
  $optionProcess = $_REQUEST['optionProcess'];

  $kind="";

  if($optionProcess == 1){
    $kind="CLASSIFICATION";
  }else{
    $kind="PREDICTION";
  }

  #obtenemos los datos desde la sesion...

  $idJob = time();#sera el id del job...
  $response ['job'] = $idJob;

  $pathRespone = "/var/www/html/m2mutpro/jobs/";
  #obtenemos el nombre del archivo de entrada...
  $pathData = "/var/www/html/m2mutpro/jobs/tmp/".$idUSer."_documentQueue.txt";
  $nameDocument = readDocument($pathData);
  $response ['nameFile'] = $nameDocument;

  #insertamos el set de datos en la base de datos
  $query1 = "insert into dataSet values ($idJob, '$nameDocument', '$kind', 0, '-', '$pdbCode')";
  $resultado = mysqli_query($conexion, $query1);

  #insertamos el job en la base de datos
  $query = "insert into job values ($idJob, '$nameJob', '$email', NOW(), NOW(), 'INIT', '-', $idJob)";
  $resultado = mysqli_query($conexion, $query);
  $requestData = verificar_resultado($resultado);

  $response ['queriesInsert'] = $query;

  if ($requestData == "BIEN"){#movemos el archivo de tmp al path del usuario y ejecutamos el proceso solo si la opcion de algorithm es todos...

    #movemos el archivo... creamos directorio
    $path = "/var/www/html/m2mutpro/jobs/$idJob";

    if (!file_exists($path)) {
        mkdir($path, 0777, true);
    }

    #movemos el archivo...
    //movemos el archivo al path del job...
    $pathActual = "/var/www/html/m2mutpro/jobs/tmp/$nameDocument";
    $pathMove = "/var/www/html/m2mutpro/jobs/$idJob/";

    $command = "mv $pathActual $pathMove";
    $pathDataSet ="/var/www/html/m2mutpro/jobs/$idJob/$nameDocument";
    exec($command);

    #ejecutamos script python para parsear la informacion y obtener la data de la columna respuesta y numero de ejemplos
    $command = "python /var/www/html/m2mutpro/models/bin/checkDataSet.py $pathDataSet";
    $response['commandP'] = $command;
    $output = [];
    exec($command, $output);
    $data = explode("-", $output[0]);
    $response['examples'] = $data[0];
    $response['response'] = $data[1];

    $query = "update dataSet set numberExample = $data[0], response= '$data[1]' where dataSet.iddataSet=$idJob";
    $resultado = mysqli_query($conexion, $query);

    $response['exec'] = "OK";

  }else{
    $response['exec'] = "ERROR";

  }

  echo json_encode($response);

?>
