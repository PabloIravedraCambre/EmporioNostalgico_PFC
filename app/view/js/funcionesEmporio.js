document.addEventListener("DOMContentLoaded", triviaGargola);

function triviaGargola() {
    var boton = document.getElementById("pulsaGargola");
    var texto = document.getElementById("curiosidadGargola");

    boton.addEventListener("click",
        function(){
            if (texto.style.display === "none") {
                texto.style.display = "block";
            }else{
                texto.style.display = "none";
            }
    });
}