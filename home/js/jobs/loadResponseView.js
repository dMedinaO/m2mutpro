//scrip que permite crear los graficos de frecuencia para las mutaciones con respecto al conjunto de datos
$(document).ready(function() {

  getValuesResponse();

});

//funcion que permite traer la informacion de las frecuencias con respecto a los tipos de residuos
function getValuesResponse() {

  var jobID = getQuerystring("job");

  //obtenemos por ajax la informacion
  var processed_json = new Array();
	$.getJSON("../php/jobs/processResponseData.php?job="+jobID, function(data) {

    if (data.tipo=="REG"){//hacemos histograma

      //formamos la trace...
      var trace = {
        x: data.values,
        name: 'Response',
        autobinx: true,
        histnorm: "count",
        marker: {
          color: "rgba(255, 100, 102, 0.7)",
           line: {
            color:  "rgba(255, 100, 102, 1)",
            width: 1
          }
        },
        opacity: 0.5,
        type: "histogram"
      };

      var dataGraphic = [trace];
      var layout = {
        bargap: 0.05,
        bargroupgap: 0.2,
        barmode: "overlay",
        xaxis: {title: "Values in Response"},
        yaxis: {title: "Frequence in distribution"}
      };

      Plotly.newPlot('detailResponse', dataGraphic, layout);
    }else{//solo grafico de torta
      var data = [{
        values: data.values,
        labels: data.labels,
        type: 'pie'
      }];

      Plotly.newPlot('detailResponse', data);
    }
	});

}

//funcion para recuperar la clave del valor obtenido por paso de referencia
function getQuerystring(key) {
	var url_string = window.location;
	var url = new URL(url_string);
	var c = url.searchParams.get(key);
	return c;
};
