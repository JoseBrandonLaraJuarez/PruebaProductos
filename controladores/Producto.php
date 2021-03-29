<?php require_once '../modelos/Producto.php';

$accion = $_POST['a'] ?? $_GET['a'] ?? '';

if ($accion != '') {
	$pro = new Producto();

	switch ($accion) {
		case 'Ingresar':
			$pro->nombre = $_POST['nombre'];
			$pro->precio = $_POST['precio'];
			$pro->stock = $_POST['stock'];
			$pro->ingresar();
			break;
		case 'Editar':
			$pro->id= base64_decode($_POST['id']);
			$pro->nombre = $_POST['nombre'];
			$pro->precio = $_POST['precio'];
			$pro->stock = $_POST['stock'];
			$pro->editar();
			break;
		case 'elim':
			$pro->id = base64_decode($_GET['id']);
			$pro->eliminar();
			break;
	}
}

header('Location: ../vistas/Acciones');
?>