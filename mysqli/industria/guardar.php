<?php
//conectando con la base de datos
require 'conexion.php';

//pasando datos del formulario
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$tipo_doc=$_POST["tipo_doc"];
$documento=$_POST["documento"];
$usuario=$_POST["usu"];
$contra=$_POST["pass"];

//boton de registrar se pulso y encripta la contraseña
if(isset($_POST["botregistrar"])){
    $contra_encryp= password_hash($contra,PASSWORD_DEFAULT);
    //envio de datos 
    $queryregistrar="INSERT INTO datos_usuario(nombre,apellido,tipo_doc,documento,correo,password,id_tipo)values('$nombre','$apellido','$tipo_doc','$documento','$usuario','$contra_encryp','2')";
    if(mysqli_query($mysqli,$queryregistrar)){
        echo"<script>alert('Usuario registrado: $nombre');window.location='acceso.php'</script>";
    }else{
        echo "Error: ".$queryregistrar."<br>".mysqli_error($mysqli);
    }
}

