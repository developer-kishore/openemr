
<?php

//------------Forms generated from formsWiz
require_once("../../globals.php");
require_once("$srcdir/api.inc");
require_once("$srcdir/forms.inc");

if ($encounter == "") {
    $encounter = date("Ymd");
}

if ($_GET["mode"] == "new") {
    if ($_FILES["document"]["name"] == false){
    $newid = formSubmit("wellness_programe", $_POST, $_GET["id"], $userauthorized);
    addForm($encounter, "Wellness Programe", $newid, "wellness_programe", $pid, $userauthorized);
    }
    else{
        $newid = formSubmit("wellness_programe", $_POST, $_GET["id"], $userauthorized);
        addForm($encounter, "Wellness Programe", $newid, "wellness_programe", $pid, $userauthorized);
        move_uploaded_file($_FILES["document"]["tmp_name"],$webserver_root."/sites/default/documents/patient_files/" . $_FILES["document"]["name"]);
        $file="file://".$webserver_root."/sites/default/documents/patient_files/".$_FILES["document"]["name"];
        sqlStatement("UPDATE wellness_programe SET document = ? WHERE id = ?", array($file,$newid));
    }
    
}  
elseif ($_GET["mode"] == "update") {
    $id = $_GET["id"];
    if($_FILES["document"]["name"] == false){
        sqlStatement("update wellness_programe set pid = ?,groupname = ?, user = ?, authorized = ?, activity = 1, date = NOW(), name = ?, 
        gender = ?, cancer  = ?, heart_disease = ?, weight_problem = ?, others= ?, condition_crictical= ?, 
        symptoms= ?, document= ?
        WHERE id = ?", array($_SESSION["pid"],$_SESSION["authProvider"], $_SESSION["authUser"], $userauthorized, $_POST["name"], $_POST["gender"], $_POST["cancer"], $_POST["heart_disease"], $_POST["weight_problem"], $_POST["others"],
        $_POST["condition_crictical"], $_POST["symptoms"],$_POST["document"],$id));
    }
    else{
    move_uploaded_file($_FILES["document"]["tmp_name"],$webserver_root."/sites/default/documents/patient_files/" . $_FILES["document"]["name"]);
    $file="file://".$webserver_root."/sites/default/documents/patient_files/".$_FILES["document"]["name"];
    sqlStatement("update wellness_programe set pid = ?,groupname = ?, user = ?, authorized = ?, activity = 1, date = NOW(), name = ?, 
    gender = ?, cancer  = ?, heart_disease = ?, weight_problem = ?, others= ?, condition_crictical= ?, 
    symptoms= ?, document= ?
    WHERE id = ?", array($_SESSION["pid"],$_SESSION["authProvider"], $_SESSION["authUser"], $userauthorized, $_POST["name"], $_POST["gender"], $_POST["cancer"], $_POST["heart_disease"], $_POST["weight_problem"], $_POST["others"],
    $_POST["condition_crictical"], $_POST["symptoms"],$file,$id));
    }  
}

$_SESSION["encounter"] = $encounter;
formHeader("Redirecting....");
formJump();
formFooter();
/*
$id = 0 + (isset($_GET['wellness_programe']) ? $_GET['wellness_programe'] : '');

$id = $_POST['id'];



$sets = "name = ?,
gender = ?,
cancer = ?,
heart_disease = ?,
weight_problem = ?,
others = ?,
condition_crictical = ?
symptoms = ?
document = ?";


if (empty($id)) {
    $newid = sqlInsert(
        
        "INSERT INTO wellness_programe SET $sets",
        [   
            $_POST["name"],
            $_POST["gender"],
            $_POST["cancer"],
            $_POST["heart_disease"],
            $_POST["weight_problem = ?,
            "],
            $_POST["others"],
            $_POST["condition_crictical"],
            $_POST["symptoms"],
            $_POST["document"],
            ]
        );
        echo "<meta http-equiv='refresh'content='0;url=new.php'>";
    }
    else {
        sqlStatement(
            "UPDATE wellness_programe SET $sets WHERE id = ?;",
            [
                $_POST["pid"],
                $_POST["name"],
                $_POST["user"],
                $_POST["gender"],
                $_POST["cancer"],
                $_POST["heart_disease"],
                $_POST["weight_problem = ?,
                "],
                $_POST["others"],
                $_POST["condition_crictical"],
                $_POST["symptoms"],
                $_POST["document"],
            $id
            
                ]
            );
           
        }
        */

    