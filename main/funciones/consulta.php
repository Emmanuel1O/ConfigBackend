<?php 

//en este php vamos a realizar todas las consultas de la intranet
include('configuracion.php');




if($_SESSION['nivel']==1){
 

	
	

	$wsqli="SELECT * FROM usuarios";
	$result = $con->query($wsqli);
	if($con->errno) die($con->error);;
	while($fila = $result->fetch_array()){
		
		/*echo $fila['idusuario']."<br/>";
		echo $fila['nombre']."<br/>";
		echo $fila['apellido']."<br/>";
		echo $fila['user']."<br/>";
		echo $fila['pass']."<br/>";
		echo $fila['email']."<br/>";
		echo $fila['telefono']."<br/>";
		echo $fila['nivel']."<br/>";*/


$resultado1 .='<table class="table_user">
		<tr>
			<th><strong>ID</strong>
			<th><strong>Nom</strong>
			<th><strong>Ape</strong>
			<th><strong>User</strong>
			<th><strong>Pass</strong>
			<th><strong>Email</strong>
			<th><strong>Tele</strong>
			<th><strong>Nivel</strong>
			</tr>
			
		
		<tr>
		<td>'.$fila['idusuario'].'</td>
		<td>'.$fila['nombre'].'</td>
		<td>'.$fila['apellido'].'</td>
		<td>'.$fila['user'].'</td>
		<td>'.$fila['pass'].'</td>
		<td><a href="mailto:'.$fila['email'].'">'.$fila['email'].'</a></td>
		<td><a href="tel:'.$fila['telefono'].'">'.$fila['telefono'].'</a></td>
		<td>'.$fila['nivel'].'</td>
		<td><a href="editar.php?id='.$fila['idusuario'].'" class="enlace_rojo">Editar</a></td>
		<td><a href="funciones/borrar.php?id='.$fila['idusuario'].'" class="enlace_rojo" onclick="return confirmar()">Borrar</a></td>
		
		</tr>
		</table>';

		

		
	}

	
	

		
	
		
		


		

	











}else {
	define('Pagina_Principal', '../../intranet/index.php?mensaje=sin_permiso');
	header('Location: '.Pagina_Principal);
}


//start


?>