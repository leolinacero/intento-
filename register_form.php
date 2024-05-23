<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
</head>
<body>


<?php
$db_host="localhost:3307";
$db_nombre="registro";
$db_usuario="root";
$db_contra="";
$conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fecha_nacimiento = $_POST['nacimiento'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $consulta = "INSERT INTO usuarios (nombre, apellido, email, fecha_nacimiento, passwor) 
    VALUES ('$nombre','$apellido','$email','$fecha_nacimiento',md5('$password'))";




    
    if (empty($nombre) || empty($apellido) || empty($fecha_nacimiento) || empty($email) || empty($password)) {
        echo "Por favor, completa todos los campos.";
    } else {
        

        
        mysqli_query($conexion, $consulta);
        echo "datos insertados correctamente";
        header("location:esti.html");
        mysqli_close($conexion);
    }
}
?>