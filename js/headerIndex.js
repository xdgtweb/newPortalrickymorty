const headerHTML = `
    <img id="logo" src="./img/header/icono.png" onclick="cambiarPagina('index')">
    <nav>
      <button onclick="cambiarPagina('index')"><img src="./img/header/tornillo.svg">Nuevo</button>
      <button onclick="cambiarPagina('lineas')"><img src="./img/header/diseno-fluido.svg">Temporadas</button>
      <button onclick="cambiarPagina('detalles')"><img src="./img/header/informacion-del-circulo-de-archivos.svg">Detalles</button>
      <div id="cajaUsuario">
        <button onclick="cambiarPagina('login')"><img src="./img/header/ingresar.svg">Login</button>
        <img src="./img/header/icono.png">
        <button onclick="cambiarPagina('cesta')"><img src="./img/header/cesta.svg">Cesta</button>
      </div>
    </nav>
    
`;