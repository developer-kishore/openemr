<?php
/**
 * interface/main save.php
 *
 * @package   OpenEMR
 * @link      http://www.open-emr.org
 * @author    Naina Mohamed <naina@capminds.com>
 * @author    Brady Miller <brady.g.miller@gmail.com>
 * @copyright Copyright (c) 2012-2013 Naina Mohamed <naina@capminds.com> CapMinds Technologies
 * @copyright Copyright (c) 2019 Brady Miller <brady.g.miller@gmail.com>
 * @license   https://github.com/openemr/openemr/blob/master/LICENSE GNU General Public License 3
 */


require_once("../globals.php");
require_once("$srcdir../../library/api.inc");
require_once("$srcdir../../library/forms.inc");



//if (isset($_POST['updateform'])){
    $id = 0 + (isset($_GET['updateform']) ? $_GET['updateform'] : '');

$visitorid = $_POST['visitorid'];



$sets = "salutation = ?,
fname = ?,
lname = ?,
dob = ?,
gender = ?,
purposeofvisiting = ?,
visitordetails = ?";


if (empty($visitorid)) {
    $newid = sqlInsert(
        
        "INSERT INTO visitor_table SET $sets",
        [
            $_POST["salutation"],
            $_POST["fname"],
            $_POST["lname"],
            $_POST["dob"],
            $_POST["gender"],
            $_POST["purposeofvisiting"],
            $_POST["visitordetails"],
           
            ]
        );
       
        echo "<meta http-equiv='refresh'content='0;url=table.php'>";
    }
    else {
        sqlStatement(
            "UPDATE visitor_table SET $sets WHERE visitorid = ?;",
            [
                $_POST["salutation"],
            $_POST["fname"],
            $_POST["lname"],
            $_POST["dob"],
            $_POST["gender"],
            $_POST["purposeofvisiting"],
            $_POST["visitordetails"],
            $visitorid
            
                ]
            );
            echo "<meta http-equiv='refresh'content='0;url=table.php'>";
        }
