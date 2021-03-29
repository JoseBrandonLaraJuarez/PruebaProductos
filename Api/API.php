<?php
$usurio = $_REQUEST['usuario'];
$psw = $_REQUEST['contraseña'];
$res = file_get_contents('');
$data = json_decode($res,true);

if($usuario === $data['user']&& $psw === $data["pass"]){
	echo "Datos correctos";
}else{
	echo "<script>alert('el usurio o contraseña es incorrecta')</script>";
	echo "<script>window.open('Login.html')</script>";
}
?>