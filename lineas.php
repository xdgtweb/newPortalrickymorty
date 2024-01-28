<!DOCTYPE html>
<html>

<head id="head"></head>

<body id="contenidoMain" hidden>

<div id="usuarioRegistrado">
<?php
// Iniciar sesión
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION["username"])) {
    header("Location: ./login.php");
    exit();
}

// Mostrar el nombre de usuario si el usuario ha iniciado sesión
if (isset($_SESSION["username"])) {
    echo "<div id='usuario'><label>Bienvenido<br>" . $_SESSION["username"] . "</label>";

    // Agregar el botón de cerrar sesión
    echo '<form action="./php-code/logout.php" method="post">';
    echo '<input type="submit" value="Salir">';
    echo '</form></div>';
}
?>
</div>

    <div class="caja1">
        <header id="header" class="parcheHeader"></header>
        <main id="main" class="blur">

            <div class="centrado" id="centradoF"></div>
            <div class="centrado">
                <label>Lineas<label>
            </div>
            <div class="centrado">
                <label class="labelLineas">Buah<label>
            </div>
            <div class="centrado">
                <button onclick="cambiarScript('temporada1')">
                    <img src="./img/index/nuevo/1.jpg">
                    <label>Camiseta 1</label>
                </button>
                <button onclick="cambiarScript('temporada2')">
                    <img src="./img/index/nuevo/1.jpg">
                    <label>Camiseta 2</label>
                </button>
                <button onclick="cambiarScript('temporada3')">
                    <img src="./img/index/nuevo/1.jpg">
                    <label>Camiseta 3</label>
                </button>
                <button onclick="cambiarScript('temporada4')">
                    <img src="./img/index/nuevo/1.jpg">
                    <label>Camiseta 4</label>
                </button>
            </div>
            <div class="centrado">
                <label class="labelLineas">Delisius<label>
            </div>
            <div class="centrado">
                <button onclick="cambiarScript('temporada1')">
                    <img src="./img/index/nuevo/1.jpg">
                    <label>Camiseta 1</label>
                </button>
                <button onclick="cambiarScript('temporada2')">
                    <img src="./img/index/nuevo/1.jpg">
                    <label>Camiseta 2</label>
                </button>
                <button onclick="cambiarScript('temporada3')">
                    <img src="./img/index/nuevo/1.jpg">
                    <label>Camiseta 3</label>
                </button>
                <button onclick="cambiarScript('temporada4')">
                    <img src="./img/index/nuevo/1.jpg">
                    <label>Camiseta 4</label>
                </button>
            </div>
            <div class="centrado">
                <label class="labelLineas">Extratosfer<label>
            </div>
            <div class="centrado">
                <button onclick="cambiarScript('temporada1')">
                    <img src="./img/index/nuevo/1.jpg">
                    <label>Camiseta 1</label>
                </button>
                <button onclick="cambiarScript('temporada2')">
                    <img src="./img/index/nuevo/1.jpg">
                    <label>Camiseta 2</label>
                </button>
                <button onclick="cambiarScript('temporada3')">
                    <img src="./img/index/nuevo/1.jpg">
                    <label>Camiseta 3</label>
                </button>
                <button onclick="cambiarScript('temporada4')">
                    <img src="./img/index/nuevo/1.jpg">
                    <label>Camiseta 4</label>
                </button>
            </div>
            <div class="centrado">
                <label class="labelLineas">Galaxy<label>
            </div>
            <div class="centrado">
                <button onclick="cambiarScript('temporada1')">
                    <img src="./img/index/nuevo/1.jpg">
                    <label>Camiseta 1</label>
                </button>
                <button onclick="cambiarScript('temporada2')">
                    <img src="./img/index/nuevo/1.jpg">
                    <label>Camiseta 2</label>
                </button>
                <button onclick="cambiarScript('temporada3')">
                    <img src="./img/index/nuevo/1.jpg">
                    <label>Camiseta 3</label>
                </button>
                <button onclick="cambiarScript('temporada4')">
                    <img src="./img/index/nuevo/1.jpg">
                    <label>Camiseta 4</label>
                </button>
            </div>
            <div class="centrado">
                <label class="labelLineas">Electric<label>
            </div>
            <div class="centrado">
                <button onclick="cambiarScript('temporada1')">
                    <img src="./img/index/nuevo/1.jpg">
                    <label>Camiseta 1</label>
                </button>
                <button onclick="cambiarScript('temporada2')">
                    <img src="./img/index/nuevo/1.jpg">
                    <label>Camiseta 2</label>
                </button>
                <button onclick="cambiarScript('temporada3')">
                    <img src="./img/index/nuevo/1.jpg">
                    <label>Camiseta 3</label>
                </button>
                <button onclick="cambiarScript('temporada4')">
                    <img src="./img/index/nuevo/1.jpg">
                    <label>Camiseta 4</label>
                </button>
            </div>
    </div>

    </main>

    <footer id="footer"></footer>


    <script src="js/headIndex.js"></script>
    <script>
        const head = document.getElementById('head');
        head.innerHTML = headHTML;
    </script>

    <script src="js/headerIndex.js"></script>
    <script>
        const header = document.getElementById('header');
        header.innerHTML = headerHTML;
    </script>

    <script src="js/bannerIndex.js"></script>
    <script>
        const banner = document.getElementById('centradoF');
        banner.innerHTML = bannerHTML;
    </script>

    <script src="js/footerIndex.js"></script>
    <script>
        const footer = document.getElementById('footer');
        footer.innerHTML = footerHTML;
    </script>

    <script src="js-code/ajustarAlturaHeader.js"></script>
    <script src="js-code/cambiarPagina.js"></script>
    <script src="js-code/cambiarPunteroFrundles.js"></script>
    <script src="js-code/cargaPaginaBodyHidden.js"></script>

</body>

<style>
    header nav>button:nth-child(2) {
        background-color: black !important;
        color: white;
    }

    nav>button:nth-child(2) img {
        filter: invert(1) !important;
    }
</style>

</html>