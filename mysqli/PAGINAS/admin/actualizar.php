<?php
	require '../conexion.php';


	$id_herramienta = $_GET['id_herramienta'];//no envie el dato como post ya que el formulario lo recepciona como hidden
	
//ejecuta la consulta para cargar datos de la tabla herramientas
	$sql = "SELECT * FROM herramientas WHERE id_herramienta = '$id_herramienta'";
	$resultado = $mysqli->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);	

	$sql_cat = "SELECT * FROM categorias";
//ejecuta la consulta para cargar datos de la tabla	
	$resultado_cat = $mysqli->query($sql_cat);		
?>

<html lang="es">

	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>>	
	</head>
	
	<body>
	<p>&nbsp;</p>
		<div class="container">
			<div class="row">
				<h3 style="text-align:center">ACTUALIZAR</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="guardar_actualizacion.php" enctype="multipart/form-data" >
				
				<input type="hidden" id="id_herramienta" name="id_herramienta" value="<?php echo $row['id_herramienta']; ?>" />	
			
				             	
				<div class="form-group">
				<br>
					<label  class="col-sm-2 control-label">Herramienta</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="herramienta" name="herramienta" value="<?php echo $row['herramienta'];?>"required>
					</div>
				</div>
				
				<div class="form-group">
					<br>
					<label for="descripcion" class="col-sm-2 control-label">Descripcion</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="descripcion" name="descripcion" value="<?php echo $row['descripcion'];?>"required>
					</div>
				</div>
										
				<div class="form-group">
					<br>
					<label for="existencias" class="col-sm-2 control-label">Existencias</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="existencias" name="existencias"  value="<?php echo $row['existencias'];?>"required>
					</div>
				</div>
			
				<div class="form-group">
				<br>
					<label class="col-sm-2 control-label">Categoria</label>
					<div class="col-sm-10">
						<select name="id_categoria" id="id_categoria" class="form-control">
						<?php
							while($row_cat =$resultado_cat->fetch_array(MYSQLI_ASSOC)){
						?>
					<option name="id_categoria"><?php echo $row_cat['id_categoria'].' --'. $row_cat['categoria']?></option>
					<?php } ?>
						</select>
					</div>
				</div>

				<div class="form-group">
					<br>
					<label for="imagen" class="col-sm-2 control-label">Imagen</label>
					<div class="col-sm-10">
						<img height="100px" border-radius="5px"  src="data:image/jpg;base64, <?php echo base64_encode ($row['imagen'])?>"/>
						<input type="file" id="imagen" name="imagen">
					</div>
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