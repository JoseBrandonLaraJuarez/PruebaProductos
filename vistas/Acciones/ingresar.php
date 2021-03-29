<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<title>Productos</title>
</head>
<body>
	<header>
		<center>
			
			<h2 class="display-2">Ingresa el producto</h2>
			<br>
		</center>
	</header>
<div class="container">
	<form action="../../controladores/Producto.php" method="post">
		<div class="form-group">
			<input class="form-control" id="exampleInputEmail1" name="nombre" placeholder="Ingresa el Nombre del Producto" required autofocus />
		</div>
		<div class="form-group">
			<input class="form-control" id="exampleInputEmail1" type= "number" name="stock" placeholder="Ingresa el Stock del producto" required autofocus />
		</div>
		<div class="form-group">
			<input  class="form-control" id="exampleInputEmail1" type= "number" name="precio" placeholder="Ingresa el Precio del producto" required autofocus />
		</div>
		<div class="form-group">
			<input class="btn btn-primary"  name="a" type="submit" value="Ingresar" />
		</div>

	</form>
</div>
</body>
</html>