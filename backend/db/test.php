<?php 

require("ConnectionMySQL.php");

#objeto connection

$newConn = new ConnectionMySQL();

$newConn->CreateConnection();

$query = "SELECT * FROM autobuses";
$result = $newConn->ExecuteQuery($query);

if($result)
{
    while ($row=$newConn->GetRows($result)) {
        echo "Id autobus: ".$row[0]." "."Nombre Autobus: ".$row[1]." "."Color: ".$row[2];

    }
    
    $newConn->SetFreeResult($result);
}else{
    echo "<h3> Error Consulta </h3>";
}

?>