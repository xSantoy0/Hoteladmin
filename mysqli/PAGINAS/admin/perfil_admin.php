<?php
	//valida la conexion a la base de datos
	require '../../Conexion.php';
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
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>	
</head>

<body>

	<div class="container">
	<p>&nbsp;</p>
		<div class="row">
			<h2 style="text-align:center">HOTELES</h2>
		</div>
			
		<div class="row">
			
			<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
					<input type="text" id="dato" name="dato" placeholder="Ejemplo:playa" />
					<input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-primary" />
				</form>
			</div>
		
			
			<div class="row table-responsive">
			<table class="table table-striped">
			<thead>
			<tr>
			<th>CODIGO</th>
			<th>HERRAMIENTA</th>
			<th>DESCRIPCION</th>
			<th>EXISTENCIAS</th>
			<th>IMAGEN</th>
			<th>CATEGORIA</th>
			<th></th>
			<th></th>
			</thead>

			<tbody>
     		 <tr>
			<?php

			while($row =$resultado->fetch_array(MYSQLI_ASSOC)){
			?>
			<tr>
			<td><?php echo $row['id_habitacion']?></td>
			<td><?php echo $row['Numero_habitacion']?></td>
			<td><?php echo $row['descripcion_habitacion']?></td>
			<td><?php echo $row['precio']?></td>
			<td><?php echo $row['imagen']?></td>
			<td><?php echo $row['Id_tipohab']?></td>
			<td><?php echo $row['Disponibilidad']?></td>
			<td><img height="50px" width="50px" border-radius="5px" src="data:image/jpg;base64, <?php echo base64_encode ($row['imagen'])?>"></td>
		
		
			<td><a href="actualizar.php?id_habitacion=<?php echo $row['id_habitacion'];?>">	<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
			<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
			<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
			</svg><i class="bi bi-pencil-square"></i></a></td>

			<td><a href="eliminar.php?id_habitacion=<?php echo $row['id_habitacion'];?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
			<path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/></svg><i class="bi bi-trash-fill"></i></a></td>

			</tr>
			<?php } ?>
			</tbody>
			</table>

		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6"><a href="insertar.php" class="btn btn-primary" >REGISTRO NUEVO</a></div>
		<div>
			<br>
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6"><a href="../../Index.php" class="btn btn-secondary" >SALIR</a></div>
		<div>
<p>&nbsp;</p>
</body>
</html>	
