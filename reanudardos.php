<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/dos1.css">
   

</head>
<body>

    <?php



        session_start();
        if (!isset($_SESSION["email"])){
            header("Location:inicio.html");
        }
        
    ?>
    <nav class="nav nav--left">
        <ul>
          <li>
            <a href="reanudarnosotros2.php"><span>Nosotros</span></a>
          </li>
          <li>
            <a href="reaunudarsesion2.php"><span>Servicios</span></a>
          </li>
          
          <li>
            <a href="trabajos.php"><span>Proyectos</span></a>
          </li>
        </ul>
    </nav>
      
    <a href="reanudarsesion.php">
        <figure class="logo">
            <img src="img/logo.jpeg">
            </figure>
        </a>
      
    <nav class="nav nav--right">
      <ul>
        <li class="inic">
            <?php
                echo $_SESSION["email"] . "<br>";
            ?>
          
        </li>
        <li>
          <a href="cierresesion.php">
            
            <span>cerrar sesion </span>
            <div class="cart-total">0</div>
          </a>
        </li>
      </ul>
    </nav>
    <nav class="slider__nav ">
            <div class="slider-bullet ">
            <a href="reanudarsesion.php">
                <span class="slider-bullet__text ">01</span>
                
            </a>
            <span class="slider-bullet__line "></span>
            
            </div>
            <div class="slider-bullet ">
                <a href="reanudardos.php">
                <span class="slider-bullet__text ">02</span>
                
                </a>
                <span class="slider-bullet__line "></span>
            </div>
            <div class="slider-bullet ">
                <a href="reaunudartres.php">
                <span class="slider-bullet__text ">03</span>
                
                </a>
            <span class="slider-bullet__line "></span>
            </div>
        </nav>
    <div class="container">
        <div class="main"><h1 class="main-title">Bienvenido a Prodeluz Sistemas</h1></div>
        
        <div class="flex-container">
            <div class="check">
            
                <input type="radio" name="imagen" value="imagen1" onclick="cambiarImagen('imagen1')" checked>
                <input type="radio" name="imagen" value="imagen2" onclick="cambiarImagen('imagen2')">
                <input type="radio" name="imagen" value="imagen3" onclick="cambiarImagen('imagen3')">
                <input type="radio" name="imagen" value="imagen4" onclick="cambiarImagen('imagen4')">
                <input type="radio" name="imagen" value="imagen5" onclick="cambiarImagen('imagen5')">
            </div>
            <div id="contenedorImagen" class="imagen" style="background-image: url('portada/portada.jpg')"></div>
            <div class="texto">
                <p>Prodeluz Sistemas ofrece todos los servicios necesarios de mantenimiento, lo que permite al cliente centrarse en su negocio y ahorrar costes.</p>
                <p>Las empresas pueden contratar uno o varios servicios y externalizar su gestión integrada a Prodeluz Sistemas.</p>
                <p>Nuestros trabajos abarcan desde gran empresa a particulares, naves industriales, edificios administrativos, centros docentes privados y públicos, hoteles y residencias.</p>
                <details>
                    <summary>Otros datos de interés.</summary>
                    <p>El principal valor de las empresas es su equipo humano.</p>
                    <p>En Prodeluz Sistemas nos esforzamos en integrar nuestros valores en nuestro personal.</p>
                    <p>Buscamos siempre un canal bidireccional en el que tanto la Empresa como las personas se nutren en su interacción.</p>
                    <p>Las características de la oferta nos obligan a mantener una formación constante de nuestros técnicos para poder integrar las últimas tecnologías con garantía en nuestros clientes.</p>
                </details>
            </div>
        </div>
    </div>
    <script>
        // Función para cambiar la imagen del div al hacer clic en un radio button
        function cambiarImagen(imagen) {
            var contenedor = document.getElementById('contenedorImagen');
            if (imagen === 'imagen1') {
                contenedor.style.backgroundImage = "url('portada/portada.jpg')";
            } else if (imagen === 'imagen2') {
                contenedor.style.backgroundImage = "url('portada/portada 1.jpeg')";
            } else if (imagen === 'imagen3') {
                contenedor.style.backgroundImage = "url('portada/portada2.jpeg')";
            } else if (imagen === 'imagen4') {
                contenedor.style.backgroundImage = "url('portada/portada3.jpeg')";
            } else if (imagen === 'imagen5') {
                contenedor.style.backgroundImage = "url('portada/portada4.jpeg')";
            }
        }
    </script>
</body>
</html>