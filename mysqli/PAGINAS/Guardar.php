<?php
    require '../Conexion.php';

//pasando datos del formulario
    $nombre=$_POST["Nombre"];
    $apellido=$_POST["Apellido"];
    $email=$_POST["E-mail"];
    $tipo_doc=$_POST["Tipo_documento"];
    $documento=$_POST["Num_documento"];
    $contraseña=$_POST["Word"];
    $telefono=$_POST["Telefono"];
    

//boton de registrar se pulso y encripta la contraseña
if(isset($_POST["Boton_submit"])){
    $contraseña_encryp = password_hash($contraseña, PASSWORD_DEFAULT);
    //envio de datos 
    $queryregistrar = "INSERT INTO usuario(Nombre,Apellido,Correo_electronico,Tipo_documento,Num_doc,contraseña,Telefono,Tipo_usuario) values ('$nombre','$apellido','$email','$tipo_doc','$documento','$contraseña_encryp','$telefono','2')";
    if(mysqli_query($mysqli,$queryregistrar)){
        echo"<script>alert('Usuario registrado: $nombre');window.location='./Ingreso.php'</script>";
    }else{
        echo "Error: ".$queryregistrar."<br>".mysqli_error($mysqli);
    }
}

?>