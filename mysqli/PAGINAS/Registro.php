<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Estilo_index.css">
    <title>formularios</title>
   <link rel="shortcut icon" href="./imagenes/logo.jfif" type="image/x-icon">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
   <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<script>
        function validar(){
            var opcion = document.registro.condiciones;
            if (opcion.checked == true){
                swal("OK", "El formulario fue enviado correctamente","success");
            }else{
                swal("Oops!","El formulario no se ha enviado\nDebe acerptar terminos y condiciones","error");
                return false;
            }
        }
</script>

<body>
<div class="contenido_header"></div>
<div class="contenido_menu"> </div>

    <div class="contenido">
              <form class="form-basico" method="post" name="registro" action="./Guardar.php" onsubmit="return validar()">
                    <div class="titulo">
                        <h2>REGISTRO</h2>
                    </div>
                    <div class="entrada">
                        <label>Nombre</label>
                        <input type="text" name="Nombre" class="campo" placeholder="Nombre Completo" required>
                        <span class="icono">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                          </svg>
                        </span>

                    </div>
                    <div class="entrada">
                        <label>Apellido</label>
                        <input type="text" name="Apellido" class="campo" placeholder="Nombre Completo" required>
                        <span class="icono">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                          </svg>
                        </span>

                    </div>

                    <div class="entrada">
                        <label>Correo electronico</label>
                        <input type="email" name="E-mail" placeholder="Ejemplo@email.com"class="campo"required>
                        <span class="icono">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                          </svg>
                        </span>
                    </div>

                    <div class="entrada">
                        <label>Tipo de documento</label>
                        <select name="Tipo_documento" class="campo"required>
                            <option value="">seleccinar</option>
                    <option>TI</option>
                    <option>CC</option>
                    <option>CE</option>
                        </select>
                        <span class="icono">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                          </svg>
                        </span>
                    </div>
                    <div class="entrada">
                        <label>Numero de documento</label>
                        <input type="text" name="Num_documento" class="campo" placeholder="123456"required min="10" max="10">
                        <span class="icono">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                              </svg>
                            </span>
                    </div>
                    <div class="entrada">
                        <label>Contraseña</label>
                        <input type="password" name="Word" placeholder="Ejemplo1234*" class="campo"required>
                        <span class="icono">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                          </svg>
                        </span>
                    </div>

                    <div class="entrada">
                        <label>Telefono</label>
                        <input type="text" name="Telefono" class="campo"required min="10" max="10">
                        <span class="icono">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                          </svg>
                        </span>
                    </div>
                   

                        <div class="entrada">
                            <input type="checkbox"name=condiciones value="Acepto" class="campo">He leido los terminos y condiciones 
                        
                        </div>
                        <div class="boton">
                        <button type="submit" name="Boton_submit" value="Enviar">Enviar</button>
                        </div>
            </form>
        </section>
    </div>

<footer>
    <div class="contenido_footer"></div>
</footer>
</body>
<script>
     $(document).ready(function (){
        $('.contenido_header').load('./Header.html');

    });

    
    $(document).ready(function (){
        $('.contenido_menu').load('./menu.html');

    });

    $(document).ready(function (){
        $('.contenido_footer').load('./Footer.html');

    });
</script>
</html>