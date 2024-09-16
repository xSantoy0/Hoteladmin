<?php
	//valida la conexion a la base de datos
	require '../../Conexion.php';
	$where = "";


	//crear la consulta
	$sql = "SELECT * FROM tipo_hab $where";
	//ejecuta la consulta
	$resultado = $mysqli->query($sql);
?>

<html lang="es">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	</head>
	
	<body>
	<p>&nbsp;</p>
		<div class="container">
			<div class="row">
				<h3 style="text-align:center">AGREGAR HABITACION</h3>

			</div>
			
			<form class="form-horizontal" method="POST" action="guardar.php" enctype="multipart/form-data">

			<div class="form-group">
				<br>
					<label for="ubicacion" class="col-sm-2 control-label">Ubicación</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="ubicacion" name="ubicacion">
					</div>
				</div>

				<div class="form-group">
					<br>
					<label for="descripcion_habitacion" class="col-sm-2 control-label">Descripcion habitación</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="descripcion_habitacion" name="descripcion_habitacion">
					</div>
				</div>

				<div class="form-group">
					<br>
					<label for="precio" class="col-sm-2 control-label">Costo de la habitación</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="precio" name="precio">
					</div>
				</div>

							

				<div class="form-group">
					<br>
					<label for="imagen" class="col-sm-2 control-label">Imagen</label><br>
					
						<input type="file" id="imagen" name="imagen" required>
					
				</div>
				
				<div class="form-group">
				<br>
					<div class="col-sm-offset-2 col-sm-10">
						<a href="perfil_admin.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>