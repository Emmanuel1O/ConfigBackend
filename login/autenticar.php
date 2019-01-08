<?php 

include('../main/funciones/configuracion.php');


//recuperamos usuario mediante el metodo POST y lo filtramos para evitar codigo malicioso
$usuario = $_POST['p_username'];
$usuario = addslashes($usuario);
$usuario = strip_tags($usuario);


//recuperamos contraseña mediante el metodo POST y lo filtramos para evitar codigo malicioso
$password = $_POST['p_password'];
$password = addslashes($password);
$password = strip_tags($password); 



//conexion base de datos

$wsqli = "SELECT * FROM usuarios WHERE user='$usuario' AND pass='$password'";
$result = $con->query($wsqli);
if($con->errno) die($con->error);;


//comprobamos que el usuario y contraseña sean correctas
if($fila = $result->fetch_array()){

	
	session_start();
	$_SESSION['usuario']=$fila['user'];
	$_SESSION['contraseña']=$fila['pass'];
	$_SESSION['nombre']=$fila['nombre'];
	$_SESSION['nivel']=$fila['nivel'];
	$_SESSION['telefono']=$fila['telefono'];
	$_SESSION['idusuario']=$fila['idusuario'];
	
	define('Pagina_Principal', '../main/index.php');
	header('Location: '.Pagina_Principal);
		
} else{
	//redireccionar a la pagina de inicio
	define('Pagina_Principal', '../intranet/index.php?mensaje=mensaje_error');
	header('Location: '.Pagina_Principal);
	
}


	
 






?>