<?php 
include('funciones/menu.php');



session_start();

//impedimos el acceso a las personas que no se han loggeado


if($_SESSION['nivel']==1 || $_SESSION['nivel']== 2){



//$url_foto= $_SESSION['idusuario'].'jpg';







if($_SESSION['nivel']=='1')
{
	$menu = getMenuAdministrador();
	$perfil = 'administrador';
}else{
	$menu = getMenuEmpleado();
	$perfil= 'empleado';
}


?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Inicio intranet</title>
<link href="style.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="form.css">

<style type="text/css">
@import url("../../../../Users/Emmanuel/Documents/Photoalbum WEBSITE/css/bootstrap.css");
</style>
</head>

<body>
<div class="container">
<header>
	<h1>Intranet Revalida con Megacursos.com</h1>
		<h2>Bienvenido a la Intranet, <?= $_SESSION['nombre']?></h2>
			
			<div class="cerrar_sesion">
			<a href="../login/salir.php">Cerrar sesion</a>
			</div>
</header>
	<?= $menu ?>
	<div class="clearfix"></div>
	 <h2 class="principal">Inicio</h2>

	 	<!--<img src="uploads/" alt="">-->
	
		<div class="formulario">
			<form action="funciones/upload.php" method="post" enctype="multipart/form-data" id="form_home">
				<p>Selecciona una foto inferior a 2mb</p>
				<input type="file" name="photo" >
				<br/>
				<input type="submit" name="ok" value="Enviar">
			
			</form>
		
		
		</div>
	
	
	
	</div><!--end of container-->
	<footer>
<div class="left">
Telefono: <?= $_SESSION['telefono']; ?>

</div><!--end left-->




	<div class="right"><!--end right-->
	<?= $_SESSION['nombre'] ?>, has entrado con el perfil de: <strong><?= $perfil ?></strong> 
	</div>

</footer>
</body>
</html>


<?php }else {
	define('Pagina_Principal', '../intranet/index.php?mensaje=sin_permiso');
	header('Location: '.Pagina_Principal);
}
?>
	 
