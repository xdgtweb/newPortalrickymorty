const mainTemporada6HTML = `

<div class="centrado">
<button onclick="cambiarScript('capitulo1')">
  <img src="./img/temporada2/capitulo1.jpg">
  <label>Capitulo 1</label>
</button>
<button onclick="cambiarScript('capitulo2')">
  <img src="./img/temporada2/capitulo2.jpg">
  <label>Capitulo 2</label>
</button>
<button onclick="cambiarScript('capitulo3')">
  <img src="./img/temporada2/capitulo3.jpg">
  <label>Capitulo 3</label>
</button>
<button onclick="cambiarScript('capitulo4')">
  <img src="./img/temporada2/capitulo4.jpg">
  <label>Capitulo 4</label>
</button>
<button onclick="cambiarScript('capitulo5')">
  <img src="./img/temporada2/capitulo5.jpg">
  <label>Capitulo 5</label>
</button>
<button onclick="cambiarScript('capitul6')">
  <img src="./img/temporada2/capitulo6.jpg">
  <label>Capitulo 6</label>
</button>
<button onclick="cambiarScript('capitulo7')">
  <img src="./img/temporada2/capitulo7.jpg">
  <label>Capitulo 7</label>
</button>
<button onclick="cambiarScript('capitulo8')">
  <img src="./img/temporada2/capitulo8.jpg">
  <label>Capitulo 8</label>
</button>
<button onclick="cambiarScript('capitulo9')">
  <img src="./img/temporada2/capitulo9.jpg">
  <label>Capitulo 9</label>
</button>
<button onclick="cambiarScript('capitulo10')">
  <img src="./img/temporada2/capitulo10.jpg">
  <label>Capitulo 10</label>
</button>
</div>

    <script src="js/temporada2.js"></script>
    <script>
        const temporada2 = document.getElementById('temporada2');
        temporada2.innerHTML = temporada2HTML;
    </script>

    <script>

      // Función para cambiar la etiqueta script
      function cambiarScript(pagina) 
      {
        const temporada2 = document.getElementById('temporada2');

        // Quita la clase "blur" inmediatamente
        temporada2.classList.remove('blur');

        if (pagina === 'capitulo1') 
        {
          mainDinamico.src = "js/capitulo1.js";
          main.innerHTML = mainCapitulo1HTML;
        } 
        else if (pagina === 'capitulo2') 
        {
          mainDinamico.src = "js/capitulo2.js";
          main.innerHTML = mainCapitulo2HTML;
        }
        else if (pagina === 'capitulo3') 
        {
          mainDinamico.src = "js/capitulo3.js";
          main.innerHTML = mainCapitulo3HTML;
        }
        else if (pagina === 'capitulo4') 
        {
          mainDinamico.src = "js/capitulo4.js";
          main.innerHTML = mainCapitulo4HTML;
        }
        else if (pagina === 'capitulo5') 
        {
          mainDinamico.src = "js/capitulo5.js";
          main.innerHTML = mainCapitulo5HTML;
        }
        else if (pagina === 'capitulo6') 
        {
          mainDinamico.src = "js/capitulo6.js";
          main.innerHTML = mainCapitulo6HTML;
        }
        else if (pagina === 'capitulo7') 
        {
          mainDinamico.src = "js/capitulo7.js";
          main.innerHTML = mainCapitulo7HTML;
        }
        else if (pagina === 'capitulo8') 
        {
          mainDinamico.src = "js/capitulo8.js";
          main.innerHTML = mainCapitulo8HTML;
        }
        else if (pagina === 'capitulo9') 
        {
          mainDinamico.src = "js/capitulo9.js";
          main.innerHTML = mainCapitulo9HTML;
        }
        else if (pagina === 'capitulo10') 
        {
          mainDinamico.src = "js/capitulo10.js";
          main.innerHTML = mainCapitulo10HTML;
        }

      }

    </script>

`;