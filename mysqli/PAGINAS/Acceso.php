<?php
    session_start();
    require '../Conexion.php';

    $email=$_POST["E-mail"];
    $contraseña=$_POST["contraseña"];

    if(isset($_POST["Bot_ingreso"])){

        $query_usuario=mysqli_query($mysqli, "SELECT * FROM usuario WHERE Correo_electronico = '$email'");
        $nfila=mysqli_num_rows($query_usuario);
        $buscar_contra=mysqli_fetch_array($query_usuario);

        if(($nfila==1)&&(password_verify($contraseña,$buscar_contra['contraseña']))){

            session_regenerate_id(true);

            if ($buscar_contra['Tipo_usuario'] == 1) {
                echo "<script>alert('Bienvenido, Admin');window.location='../PAGINAS/admin/perfil_admin.php'</script>";
            } elseif ($buscar_contra['Tipo_usuario'] == 2) {
                echo "<script>alert('Bienvenido, Usuario');window.location='Registro.php'</script>";
            } elseif ($buscar_contra['Tipo_usuario'] == 3) {
                echo "<script>alert('Bienvenido, recepcionista');window.location='../PAGINAS/CLIENTE/Inicio_cliente.php'</script>";
            } else {
                echo "<script>alert('Tipo de usuario no reconocido');window.location='Ingreso.php'</script>";
            }
        } else {
            echo "<script>alert('Usuario o contraseña incorrectos');window.location='Ingreso.php'</script>";
        }
    }
    
    mysqli_close($mysqli);
?>