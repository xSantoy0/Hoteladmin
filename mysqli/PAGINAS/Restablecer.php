<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HOTEL PARADISE | INICIO SESIÓN</title>
        <link rel="shortcut icon" href="../IMG/icon.svg" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="../CSS/Estilo_index.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>        <link rel="stylesheet" href="../CSS/Estilo_index.css">

        <script>
            function validar(){
                var restablecer = document.olvido;
                if (restablecer.checked == true){
                    swal("Oops!","El formulario no se ha enviado\nDebe acerptar terminos y condiciones","error");
                }else{
                    swal("OK", "El formulario fue enviado correctamente","success")
                    .then(() => {
                    window.location.href = '../PAGINAS/Ingreso.php';
                });
                    return false;
                }
            }            
        </script>
    </head>

<body>
<div class="Contenido_header"></div>
    <div class="Contenido_menu"></div>
    <div class="formulario_basico">
        <section id="basico">
            <form name="olvido" class="form-basico" action="../PAGINAS/Ingreso.php" onsubmit="return validar()" >
                <div class="titulo">
                        <h2>RESTABLECER CONTRASEÑA</h2>
                    </div>
                    <div class="entrada">
                        <label>Tipo de documento</label>
                        <select class="campo" name="Tipodocumento" required>
                            <option selected disabled value="">Seleccionar</option>
                            <option>Tarjeta de Identidad</option>
                            <option>Cédula de Ciudadanía</option>
                            <option>Cédula de Extrangería</option>
                        </select>
                        <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                            </svg>
                        </span>
                    </div>

                    <div class="entrada">
                        <label>Número de documento</label>
                        <input type="text" name="Numerodocumento" placeholder="Ingrese número de documento" class="campo" required>
                        <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                            </svg>
                        </span>
                    </div>

                    <div class="entrada">
                        <label>Restablecer contraseña</label>
                        <input type="password" name="Contraseña" placeholder="Ejemplo123*" class="campo" required>
                        <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                            </svg>
                        </span>
                    </div>

                    <div class="entrada">
                        <label>Confirmar contraseña</label>
                        <input type="password" name="Contraseña" placeholder="Ejemplo123*" class="campo" required>
                        <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                            </svg>
                        </span>
                    </div>

                    <div class="boton">
                        <input type="submit" value="ENVIAR">
                     </div>
            </form>
        </section>
    </div>
    <footer>
        <div class="Contenido_footer"></div>
    </footer>

</body>
    <script>
        $(document).ready(function(){
            $('.Contenido_header').load('../header.html');
        });

        $(document).ready(function(){
            $('.Contenido_menu').load('./MENUS/Menu_ingreso.php');
        });

        $(document).ready(function(){
            $('.Contenido_footer').load('../Footer.html');
        });

    </script>
</html>