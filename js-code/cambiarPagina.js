function cambiarPagina(pagina) {
    // Obtén la ruta actual de la página
    var rutaActual = window.location.pathname;

    switch (pagina) {
        case 'index':
            if (rutaActual.includes('/index.php')) {
                // Ya estás en una página que contiene 'index.html', no hagas nada
            } else {
                window.location.href = './index.php';
            }
            break;
        case 'lineas':
            if (rutaActual.includes('/lineas.php')) {
                // Ya estás en una página que contiene 'lineas.html', no hagas nada
            } else {
                window.location.href = './lineas.php';
            }
            break;
        case 'detalles':
            if (rutaActual.includes('/detalles.php')) {
                // Ya estás en una página que contiene 'detalles.html', no hagas nada
            } else {
                window.location.href = './detalles.php';
            }
            break;
        case 'login':
            if (rutaActual.includes('/login.php')) {
                // Ya estás en una página que contiene 'detalles.html', no hagas nada
            } else {
                window.location.href = './login.php';
            }
            break;
        case 'cesta':
            if (rutaActual.includes('/cesta.php')) {
                // Ya estás en una página que contiene 'detalles.html', no hagas nada
            } else {
                window.location.href = './cesta.php';
            }
            break;
        case 'registro':
            if (rutaActual.includes('/registro.php')) {
                // Ya estás en una página que contiene 'detalles.html', no hagas nada
            } else {
                window.location.href = './registro.php';
            }
            break;
        // Agregar más casos para otras páginas
        default:
        // Página no encontrada o manejar otros casos
    }
}
