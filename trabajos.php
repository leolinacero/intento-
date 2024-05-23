<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webs</title>
    
    <link rel="stylesheet" href="css/trabajo.css">

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
        
      </ul>
    </nav>
    <div class="galeria">
        <div class="columna">
            <div class="item">
                <a href="cap/aso.html">
                  <img src="rafa/aso 2.jpeg" alt="">
                
                </a>
            </div>
            <div class="item">
                <a href="cap/tubo.html">
                  <img src="rafa/tobo.jpeg" alt="">
                        
                </a>
            </div>
            <div class="item">
                <a href="cap/pisci.html">
                  <img src="rafa/pisci.jpeg" alt="">
                  
                </a>
            </div>
        </div>
        <div class="columna">
            <div class="item">
                <a href="cap/cuadro.html"> 
                  <img src="rafa/cuadro 3.jpeg"alt="">
                    
                </a>
            </div>
            <div class="item">
                <a href="cap/parque.html"> 
                    <img src="rafa/parque.jpeg" alt="">
                    <div class="hover">
                        <span class="fa fa-search"></span>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="cap/fuente.html"> 
                  <img src="rafa/fuent.jpeg" alt="">
                    
                </a>
            </div>
        </div>

        <div class="columna">
            <div class="item">
                <a href="cap/cami.html"> 
                    <img src="rafa/cami.jpeg" alt="">
                   
                </a>
            </div>
            <div class="item">
                <a href="cap/lu.html"> 
                    <img src="rafa/lu.jpeg" alt="">
                    
                </a>
            </div>
            <div class="item">
                <a href="cap/port.html"> 
                  <img src="rafa/portada 2-1.jpeg" alt="">
                    
                </a>
            </div>
        </div>
    </div>




  

    
    
  </body>
</html>