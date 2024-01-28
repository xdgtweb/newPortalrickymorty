// Función para ajustar la altura del #header
function ajustarAlturaHeader() {
    var windowHeight = window.innerHeight; // Obtiene la altura de la ventana del navegador
    var header = document.getElementById('header'); // Obtiene el elemento #header

    // Aplica la altura dinámica al #header
    header.style.height = (windowHeight + -40.1) + 'px';
}

// Ejecuta la función cuando se carga la página y cuando se redimensiona la ventana
window.addEventListener('load', ajustarAlturaHeader);
window.addEventListener('resize', ajustarAlturaHeader);