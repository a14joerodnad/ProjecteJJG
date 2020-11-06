//Variabes que se usaran en la ejecución del JS
window.onload = function(){

  var hores = new Date();
  var horaActual = hores.getHours();
  var minutactual = hores.getMinutes();
  
  if (horaActual <= 11 & minutactual <= 30){

      document.getElementsByClassName("menuEsmorzar").disabled= "false";
      document.getElementsByClassName("menuDinar").disabled = "true";
      document.getElementsByClassName("begudes").disabled = "false";
  }

  else{

      document.getElementsByClassName("menuEsmorzar").disabled= "true";
      document.getElementsByClassName("menuDinar").disabled= "false";
      document.getElementsByClassName("begudes").disabled= "false";
  }
 


//document.getElementsByClassName("botonenviar").onclick = enviacomanda;

}

//function enviar(){
  //do

//}