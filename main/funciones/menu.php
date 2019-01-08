<?php 
//menu administrador con la $_SESSION['nivel']==1
function getMenuAdministrador(){
    $resultado = '
        <nav class="menu">
            <ul>
             <li><a href="index.php" tittle="Inicio">Inicio</a></li>
             <li><a href="usuarios.php" tittle="Inicio">Usuarios</a></li>
             <li><a href="clientes.php" tittle="Inicio">Clientes</a></li>
            </ul>
        </nav>
    ';

    return $resultado;

}

//menu administrador con la $_SESSION['nivel']==2
function getMenuEmpleado(){
    $resultado = '
    <nav class="menu">
        <ul>
         <li><a href="index.php" tittle="Inicio">Inicio</a></li>
         <li><a href="clientes.php" tittle="Inicio">Clientes</a></li>
        </ul>
    </nav>
';

return $resultado;



}



?>