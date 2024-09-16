<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/Estilo_index.css">

    <title>HOTEL PARADISE | NOSOTROS</title>
</head>
<body>
    <div class="Contenido_header"></div>
    <div class="Contenido_menu"></div>
    
        <h1>NUESTRO HOTEL</h1>
            <div class="contenido">
                <div class="mision">
                    <h2>MISIÓN</h2>
                    <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</p>
                </div>
                <div class="youtu">
                    <iframe src="https://www.youtube.com/embed/sXqJHZRyJhA?si=vZehVF1O_O9ZSnJR" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="vision">
                    <h2>VISIÓN</h2>
                    <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</p>
                </div>
                </div>
            </div>
    
            <div class="imagenes">
                <img src="../IMG/MAR.jpg">
                <img src="../IMG/GIM.jpg">
                <img src="../IMG/CASINO.jpg">
                <img src="../IMG/SERVICIO.jpg">
            </div>

        <footer>
            <div class="Contenido_footer"></div>
        </footer>
</body>
    <script>
        $(document).ready(function(){
            $('.Contenido_header').load('../Header.html');
        });

        $(document).ready(function(){
            $('.Contenido_menu').load('./MENUS/Menu_nosotros.php');
        });

        $(document).ready(function(){
            $('.Contenido_footer').load('../Footer.html');
        });

    </script>
</html>