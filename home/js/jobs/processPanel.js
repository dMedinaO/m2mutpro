$(window).on('load', function() {

  cancelJob();
  viewFrequence();
  continueJob();

});

var cancelJob = function(){
  $("#cancel-Job").on("click", function(){

    var jobID = getQuerystring("job");
    $.ajax({
      method: "POST",
      url: "../php/jobs/cancelJob.php?job="+jobID,
    }).done( function( info ){

        //var parse = JSON.parse(info);
        location.href="../";

    });
  });
}

var viewFrequence = function() {

  $("#viewFre").on("click", function(){

    var jobID = getQuerystring("job");
    location.href="viewDetail.php?job="+jobID;

  });
}

var continueJob = function() {

  $("#process").on("click", function(){

    var jobID = getQuerystring("job");
    location.href="detailJob.php?job="+jobID;

  });
}
//funcion para recuperar la clave del valor obtenido por paso de referencia
function getQuerystring(key) {
	var url_string = window.location;
	var url = new URL(url_string);
	var c = url.searchParams.get(key);
	return c;
};
