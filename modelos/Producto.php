<?php
require_once 'Conexion.php';

class Producto {
	public $id;
	public $nombre;
	public $stock;
	public $precio;
	private $conexion;


	public function __construct () {
		$this->id = 0;
		$this->nombre = '';
		$this->stock = 0;
		$this ->precio = 0;
		$this->conexion = new Conexion();
	}

	public static function listar () {
		$conexion = new Conexion ();
		$listado = $conexion->consultar('SELECT * FROM producto');
		$conexion->cerrar();
		return $listado;
	}

	public static function obtenerPorId ($id) {
		$conexion = new Conexion ();
		$listado = $conexion->consultar("SELECT * FROM producto WHERE id_producto = $id");
		$conexion->cerrar();
		return $listado[0];
	}

	public function ingresar () {
		//$s = "INSERT INTO roles (Nombre,) VALUES ('$this->nombre')";
		$s = "INSERT INTO producto (nombre_producto, stock, precio) VALUES ('$this->nombre', '$this->stock', '$this->precio')";
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}

	public function eliminar () {
		//$s = "DELETE FROM roles WHERE Id = $this->id";
		$s = "DELETE FROM producto WHERE id_producto = $this->id";


		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}

	public function editar () {
		//$s = "UPDATE roles SET Nombre = '$this->nombre' WHERE Id = $this->id";
		$s= "UPDATE producto SET nombre_producto = '$this->nombre', stock = '$this->stock', precio = '$this->precio' WHERE id_producto = $this->id"; 

		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}
}