<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/tres.css">
   

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
        <div class="grid-container">
    <div class="grid-item texto">
      <h1>Nuestros </h1>
      <h1> Clientes.</h1>
  </div>
    
    <div class="grid-item">
      
    <img src="logos/agro-removebg-preview.png" alt="">
    <p>Imagen 1</p>
    </div>
    <div class="grid-item">
    <img src="logos/beltran-removebg-preview.png" alt="">
    <p>Imagen 2</p>
    </div>
    <div class="grid-item">
    <img src="logos/ctm-removebg-preview.png" alt="">
    <p>Imagen 3</p>
    </div>
    <div class="grid-item">
    <img src="logos/emasa-removebg-preview.png" alt="">
    <p>Imagen 4</p>
    </div>
    <div class="grid-item">
    <img src="logos/junta-removebg-preview.png" alt="">
    <p>Imagen 5</p>
    </div>
    <div class="grid-item">
    <img src="logos/guamar-removebg-preview.png" alt="">
    <p>Imagen 6</p>
    </div>
    <div class="grid-item">
    <img src="logos/new-removebg-preview.png" alt="">
    <p>Imagen 7</p>
    </div>
    <div class="grid-item">
    <img src="logos/emt-removebg-preview.png" alt="">
    <p>Imagen 8</p>
    </div>
    </div>
    <div class="grid-container2">
      
      
      <div class="grid-item">
        
      <img src="logos/sermatec24horas-removebg-preview.png" alt="">
      <p>Imagen 1</p>
      </div>
      <div class="grid-item">
      <img src="logos/erma-removebg-preview.png" alt="">
      <p>Imagen 2</p>
      </div>
      <div class="grid-item texto">
        <h3>Empresas  </h3>
        <h3> Colaboradoras</h3>
    </div>
      
      </div>

  

  <footer>
    <div class="footer-content">
        <div class="footer-section about">
            <h3>Sobre Nosotros</h3>
            <p>Pensamos creativa y resolutivamente. Prodeluz Sistemas S.L.</p>
        </div>
        <div class="footer-section links">
            <h3>Enlaces Rápidos</h3>
            <ul>
                <li><a href="reanudarsesion.php">Inicio</a></li>
                <li><a href="reaunudarsesion2.php">Servicios</a></li>
                <li><a href="reanudarnosotros2.php">Nosotros</a></li>
            </ul>
        </div>
        <div class="footer-section contact">
            <h3>Contacto</h3>
            <p>Email: contacto@nuestraempresa.com</p>
            <p>Teléfono: +34 951 107476</p>
            <p>Dirección:C\ Escritora Carmen Martín Gaite</p>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2024 Nuestra Empresa. Todos los derechos reservados.</p>
    </div>
    <div class="politica">
        <a href="politica.html">Política</a>
        <a href="aviso.html">Aviso Legal</a>
    </div>
  </footer>
</body>
</html>