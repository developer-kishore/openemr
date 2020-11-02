<?php

require_once("../globals.php");

$visitorid=$_POST['id'];


    sqlStatement("DELETE FROM visitor_table WHERE visitorid = $visitorid");

    echo "<meta http-equiv='refresh'content='0;url=table.php'>";


?>