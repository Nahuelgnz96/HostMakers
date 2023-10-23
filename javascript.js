document.addEventListener("DOMContentLoaded", function () {


const palabras = ["CREATIVAS", "NOVEDOSAS", "EFICIENTES"];
const cambiarElement = document.querySelector(".cambiar");
let indice = 0;

function cambiarPalabra() {
    cambiarElement.textContent = palabras[indice];
    indice = (indice + 1) % palabras.length;
}

// Iniciar el cambio de palabras
setInterval(cambiarPalabra, 6000); // Cambiar cada 3 segundos


const typed = new Typed('.typed', {
    strings: [
    '<i class="subtitulo">alto impacto</i>',
    '<i class="subtitulo">calidad</i>',
    '<i class="subtitulo">resultados</i>',
    '<i class="subtitulo">efectividad</i>'

],

stringsElement: '#cadenas-texto',
typeSpeed: 75,
startDelay:300,
backSpeed: 75,
smartBackspace: true,
shuffle: false,
backDelay: 1500,
loop:true,
loopCount:false,
showCursor:true,
cursorChar:'',
contentType:'html',
})


}