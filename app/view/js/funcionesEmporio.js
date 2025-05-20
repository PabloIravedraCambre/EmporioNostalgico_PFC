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

    const imagenModal = document.querySelector(".juegoImagenModal");

    const modal = document.querySelector("[data-modal]");

    const cerrarModal = document.querySelector("[data-close-modal]");

    const tituloJuego = document.getElementById("tituloJuego");

    const datosJuego = document.getElementById("descripcionJuego");

    // Aquí almacenamos la información de cada juego

    const infoJuego = {
        
        "Crash Bandicoot":{
            tituloJuego: "Crash Bandicoot 3: Warped",
            descripcionJuego: "Una delicia de plataformas",
            juegoImagenModal: "imagenesVideojuegos/crashRD.png"
        }, 
        "Koudelka":{
            tituloJuego: "Koudelka",
            descripcionJuego: "Un juego rpg muy infravalorado",
            juegoImagenModal: "imagenesVideojuegos/koudelkaRD.png"
        },
        "Tombi":{
            tituloJuego: "Tombi",
            descripcionJuego: "El pelirosa más conocido de los videojuegos",
            juegoImagenModal: "imagenesVideojuegos/tombiRD.png"
        },
        "Journey to Silius":{
            tituloJuego: "Journey to Silius",
            descripcionJuego: "Su banda sonora es una masterclass de cómo componer algo increíble con sólo 8-bits",
            juegoImagenModal: "imagenesVideojuegos/silius.png"
        },
        "Donkey Kong Country 2":{
            tituloJuego: "Donkey Kong Country 2",
            descripcionJuego: "No sé si me gusta más este que el primero (los dos son maravillosos)",
            juegoImagenModal: "imagenesVideojuegos/donkey.png"
        },
        "Yoshi's Island":{
            tituloJuego: "Yoshi's Island",
            descripcionJuego: "El combate final contra Bowser me sigue inquietando aún a día de hoy",
            juegoImagenModal: "imagenesVideojuegos/yoshis.png"
        },
        "Kid Klown in Crazy Chase":{
            tituloJuego: "Kid Klown in Crazy Chase",
            descripcionJuego: "Uno de los personajes más gafados de la historia de los videojuegos, si no me crees, pruébalo.",
            juegoImagenModal: "imagenesVideojuegos/kidklown.png"
        },
        "Super Mario World":{
            tituloJuego: "Super Mario World",
            descripcionJuego: "¿Clásico entre clásicos? Es muy probable.",
            juegoImagenModal: "imagenesVideojuegos/marioworld.png"
        },
        "Resident Evil 4":{
            tituloJuego: "Resident Evil 4",
            descripcionJuego: "Este juego se desarrolla en España, y los enemigos tienen acento mexicano. Buen trabajo, Capcom.",
            juegoImagenModal: "imagenesVideojuegos/residentEvil.png"
        },
        "Dark Cloud":{
            tituloJuego: "Dark Cloud",
            descripcionJuego: "Un juego bastante innovador para su época y muy adictivo.",
            juegoImagenModal: "imagenesVideojuegos/darkCloud.png"
        },
        "TimeSplitters 3":{
            tituloJuego: "TimeSplitters 3",
            descripcionJuego: "Viajes en el tiempo y un protagonista calvorota, ¿Qué más quieres?",
            juegoImagenModal: "imagenesVideojuegos/timesplitters3.png"
        },
        "Grand Theft Auto: San Andreas":{
            tituloJuego: "Grand Theft Auto: San Andreas",
            descripcionJuego: "El juego más vendido de Playstation 2 con diferencia y un imprescindible para cualquier amante de los videojuegos.",
            juegoImagenModal: "imagenesVideojuegos/sanAndreas.png"
        },
        
        


    };

    // 'juegos' contiene todos los elementos que pertenezcan a la clase 
    // '.juegoZoom'
    // Utilizaremos el foreach para ejecutar una función para cada elemento de 
    // la lista de juegos

    juegos.forEach((juego) => {
        juego.addEventListener("click", function () {
        // Const titulo guarda el atributo de nombre de cada uno de los juegos
         const titulo = juego.getAttribute("data-juego");
        // Utilizamos el valor del título de cada juego para poder 
        // acceder al objeto 'infoJuego'
         const detallesJuego = infoJuego[titulo];

        // Si 'detallesJuego' existe, mostramos los datos de ese juego, si no
        // existe en el apartado de 'infoJuego', mostramos un error
         if (detallesJuego){ 
            tituloJuego.textContent = detallesJuego.tituloJuego;
            datosJuego.textContent = detallesJuego.descripcionJuego; 
            imagenModal.src = detallesJuego.juegoImagenModal;
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
