<?php 

include('backend/db/ConnectionMySQL.php');
include('backend/db/config_db.php');


function conectionDB()
{
    $newConn = new ConnectionMySQL();
    $newConn->CreateConnection();

    
    
    
 
            return $newConn;
}



function SeeBus()
{
   $newConn = new ConnectionMySQL();
   $newConn->CreateConnection();
   
   $query = 'SELECT * FROM autobuses';
   $result = $newConn->ExecuteQuery($query);
   $dbshow = '';

   if($result)
    {
     while ($row=$newConn->GetRows($result)) {
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
        $close= $newConn->CloseConnection();
}


    
}
?>