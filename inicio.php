<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>inicio</title>
	
</head>

<body>
	
<?php
  
    $db_host="localhost:3307";
    $db_nombre="registro";
    $db_usuario="root";
    $db_contra="";

    $conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);
    
    $email=$_POST["email"];
    $password=$_POST["pass"];
    
	$consulta = "SELECT * FROM usuarios WHERE email='$email' ";
    $resultado= mysqli_query($conexion, $consulta);
    $numero_registro=mysqli_num_rows($resultado);
    
    
    

	
		if ($numero_registro!=0){
            
            session_start(); 
            $_SESSION["email"]=$email; 
			header("location:reanudarsesion.php");
		}else{
			header("location:inicio.html");
		

	}
?>
</body>
</html>