document.addEventListener("DOMContentLoaded", logrosPerfil);


function logrosPerfil() {

    //Esta función selecciona todos los botones del menú principal que tengan
    //la clase 'bi-zoom-in' a través de un escuchador, y con un contador, 
    //iremos incrementando las veces que se ha hecho click en los apartados
    //correspondientes

    var contador = 0;
    var logroDesbloqueado = false;

    const botonAmpliar = document.querySelectorAll(".bi.bi-zoom-in");

    botonAmpliar.forEach((elemento) => {
        elemento.addEventListener("click", function() {
            contador++;
            console.log(contador);

            if (contador == 3){
            console.log("Has desbloqueado el logro: ¡Explorador!");
            logroDesbloqueado = true;
            }
            
        });
    });

    
}
