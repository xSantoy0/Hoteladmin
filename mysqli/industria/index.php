<?php
	//valida la conexion a la base de datos
	require 'Conexion.php';
	$where = "";

	
	if(!empty($_POST))
	{
		$valor = $_POST['dato'];
		if(!empty($valor)){
			$where = "WHERE herramienta LIKE '%$valor%'";
		}
	}

	//crear la consulta
	$sql = "SELECT * FROM herramientas $where";
	//ejecuta la consulta
	$resultado = $mysqli->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prestamos</title>
    <link rel="shortcut icon" href="./img/logo_sena.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.6.0.mins"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
<header >
  <!--BARRA DE NAVEGACION-->
  <div class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a href="#" class="navbar-brand">
        <img class="logo" src="./img/logo.png" >
        <strong>Industria CIDE</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!--MENU-->
      <div class="collapse navbar-collapse" id="navbarHeader">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a href="registro.php" class="nav-link ">Registrarse</a>    
            </li>
             <li class="nav-item">
                <a href="acceso.php" class="nav-link ">Iniciar sesion</a>    
            </li>
        </ul>
      </div>
    <!--SUBMENU CATEGORIAS-->
      <div class="dropdown" style="margin-right: 40px;">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
          Categorias
        </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#">Herramientas Manuales</a></li>
            <li><a class="dropdown-item" href="#">Herramientas de Medición</a></li>
            <li><a class="dropdown-item" href="#">Herramientas Eléctricas y Neumáticas</a></li>
            <li><a class="dropdown-item" href="#">Herramientas de Corte</a></li>
            <li><a class="dropdown-item" href="#">Herramientas de Soldadura</a></li>
            <li><a class="dropdown-item" href="#">Herramientas de Ajuste y Montaje</a></li>
            <li><a class="dropdown-item" href="#">Herramientas de Mantenimiento y Reparación</a></li>
            <li><a class="dropdown-item" href="#">Herramientas de Seguridad</a></li>
            <li><a class="dropdown-item" href="#">Herramientas de Limpieza y Desengrasado</a></li>
          </ul>
      </div>  
<!--FORMULARIO DE BUSQUEDA-->
        <section class="main">
          <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
            <input type="text" id="dato" name="dato" placeholder="¿Que buscar hoy?" />
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" color="white" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>  
          </form>
   			</section>  
    </div>
  </div>
</header>

 <!--CATALOGO DE HERRAMIENTAS-->  
<section class="catalogo">
	
    <div class="container">
 		<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php
				while($row =$resultado->fetch_array(MYSQLI_ASSOC)){?>
       	<div class="col" >
			   		<div class="card shadow-sm" style="height:600px">
           		 <img height= "250px" src="data:image/jpg;base64, <?php echo base64_encode ($row['imagen'])?>" >
            		<div class="card-body" >
             			<h5 class="card-title"><?php echo $row['herramienta']?></h5>
            			<p class="card-text" style="text-align: justify"><?php echo $row['descripcion']?></p>
                  <p class="card-text"><?php echo $row['existencias'].'  Und. Disponibles'?></p>
            				<div class="d-flex justify-content-between align-items-center">
               					<div class="btn-group">
                          <button href="#" class="btn btn-primary" style="background-color:red; border-color: #96979a">Solicitar</button>
               					</div>
             				</div>
           			</div>
        		</div>       
        </div>
        <?php } ?>
    </div>	
</section>
</body>
</html>