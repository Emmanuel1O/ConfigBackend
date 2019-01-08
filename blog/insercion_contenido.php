<!DOCTYPE html>
<html lang="en-es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inserccion Contenido</title>
</head>
<body>
    
<?php 

//llamamos la base de datos
include('configuracion.php');

$titulo = htmlentities(addslashes($_POST['titulo']));
$comentario = htmlentities(addslashes($_POST['comentario']));
$fecha = date('Y/m/d H:i:s');
$ruta_destino = 'fotos/';

//gestionamos la foto
if($_FILES['foto']['error']){
    switch($_FILES['foto']['error']){
        case 1: //UPLOAD_ERR_INI_SIZE
        echo "El tamaño del archivo sobre pasa los 2mb";
        break;
        case 2: //UPLOAD_ERR_FORM_SIZE
        echo "el tamaño del archivo es mas grande de lo permitido";
        break;
        case 3: //UPLOAD_ERR_PARTIAL
        echo "el envio de archivo ha sido interrumpido durante la transferencia";
        break;
        case 4: //UPLOAD_ERR_NO_FILE
        echo "el archivo no se encuentra";
        break;




    }


}


if(isset($_FILES['foto']['name'])&&($_FILES['foto']['error']==UPLOAD_ERR_OK)){
    
    //movemos las fotos temporales a la ruta destino
    move_uploaded_file($_FILES['foto']['tmp_name'], $ruta_destino.$_FILES['foto']['name']);


   
}
$url_foto = $ruta_destino.$_FILES['foto']['name'];


$wsqli1 = "INSERT INTO contenidos (titulo, fecha, comentario, imagen) VALUES ('$titulo','$fecha','$comentario','$url_foto')";

$result = $con->query($wsqli1);
if($con->errno) die($con->error);


define('PAGINA_INICIO', "formulario.php?titulo='$titulo'");
header('Location: '.PAGINA_INICIO);

?>


</body>
</html>