<?php 





include('configuracion.php');

if($_SESSION['nivel']==1){



//recogemos el parametro id con el metodo get


$id = $_GET['id'];


//recoger las variables del formulario

$nombre = strip_tags(addslashes($_POST['nombre']));
$apellidos = strip_tags(addslashes($_POST['apellido']));
$user = strip_tags(addslashes($_POST['user']));
$pass = strip_tags(addslashes($_POST['pass']));
$email = strip_tags(addslashes($_POST['email']));
$telefono = strip_tags(addslashes($_POST['telefono']));
$nivel = strip_tags(addslashes($_POST['nivel']));

$wsqli = "UPDATE `usuarios` SET nombre='$nombre',apellido='$apellidos',user='$user',pass='$pass',email='$email',telefono='$telefono',nivel='$nivel' WHERE idusuario='$id'";
$result = $con->query($wsqli);
if($con->errno) die($con->error);


define('Pagina_Principal', '../usuarios.php');
header('Location: '.Pagina_Principal);






}else {
	define('Pagina_Principal', '../intranet/index.php?mensaje=sin_permiso');
	header('Location: '.Pagina_Principal);
}





?>














?>