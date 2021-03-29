<?php
$usuario = $_REQUEST['usuario'];
$psw = $_REQUEST['Contraseña'];
$res = file_get_contents('https://api.mocki.io/v1/2186297b');
$data = json_decode($res,true);

if($usuario === $data['user']&& $psw === $data["pass"]){
	header('Location: vistas/Acciones');

}else{
	echo "<script>alert('el usurio o contraseña es incorrecta')</script>";
	echo "<script>window.open('index.html','_self')</script>";

}
?>