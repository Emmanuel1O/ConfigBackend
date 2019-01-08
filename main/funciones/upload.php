<?php 





include('configuracion.php');

if($_SESSION['nivel']==1 || $_SESSION['nivel']==2){


//borrar del formulario



    if(isset($_FILES['photo']['name'])&&($_FILES['photo']['error']==UPLOAD_ERR_OK)){
            $nombre = $_SESSION['idusuario'].'jpg';
            $ruta = '../uploads/'.$nombre;

            move_uploaded_file($_FILES['photo']['tmp_name'], $ruta.$_FILES['photo']['name']);

    }
    define('Pagina_Principal','../index.php');
    header('Location: '.Pagina_Principal);



}else {
	define('Pagina_Principal', '../intranet/index.php?mensaje=sin_permiso');
	header('Location: '.Pagina_Principal);
}





?>














?>