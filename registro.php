<!DOCTYPE html>
<html>

<head id="head"></head>

<body id="contenidoMain" hidden>

    <div class="caja1">
        <header id="header" class="parcheHeader"></header>
        <main id="main" class="blur">

            <div class="centrado" id="centradoF"></div>
            <div class="centrado">
                <label>Registro<label>
            </div>
            <div class="centrado">
                <form action="php-code/registrar_cliente.php" method="post">
                    <label for="nombre_completo">Nombre Completo:</label>
                    <input type="text" name="nombre_completo" required><br>

                    <label for="correo">Correo Electrónico:</label>
                    <input type="email" name="correo" required><br>

                    <label for="contrasena">Contraseña:</label>
                    <input type="password" name="contrasena" id="contrasena" required><br>
                    <div class="ojo" id="ojoRegistro" onclick="mostrarContrasena()">👁️</div></input>

                    <label for="talla">Idioma</label>
                    <select name="talla" required>
                        <option value="Castellano">Castellano</option>
                        <option value="Latino">Latino</option>
                        <option value="Inglés">Inglés</option>
                    </select>
                    <br>

                    <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                    <input type="date" name="fecha_nacimiento" required min="1930-12-31" required max="2005-12-31"><br>

                    <label for="genero">Género:</label>
                    <select name="genero" required>
                        <option value="Hombre">Hombre</option>
                        <option value="Mujer">Mujer</option>
                    </select><br>
                    <button class="buttonInput" onclick="cambiarPagina('login')">Atrás</button>
                    <button class="buttonInput" type="submit" value="Registrar">Registrarse</button>
                </form>
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
    <script src="js-code/mostrarOcultarContrasena.js"></script>

    <script>
        function onSignIn(googleUser) {
            // Maneja la autenticación con Google aquí y prellena los campos si es necesario.
        }
    </script>
    <!-- Agrega la biblioteca de Google Sign-In -->
    <script src="https://apis.google.com/js/platform.js" async defer></script>

    <style>
        nav #cajaUsuario button:nth-child(1) {
            background-color: #b9f8bc;
        }
    </style>

</body>

</html>