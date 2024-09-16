<?php
//conectando con la base de datos
require 'conexion.php';

//pasando datos del formulario

$usuario=$_POST["usu"];
$contra=$_POST["pass"];


//boton de ingresar leer la contraseña encriptada
    if(isset($_POST["botacceso"])){
        $queryusuario=mysqli_query($mysqli, "SELECT *FROM datos_usuario WHERE correo='$usuario'");
        $nfila=mysqli_num_rows($queryusuario);
        $buscarcontra=mysqli_fetch_array($queryusuario);

        //valido si encontro un dato y desencripto la contraseña para compararla con la ingresada por el usuario
        if(($nfila==1)&&(password_verify($contra,$buscarcontra['password']))){
            echo"<script>alert('Bienvenido al sistema: $usuario');window.location='./admin/perfil_admin.php'</script>";
        }else{
            echo"
            <script>
            alert('Usuario o contraseña incorrectos');
            window.location='acceso.php'
            </script>";
        }
    }