<?php 

include('configuracion.php');

if($_SESSION['nivel']==1){

//recoger las variables del formulario

$nombre = strip_tags(addslashes($_POST['nombre']));
$apellidos = strip_tags(addslashes($_POST['apellido']));
$user = strip_tags(addslashes($_POST['user']));
$pass = strip_tags(addslashes($_POST['pass']));
$email = strip_tags(addslashes($_POST['email']));
$telefono = strip_tags(addslashes($_POST['telefono']));
$nivel = strip_tags(addslashes($_POST['nivel']));

$wsqli = "INSERT INTO `usuarios`(`nombre`, `apellido`, `user`, `pass`, `email`, `telefono`, `nivel`) VALUES ('$nombre','$apellidos','$user','$pass','$email','$telefono','$nivel')";
$result = $con->query($wsqli);
if($con->errno) die($con->error);


define('Pagina_Principal', '../usuarios.php');
header('Location: '.Pagina_Principal);






}else {
	define('Pagina_Principal', '../intranet/index.php?mensaje=sin_permiso');
	header('Location: '.Pagina_Principal);
}





?>