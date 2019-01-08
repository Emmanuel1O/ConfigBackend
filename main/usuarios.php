<?php 
include('funciones/menu.php');
include('funciones/consulta.php');






//impedimos el acceso a las personas que no se han loggeado


if($_SESSION['nivel']==1){
	$menu = getMenuAdministrador();
	$perfil = 'administrador';
	//$usuarios = getUsuarios();


?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Inicio intranet</title>
<link rel="stylesheet" href="style.css" type="text/css">
<link rel="stylesheet" href="table.css" type="text/css">
<link rel="stylesheet" href="form.css" type="text/css">
<script type="text/javascript">
function confirmar() {
	if(!confirm('esta seguro que desea eliminar este usuario?')){
		return false;

	}
	
}



</script>
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
	<h2 class="principal">Usuarios Actuales</h2>
	 <?= $resultado1 ?> 
	
	 <h2 class="principal">Usuarios Actuales</h2>
		<div class="formulario">
			<form action="funciones/crear_usuario.php" method="post" id="form_home">

				<label for="nombre">Nombre</label>
				<input id="nombre" name="nombre" type="text">

				<label for="apellido">Apellidos</label>
				<input id="apellido" name="apellido" type="text">

				<label for="user">Usuario</label>
				<input id="user" name="user" type="text">

				<label for="pass">Password</label>
				<input id="pass" name="pass" type="password">

				
				<label for="email">Email</label>
				<input id="email" name="email" type="email">
				
				<label for="telefono">Telefono</label>
				<input id="telefono" name="telefono" type="text">

				
				<label for="nivel">Nivel</label>
				<input id="nivel" name="nivel" type="text">

				<input type="submit" value="Dar de Alta" class="b_inicio">






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


<?php
}else {
	define('Pagina_Principal', '../intranet/index.php?mensaje=sin_permiso');
	header('Location: '.Pagina_Principal);
}
?>
	 
