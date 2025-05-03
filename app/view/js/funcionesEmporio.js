document.addEventListener("DOMContentLoaded", ampliarImágenes);

function ampliarImágenes() {

    const fotosProducto = document.getElementsByClassName("zoom");

    for (let i = 0; i < fotosProducto.length; i++) {
        fotosProducto[i].addEventListener("click", function() {
            alert("Ey, soy una imagen de producto!");
            window.open();
        });
    }

}
