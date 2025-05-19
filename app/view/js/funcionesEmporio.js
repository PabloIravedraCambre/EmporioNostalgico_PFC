document.addEventListener("DOMContentLoaded", logrosPerfil);
document.addEventListener("DOMContentLoaded", verJuegos);


function logrosPerfil() {

    //Esta función selecciona todos los botones del menú principal que tengan
    //la clase 'bi-zoom-in' a través de un escuchador, y con un contador, 
    //iremos incrementando las veces que se ha hecho click en los apartados
    //correspondientes

    var contador = 0;
    var logroDesbloqueado = false;

    const botonAmpliar = document.querySelectorAll(".bi.bi-zoom-in");

    botonAmpliar.forEach((elemento) => {
        elemento.addEventListener("click", function () {
            contador++;
            console.log(contador);

            if (contador == 3) {
                console.log("Has desbloqueado el logro: ¡Explorador!");
                logroDesbloqueado = true;
            }

        });
    });


}

function verJuegos() {

    const juegos = document.querySelectorAll(".juegoZoom");

    const modal = document.querySelector("[data-modal]");

    const cerrarModal = document.querySelector("[data-close-modal]");

    const tituloJuego = document.getElementById("tituloJuego");

    const datosJuego = document.getElementById("descripcionJuego");

    // const modalDiv = document.querySelector("div");

    const infoJuego = {
        
        "Crash Bandicoot":{
            tituloJuego: "Crash Bandicoot 3: Warped",
            descripcionJuego: "Una delicia de plataformas"
        }, 
        "Koudelka":{
            tituloJuego: "Koudelka",
            descripcionJuego: "Un juego rpg muy infravalorado"
        }

    };

    juegos.forEach((juego) => {
        juego.addEventListener("click", function () {
         const titulo = juego.getAttribute("data-juego");
         const detallesJuego = infoJuego[titulo];

         if (detallesJuego){
            tituloJuego.textContent = detallesJuego.tituloJuego;
            datosJuego.textContent = detallesJuego.descripcionJuego;
            modal.showModal();
         }else{
            alert("No se ha encontrado información del juego");
         }
        });
    });

    cerrarModal.addEventListener("click", function () {
        modal.close();
    });
}
