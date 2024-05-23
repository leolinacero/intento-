<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilo.css">
   

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
      
    <figure class="logo">
      <img src="img/logo.jpeg">
    </figure>
      
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
      
    
        
        <div class="slider__text ">
          <div class="slider__text-line "><div>La clave </div></div>
          <div class="slider__text-line "><div>para que tus </div></div>
          <div class="slider__text-line "><div>proyectos se hagan </div></div>
          <div class="slider__text-line "><div>Realidad.</div></div>
        </div>
        
      </div>
      
      <div class="slide ">
        <div class="slide__content">
          <figure class="slide__img ">
            <img src="proyec/EMT_v2_09 - Entrada3.jpg">
          </figure>
            <figure class="slide__img ">
            <img src="proyec/EMT_v2_12 - Interior CT.jpg">
          </figure>
        </div>
      </div>
      
     
      
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
      
      
      
    </div>
      
      <div class="vert-text">
        <span>
         ---ProdeLuz<br>
          Sistemas
        </span>
      </div>
    </div>



    
</body>
</html>