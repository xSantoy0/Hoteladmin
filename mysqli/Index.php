<?php
	//valida la conexion a la base de datos
	require 'Conexion.php';
	$where = "";

	
	if(!empty($_POST))
	{
		$valor = $_POST['dato'];
		if(!empty($valor)){
			$where = "WHERE descripcion_habitacion LIKE '%$valor%'";
		}
	}

	//crear la consulta
	$sql = "SELECT * FROM tipo_hab $where";
	//ejecuta la consulta
	$resultado = $mysqli->query($sql);

    if (!$resultado) {
        echo "Error en la consulta: " . $mysqli->error;
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTEL PARADISE | INICIO</title>
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./CSS/Estilo.css">

</head>
<body>
    <div class="Contenido_header"></div>
    <div class="Contenido_menu"></div>                

    <section class="catalogo">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)){?>
                    <div class="col" >
                            <div class="card shadow-sm" style="height:auto">
                                <img height="250px" src="data:image/jpg;base64, <?php echo base64_encode ($row['imagen'])?>" >
                                <div class="card-body" >
                                    <h5 class="card-title"><?php echo $row['descripcion_habitacion']?></h5>
                                    <h6 class="card-text"><?php echo '$ '.$row['precio'].'  Pesos'?></h6>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <button href="./mantenimiento.html" class="btn btn-primary" style="background-color:blue; border-color: #000000">Solicitar</button> 
                                            </div>
                                        </div>
                                </div>
                            </div>       
                    </div>
                <?php } ?>
            </div>
        </div>	
    </section>
    <footer>
        <div class="Contenido_footer"></div>
    </footer>
</body>
    <script>
        $(document).ready(function(){
            $('.Contenido_header').load('./Header.html');
        });

        $(document).ready(function(){
            $('.Contenido_menu').load('./Menu_index.php');
        });

        $(document).ready(function(){
            $('.Contenido_footer').load('./Footer.html');
        });
    </script>
</html>