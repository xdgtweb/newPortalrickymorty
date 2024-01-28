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
                <label>Detalles<label>
            </div>
            <div class="centrado">
                <label class="labelEspecial">
                    <label class="labelColor">SkinSkill</label> es la creación de dos amigos con un objetivo común:
                    trascender los límites de la moda convencional. En nuestra empresa,
                    la originalidad en el diseño y la atención meticulosa a la estética
                    de cada prenda son nuestros pilares fundamentales. Cada diseño que
                    creamos representa nuestra pasión por desafiar la norma y ofrecer
                    prendas que no solo sean estilosas, sino también únicas en su
                    funcionalidad y estética.
                </label>
                <label class="labelEspecial">
                    No te pierdas ni un solo detalle de lo que sucede en <label class="labelColor">SkinSkill</label>.
                    Síguenos en nuestras redes sociales para ser parte de nuestra
                    comunidad de amantes de la moda. ¡Comparte tus looks y experiencias
                    con nosotros!
                </label>
            </div>
            <div class="centrado">
                <div class="cajaFlex">
                    <a href=""></a>
                    <a href=""></a>
                    <a href=""></a>
                </div>
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
    header nav>button:nth-child(3) {
        background-color: black !important;
        color: white;
    }

    nav>button:nth-child(3) img {
        filter: invert(1) !important;
    }
</style>

</html>