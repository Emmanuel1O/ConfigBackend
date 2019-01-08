<?php 

$titulo = "";

if(isset($_GET['titulo'])){
    $titulo = "Se ha publicado el articulo con el titulo: <strong>".$_GET['titulo']."</strong>";



}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Blog de la revalida</title>
</head>
<body>
    <div class="container">
        <h1>Formulario para añadir contenido</h1>

         <div class="formulario">
                <form action="insercion_contenido.php" method="post" enctype="multipart/form-data" id="form_home">
        
                    <label for="titulo">Titulo</label>
                    <input type="text" name="titulo" id="titulo">

                    <label for="comentario">Comentario</label>
                    <textarea name="comentario" id="comentario" cols="30" rows="10"></textarea>

                    <p>Introducir foto de 2mb</p>
                    <input type="file" value="foto" name="foto" id="foto" class="enviar">
                    <br/>
                    <input type="submit" value="enviar" class="b_inicio">

                    </form>
         </div>

    
    <div class="boton">
    <a href="index.php">ver blog</a>
    </div>

    </div><!--container-->
    <div class="mensaje"><?= $titulo ?></div>


</body>
</html>