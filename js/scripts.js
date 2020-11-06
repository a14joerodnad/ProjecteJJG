//Variabes que se usaran en la ejecución del JS
window.onload = function(){

  var hores = new Date();
  var horaActual = hores.getHours();
  var minutactual = hores.getMinutes();
  
  if (horaActual <= 11 & minutactual <= 30){

      document.getElementsByClassName('menuEsmorzar').style.display = "block";
      document.getElementsByClassName('menuDinar').style.display = "none";
      document.getElementsByClassName('begudes').style.display = "block";
  }

  else{

      document.getElementsByClassName('menuEsmorzar').style.display = "none";
      document.getElementsByClassName('menuDinar').style.display = "block";
      document.getElementsByClassName('begudes').style.display = "block";
  }
 


document.getElementsByClassName("botonenviar").onclick = enviacomanda;

}