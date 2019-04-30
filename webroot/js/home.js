/* Toggle para cambiar la classe open/closed del MENU
 when the user clicks on the icon */
function openclose() {
  var x = document.getElementById("navMenu");
  if (x.className === "closed") {
    x.className = "open";
  } else {
    x.className = "closed";
  }
} 


$(document).ready(function(){

//mostrar i ocultar el formulario register
	$("#to_register").on("click", function(){
	$("#register").css("display","block");
	});

	$("#close_register").on("click", function(){
	$("#register").css("display", "none");
	});

//validar campos llenos en loog_in
 	$("#loog_in").on("click", function(){

		var campos = $("#loog input");

		for (var i = 0; i < campos.length-1; i++)
		{
			if(campos[i].value == "")
			{
				$(campos[i]).css("border", "solid 1px red");
				$("#loog_alert").html() ;
			}
			else
			{
				$(campos[i]).css("border", "solid 1px gray")			}
		}
	});
/* 	$("#registro").on("click", function(){

		if($("#pss1 input")!=("#pss2 input")){
			alert(los password no coinciden)
		}
			
	});	
*/



})
