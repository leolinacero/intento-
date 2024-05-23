<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/nosotros.css">
   

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
      <div class="container">
          <div class="header">
              
              <h1>¿Por qué elegir a Prodeluz Sistemas?</h1>
              <p>La satisfacción del cliente es nuestro primer objetivo.</p>
          </div>
          <div class="features">
              <div class="feature">
                  <img src="emo/reloj-de-pared.png" alt="24 Horas">
                  <h2>24 Horas</h2>
                  <p>Servicios 24 horas, con sistema de guardias.</p>
              </div>
              <div class="feature">
                  <img src="emo/casa.png" alt="Mantenimiento integral">
                  <h2>Mantenimiento integral.</h2>
                  <p>Mantenimiento de todo tipo de edificios o naves industriales.</p>
              </div>
              <div class="feature">
                  <img src="emo/calendario.png" alt="Proyectos planificados">
                  <h2>Proyectos planificados.</h2>
                  <p>Evite imprevistos, nuestro trabajo está 100% planificado.</p>
              </div>
              <div class="feature">
                  <img src="emo/reciclar-senal.png" alt="Reciclamos">
                  <h2>Reciclamos</h2>
                  <p>Reciclamos el material, cuidamos el medio ambiente.</p>
              </div>
              <div class="feature">
                  <img src="emo/boton-de-verificacion.png" alt="1° calidad">
                  <h2>1° calidad</h2>
                  <p>Utilizamos materiales y productos de primera calidad.</p>
              </div>
              <div class="feature">
                  <img src="emo/carro-de-la-carretilla.png" alt="Tienda Online">
                  <h2>Tienda Online</h2>
                  <p>Próximamente tendremos tienda Online.</p>
              </div>
          </div>
      </div>

   
  </body>
</html>