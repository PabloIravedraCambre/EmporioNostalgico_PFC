document.addEventListener("DOMContentLoaded", mostrarTextoOculto);

//Añadimos un escuchador para el botón

function mostrarTextoOculto(){

    var casper = document.getElementById("botonCasper");
    var div = document.getElementById("infoCasper");

    var gargola = document.getElementById("botonGargola");
    var divGargola = document.getElementById("infoGargola");

    var musculo = document.getElementById("botonMusculo");
    var divMusculo = document.getElementById("infoMusculo");

    var greymon = document.getElementById("botonGreymon");
    var divGreymon = document.getElementById("infoGreymon");

    //Añadir el evento al botón

    casper.addEventListener("click",
        function(){
            if (window.getComputedStyle(div).display === "none") {
                div.style.display = "block";
              } else {
                div.style.display = "none";
              }
        });

    gargola.addEventListener("click",
        function(){
            if (window.getComputedStyle(divGargola).display === "none") {
                divGargola.style.display = "block";
              } else {
                divGargola.style.display = "none";
              }
        });

    musculo.addEventListener("click",
        function(){
            if (window.getComputedStyle(divMusculo).display === "none") {
                divMusculo.style.display = "block";
              } else {
                divMusculo.style.display = "none";
              }
        });

    greymon.addEventListener("click",
        function(){
            if (window.getComputedStyle(divGreymon).display === "none") {
                divGreymon.style.display = "block";
              } else {
                divGreymon.style.display = "none";
              }
        });
}


