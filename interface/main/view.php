<?php  
require_once("../globals.php");

$res = sqlStatement("SELECT * FROM visitor_table");

$rows = array();

while($row = sqlFetchArray($res))

{  
    $rows[] = $row;
    
}

echo json_encode($rows);


 ?>  