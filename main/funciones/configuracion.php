<?php 


$dbhost = 'localhost'; // hosting del servidor, nos lo da la empresa que contratemos
$db = 'megacursos'; // nombre de la base de datos
$dbuser = 'root';//usuario de la base de datos
$dbpass = '';//contraseña para la base de datos

//contactamos la base de datos

$con = new mysqli("localhost", "root", "", "megacursos"); //conexion a base de datos
	$con->query("SET CHARACTER SET utf8");
	if (mysqli_connect_errno()) {
	die("No se puede conectar a la base de datos:" . mysqli_connect_error());
	}

//comenzar session

session_start();




?>