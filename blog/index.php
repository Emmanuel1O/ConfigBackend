<?php 

include('configuracion.php');

//paginacion
$registro = 2;
$pagina = "";

if(isset($_GET['pagina'])){
    $pagina = $_GET['pagina'];

}

if(!$pagina){
    $inicio = 0;
    $pagina = 1;

}else{
    $inicio = ($pagina - 1) * $registro;



}

$wsqli = "SELECT * FROM contenidos ORDER BY idcontenidos";
$result = $con->query($wsqli);
if($con->errno) die($con->error);



/*while($fila = $result->fetch_array()){
    $contenido = "<article>";
    $contenido.="<h2>".$fila['titulo']."</h2>";
    $contenido.="<span>".$fila['fecha']."</span>";
    $contenido.="<p>".$fila['comentario']."</p>";
    $contenido.="<img src='".$fila['imagen']."' alt='".$fila['titulo']."'></img>";
    $contenido.="</article>";

    /*$titulo = $fila['titulo'];
    $fecha = $fila['fecha'];
    $comentario = $fila['comentario'];
    $imagen = $fila['imagen'];*/


?>

<!DOCTYPE html>
<html lang="en-es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/line.css">
    <title>Blog</title>
</head>
<body>
    <div class="container">
    <h1>Mi blog</h1>
    <hr class="linea"/>

    <main>
    <?php
    
    while($fila = $result->fetch_array()){
        $contenido = "<article>";
        $contenido.="<h2>".$fila['titulo']."</h2>";
        $contenido.="<span>".$fila['fecha']."</span>";
        $contenido.="<p>".$fila['comentario']."</p>";
        $contenido.="<img src='".$fila['imagen']."' alt='".$fila['titulo']."'></img>";
        $contenido.="</article>";
    
        /*$titulo = $fila['titulo'];
        $fecha = $fila['fecha'];
        $comentario = $fila['comentario'];
        $imagen = $fila['imagen'];*/
        echo $contenido;
    
    }?>
    </main>

    
    <footer>
        <a href="formulario.php">Crear Otro Blog</a>
    </footer>
    </div>

</body>
</html>