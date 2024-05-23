<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/servicios.css">
   

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









    
    <section id="services" class="services content-section">
      <div class="container">
        <div class="section-heading">
          <h2>NUESTROS SERVICIOS</h2>
          <h3>A continuación indicamos nuestros principales servicios:</h3>
        </div>
    
        <div class="service-container">
          <div class="service-item">
            <div class="service-icon">
              <img src="img/enchufe.png" class=""></img>
            </div>
            <h4>Servicios de Electricidad</h4>
            <p>Mantenimiento preventivo y correctivo, certificados de instalaciones.</p>
          </div>
          <div class="service-item">
            <div class="service-icon">
              <img src="img/carretera.png" class=""></img>
            </div>
            <h4>Ingeniería</h4>
            <p>Colaboraciones técnicas en proyectos y delineación.</p>
              
          </div>
          <div class="service-item">
            <div class="service-icon">
              <img src="img/energia-renovable.png" class=""></img>
            </div>
            <h4>Energías Renovables</h4>
            <p>Instalación de paneles solares, inverters, baterías.</p>
            
          </div>
                
          <div class="service-item">
              <div class="service-icon">
                <img src="img/nube.png" class=""></img>
              </div>
              <h4>Servicios TIC</h4>
              <p>Administración de servidores y servicios cloud para empresas.</p>
              
          </div>
          <div class="service-item">
              <div class="service-icon">
                <img src="img/tubo.png" class=""></img>
              </div>
              <h4>Fontanería </h4>
              <p>Instalaciones homologadas.</p>
              
          </div>
            <div class="service-item">
              <div class="service-icon">
                <img src="img/telecomunicaciones.png" class=""></img>
              </div>
              <h4>Telecomunicaciones</h4>
              <p>instalaciones de antenas de televisión, cableados y sistemas wifi.</p>
                
            </div>

          </div>
        </div>
      </div> 
    </section>
    </body>
    </html>