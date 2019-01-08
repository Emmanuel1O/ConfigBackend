<?php 
include('funciones/menu.php');
include('funciones/configuracion.php');






//impedimos el acceso a las personas que no se han loggeado


if($_SESSION['nivel']==1){

    $id = $_GET['id'];

	$wsqli = "SELECT * FROM usuarios WHERE idusuario='$id'";
	$result = $con->query($wsqli);
	if($con->errno) die($con->error);
	while($fila = $result->fetch_array()){

		$id = $fila['idusuario'];
		$nombre = $fila['nombre'];
		$apellido = $fila['apellido'];
		$user = $fila['user'];
		$pass = $fila['pass'];
		$tel = $fila['telefono'];
		$email = $fila['email'];
		$nivel = $fila['nivel'];
	}



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

	
	 <h2 class="principal">Actualizar</h2>
		<div class="formulario">
			<form action="funciones/editar_usuarios.php?id=<?= $id ?>" method="post" id="form_home">

				<label for="nombre">Nombre</label>
				<input id="nombre" name="nombre" type="text" value="<?= $nombre ?>">

				<label for="apellido">Apellidos</label>
				<input id="apellido" name="apellido" type="text" value="<?= $apellido ?>" >

				<label for="user">Usuario</label>
				<input id="user" name="user" type="text" value="<?= $user ?>" >

				<label for="pass">Password</label>
				<input id="pass" name="pass" type="password" value="<?= $pass ?>" >

				
				<label for="email">Email</label>
				<input id="email" name="email" type="email" value="<?= $email ?>" >
				
				<label for="telefono">Telefono</label>
				<input id="telefono" name="telefono" type="text" value="<?= $tel ?>" >

				
				<label for="nivel">Nivel</label>
				<input id="nivel" name="nivel" type="text" value="<?= $nivel ?>" >

				<input type="submit" value="Actualizar" class="b_inicio">






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
	 
