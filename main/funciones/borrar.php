<?php 





include('configuracion.php');

if($_SESSION['nivel']==1){



//recogemos el parametro id con el metodo get


$id = $_GET['id'];


//borrar del formulario


$wsqli = "DELETE FROM `usuarios` WHERE idusuario='$id'";
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