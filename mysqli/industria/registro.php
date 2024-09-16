<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro</title>
    <link rel="shortcut icon" href="./img/logo_sena.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style_registro.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        function validar() {
            var opcion = document.formulario.condiciones; //acceso al botón
            if (opcion.checked == true) { //botón seleccionado
                alert("El Formulario ha sido enviado")
            } else { //botón no seleccionado
                swal("Oops!", "El formulario no ha podido enviarse. \n Debe aceptar las condiciones para poder enviar el formulario", "error");
                return false; //el formulario no se envia
            }
        }
    </script>
</head>
<div class="contenido">

    <form name="formulario" class="form-registro" method="post" action="guardar.php" onsubmit="return validar()">

        <div class="form-register-with-email">

            <div class="form-white-background">
                <a href="index.php"><i class="bi bi-house-fill"></i></a>
                <div class="form-title-row">
                    <h1>Crea cuenta</h1>
                </div>

                <div class="form-row">
                    <label>Nombre</label>
                    <input type="text" name="nombres">

                </div>
                <div class="form-row">
                    <label>Apellidos</label>
                    <input type="text" name="apellido">

                </div>


                <div class="form-row">
                    <label>Tipo de Documento</label>
                    <select name="tipo_doc">
                        <option>Seleccione una Opcion</option>
                        <option>Tarjeta de identidad</option>
                        <option>Cedula de Ciudadania</option>
                        <option>Cedula de Extranjeria</option>
                        <option>Pasaporte</option>
                    </select>

                </div>

                <div class="form-row">
                    <label>No. Documento</label>
                    <input type="text" name="documento">
                </div>

                <div class="form-row">
                    <label>Email</label>
                    <input type="email" name="usu">

                </div>

                <div class="form-row">
                    <label>Password</label>
                    <input type="password" name="pass">
                </div>

                <div class="form-checkbox">
                    <input type="checkbox" name="condiciones" value="aceptado" /> He leido y acepto las condiciones del contrato <br/><br/>
                </div>

                <div class="form-row">
                    <button type="submit" name="botregistrar">Registrar</button>
                </div>

            </div>

            <a href="acceso.php" class="form-log-in-with-existing">¿Ya tienes una cuenta? Entre aquí &rarr;</a>
        </div>
    </form>
</div>
</body>
</html>