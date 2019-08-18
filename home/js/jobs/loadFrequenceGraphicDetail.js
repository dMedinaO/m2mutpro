//scrip que permite crear los graficos de frecuencia para las mutaciones con respecto al conjunto de datos
$(document).ready(function() {

  getValuesFrequences('frequence1', 'A');
  getValuesFrequences('frequence2', 'R');
  getValuesFrequences('frequence3', 'N');
  getValuesFrequences('frequence4', 'D');
  getValuesFrequences('frequence5', 'C');
  getValuesFrequences('frequence6', 'Q');
  getValuesFrequences('frequence7', 'E');
  getValuesFrequences('frequence8', 'G');
  getValuesFrequences('frequence9', 'H');
  getValuesFrequences('frequence10', 'I');
  getValuesFrequences('frequence11', 'L');
  getValuesFrequences('frequence12', 'K');
  getValuesFrequences('frequence13', 'M');
  getValuesFrequences('frequence14', 'F');
  getValuesFrequences('frequence15', 'P');
  getValuesFrequences('frequence16', 'S');
  getValuesFrequences('frequence17', 'T');
  getValuesFrequences('frequence18', 'W');
  getValuesFrequences('frequence19', 'Y');
  getValuesFrequences('frequence20', 'V');
});

//funcion que permite traer la informacion de las frecuencias con respecto a los tipos de residuos
function getValuesFrequences(drawID, residue) {

  var jobID = getQuerystring("job");

  //obtenemos por ajax la informacion
  var processed_json = new Array();
	$.getJSON("../php/jobs/processFrequenceDetail.php?job="+jobID+"&detail="+residue, function(data) {

    var data = [{
      values: data.values,
      labels: data.labels,
      type: 'pie'
    }];

    Plotly.newPlot(drawID, data);
	});

}

function getValuesFrequencesMut() {

  var jobID = getQuerystring("job");

  //obtenemos por ajax la informacion
  var processed_json = new Array();
	$.getJSON("../php/jobs/processFrequence.php?job="+jobID+"&tipo=3", function(data) {

    var data = [{
      values: data.values,
      labels: data.labels,
      type: 'pie'
    }];

    Plotly.newPlot('frequenceMut', data);
	});

}

//funcion para recuperar la clave del valor obtenido por paso de referencia
function getQuerystring(key) {
	var url_string = window.location;
	var url = new URL(url_string);
	var c = url.searchParams.get(key);
	return c;
};
