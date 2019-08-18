//scrip que permite crear los graficos de frecuencia para las mutaciones con respecto al conjunto de datos
$(document).ready(function() {

  getValuesFrequencesWild();
  getValuesFrequencesMut();
});

//funcion que permite traer la informacion de las frecuencias con respecto a los tipos de residuos
function getValuesFrequencesWild() {

  var jobID = getQuerystring("job");

  //obtenemos por ajax la informacion
  var processed_json = new Array();
	$.getJSON("../php/jobs/processFrequence.php?job="+jobID+"&tipo=1", function(data) {

    var data = [{
      values: data.values,
      labels: data.labels,
      type: 'pie'
    }];

    Plotly.newPlot('frequenceWild', data);
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
