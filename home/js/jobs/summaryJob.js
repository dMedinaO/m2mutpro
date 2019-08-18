$(window).on('load', function() {

  loadInfoJob();
});

//funcion que permite traer la informacion del JOB
function loadInfoJob() {

  var jobID = getQuerystring('job');

  $.ajax({
    method: "POST",
    url: "../php/jobs/searchSummaryJob.php",
    data: {
      "jobID" : jobID

    }
  }).done( function( info ){
    var response = JSON.parse(info);

    //hacemos la escritura a las clases en el html
    $(".jobID").html( response.idjob );
    $(".nameJob").html( response.nameJob );
    $(".startDate").html( response.dateInit );
    $(".kindModel").html( response.kindModel );
    $(".examples").html( response.numberExample );
    $(".response").html( response.response );
    $(".notification").html( response.mailIUser );
  });
}

//funcion para recuperar la clave del valor obtenido por paso de referencia
function getQuerystring(key) {
	var url_string = window.location;
	var url = new URL(url_string);
	var c = url.searchParams.get(key);
	return c;
};
