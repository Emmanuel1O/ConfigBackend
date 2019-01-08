<?php 

include('backend/db/ConnectionMySQL.php');
include('backend/db/config_db.php');


$newConn = new ConnectionMySQL();
$newConn->CreateConnection();

function conectionDB($query)
{
    $newConn1 = new ConnectionMySQL();
    $newConn1->CreateConnection();

    $result = $newConn->ExecuteQuery($query);
    
    
    
 
            return $newConn;
}



function SeeBus()
{
    $conn = new ConnectionMySQL();
    $conn->CreateConnection();
    $valor->conectionDB($query='SELECT * FROM autobuses');



   if($result)
    {
     while ($row=$newConn1->GetRows($valor)) {

        $dbshow .= '<p>'.'Identificiacion Bus: '.$row[0].'</p>';
        
        $dbshow .= '<p>'.'Nombre: '.$row[1].'</p>';

        $dbshow .= '<p>'.'Color: '.$row[2].'</p>';

        $dbshow .= '<p>'.'Capacidad: '.$row[3].'</p>';

        $dbshow .= '<p>'.'Placa: '.$row[4].'</p>';

        $dbshow .= '<p>'.'Modelo: '.$row[5].'</p>';

        print($dbshow);

             }
    
    $newConn->SetFreeResult($result); 
    }else{
        echo "<h3> Error Consulta </h3>";
}


    
}
?>