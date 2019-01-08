<?php 
$error = "";

if(isset($_GET['mensaje'])&&($_GET['mensaje']=='mensaje_error')){
	$error= "Su usuario y contrseña no estan registrados";

}
	
if(isset($_GET['mensaje'])&&($_GET['mensaje']=='gracias')){
	$error= "Gracias por todo!";

}

if(isset($_GET['mensaje'])&&($_GET['mensaje']=='sin_permiso')){
	$error= "no tienes permiso de acceso";

}



?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Acceso Privado</title>
<link href="style.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="intranet.js"></script>
<style type="text/css">
@import url("../../../../Users/Emmanuel/Documents/Photoalbum WEBSITE/css/bootstrap.css");
</style>
</head>

<body>
<div id="form_home">
	<form action="../login/autenticar.php" method="post" onSubmit="return validacion_index()" id="f_inicio" name="f_inicio">
		<label for="email" class="email">Usuario</label>
		<input type="text" name="p_username" id="p_username"/>
		
		<label for="pass" class="pass">Contraseña</label>
		<input type="password" name="p_password" id="p_password"/>
		
		
		<br class="clearfloat"/>
		
		
		<input type="submit" value="Entrar" class="b_inicio"/>
		
		
		 
	</form>
	
	<p class="rojo"><?php echo $error ?></p>
	 
	
	
	
	
</div>



</body>
</html>