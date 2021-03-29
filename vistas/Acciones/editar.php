<?php
	require_once '../../modelos/Producto.php';
	$produc = Producto::obtenerPorId(base64_decode($_GET['id']));
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Producto</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>
<body>
	<header>
		<center>
		<h2 class="display-2">Modificar Producto</h2>
		</center>
	</header>
	<div class="container">
		<form action="../../controladores/Producto.php" method="post">


				<input class="form-control" id="exampleInputEmail1" type="hidden" name="id" value="<?= $_GET['id'] ?>" />
			
			<div class="form-group">
				<label for="txt">Ingresa el nombre del producto</label>
				<input class="form-control" id="exampleInputEmail1" name="nombre" placeholder="Ingresa Nombre del producto" value="<?= $produc[1] ?>" required autofocus />
			</div>
			<div class="form-group">
			<label for="txt">Ingresa el Stock del producto</label>
				<input class="form-control" id="exampleInputEmail1" name="stock" placeholder="Ingresa el stock del producto" value="<?= $produc[2] ?>" required autofocus />
			</div>
			<div class="form-group">
			<label for="txt">Ingresa el precio del producto</label>
				<input class="form-control" id="exampleInputEmail1" name="precio" placeholder="Ingresa Precio del producto" value="<?= $produc[3] ?>" required autofocus />
			</div>
			<div class="form-group">
			<input  class="btn btn-primary" name="a" type="submit" value="Editar" />
			</div>
		</form>
	</div>
</body>
</html>