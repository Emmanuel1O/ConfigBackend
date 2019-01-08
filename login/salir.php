<?php 

//borrar las variables de sesion
unset($_SESSION);

//borar la sesion
session_destroy();

//redireccionar a la pagina de inicio
define('Pagina_Principal', '../intranet/index.php?mensaje=gracias');
header('Location: '.Pagina_Principal);

?>