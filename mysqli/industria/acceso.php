<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Iniciar sesion</title>
    <link rel="shortcut icon" href="./img/logo_sena.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style_registro.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   
</head>

<div class="container">

    <form name="formulario" class="form-registro" method="post" action="ingresar.php" >

        <div class="form-register-with-email">

            <div class="form-white-background">
                <a href="index.php"><i class="bi bi-house-fill"></i></a>
                <div class="form-title-row">
                    <h1>Iniciar Sesion</h1>
                </div>

                <div class="form-row">
                    <label>Usuario</label>
                    <input type="email" name="usu" placeholder="ejemplo@gmail.com">
                </div>

                <div class="form-row">
                    <label>Password</label>
                    <input type="password" name="pass">
                </div>

                <div class="form-row">
                    <button type="submit" name="botacceso">Enviar</button>
                </div>

            </div>

            <a href="registro.php" class="form-log-in-with-existing">¿Aun no tienes una cuenta? Entre aquí &rarr;</a>
        </div>
    </form>
</div>
</body>
</html>