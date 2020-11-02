<?php
//------------Forms generated from formsWiz
require_once("../../globals.php");
require_once($GLOBALS["srcdir"]."/api.inc");
function wellness_programe_report($pid, $encounter, $cols, $id)
{
    $count = 0;
    $data = formFetch("wellness_programe", $id);
    // var_dump($data);
    if ($data) {
        print "<table border='2px'><tr>";
        foreach ($data as $key => $value) {
            if ($key == "id" || $key == "pid" || $key == "user" || $key == "groupname" || $key == "authorized" || $key == "activity" || $key == "date" || $value == "" || $value == "0000-00-00 00:00:00") {
                continue;
            }

            if ($value == "on") {
                $value = "yes";
            }

            $key=ucwords(str_replace("_", " ", $key));

            if(text($key) == 'Document'){
            print "<td><span class=bold>" . text($key) . ": </span><span class=text><img style='width:150px' src ='" . (substr($value,28)) . "'></span></td>";
            }else{
            print "<td><span class=bold>" . text($key) . ": </span><span class=text>" . text($value) . "</span></td>";  

            }

            // print "<td><span class=bold>" . text($key) . ": </span><span class=text>" . text($value) . "</span></td>";

            $count++;
            if ($count == $cols) {
                $count = 0;
                print "</tr><tr>\n";
            }
        }
    }

    print "</tr></table>";
}
