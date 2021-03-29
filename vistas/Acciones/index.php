<?php require_once '../../modelos/Producto.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Productos</title>
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
	<header>
		<center>
		<h1 class="display-1">Productos</h1>
		<h2 class="display-2">Lista de Productos</h2>
		</center>
	</header>

	
		<div class="container">

			<div class="row">
				<div class="col">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>ID</th>
								<th>Nombre</th>
								<th>Stock en piezas</th>
								<th>Precio</th>
								<th colspan="4">Opciones</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach (Producto::listar() as $fila) { ?>
								<tr>
									<td><?= $fila[0] ?></td>
									<td><?= $fila[1] ?></td>
									<td><?= $fila[2] ?></td>
									<td><?= $fila[3] ?>$</td>
									<td>
										<a class="btn btn-info" href="editar.php?id=<?=base64_encode($fila[0])?>">Editar</a>
									</td>
									<td>
										<a class="btn btn-danger" href="../../controladores/Producto.php?a=elim&id=<?=base64_encode($fila[0])?>" onclick="return confirm('¿Desea eliminar?')">Eliminar</a>
									</td>
							
								</tr>
							<?php } ?>
						</tbody>
					</table>
	            </div>
	        </div>
	        	<a  class="btn btn-primary" href="ingresar.php">Ingresar nuevo producto</a>
	    </div>
</body>
</html>