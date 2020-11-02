<?php
require_once("../../globals.php");
?>
<html><head>
<link rel="stylesheet" href="<?php echo $css_header;?>" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body class="body_top">
<div class="container">
  <center><h2>Wellness Programe</h2></center>
  <div class="panel panel-default">
    <div class="panel-heading">Wellness Programe</div>
    <div class="panel-body">
<?php
include_once("$srcdir/api.inc");
$obj = formFetch("wellness_programe", $_GET["id"]);
?>
<form method=post action="<?php echo $rootdir?>/forms/wellness_programe/save.php?mode=update&id=<?php echo attr_url($_GET["id"]);?>" name="my_form" enctype="multipart/form-data">
<label for="Patientname" class="col-md-2">Patient Name :</label>
    <input class="input-sm" id="Patientname" name="name" type="text" autocomplete="off" placeholder="Enter Your Name" value="<?php echo attr($obj{"name"});?>" >
    <div>
      <label for="gender" class="col-md-2">Gender :</label>
      <select name="gender" id="gender">
      <?php
$ores = sqlStatement("SELECT option_id, title FROM list_options " .
  "WHERE list_id = 'sex' AND activity = 1 ORDER BY seq");
while ($orow = sqlFetchArray($ores)) {
    echo "    <option value='" . attr($orow['option_id']) . "'";
    if ($orow['option_id'] == $obj{"gender"}) {
        echo " selected";
    }

    echo ">" . text($orow['title']) . "</option>\n";
}
?>
     
    </select>
    </div>
    <h4>Do you have any following medical problem? (Please check all that apply)</h4>
    <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="cancer" name="cancer" value="Cancer"<?php echo ($obj{"cancer"} =='Cancer')?'checked':'' ?>>
    <?php
  $ores = sqlStatement("SELECT option_id , title FROM list_options " .
  "WHERE list_id ='Wellness_Programe' AND option_id = 'Cancer' AND activity = 1 ORDER BY seq");
  while ($orow = sqlFetchArray($ores)) {
    echo "    <label  value='" . attr($orow['option_id']) ."'";
    if ($orow['option_id'] == $obj{"cancer"}) {
      echo " selected";
    }
    echo ">" . text($orow['title']) . "</label>\n";
}
  ?>
    <input type="checkbox" class="custom-control-input" id="heartdisease" name="heart_disease" value="Heart Disease"<?php echo ($obj{"heart_disease"} =='Heart Disease')?'checked':'' ?>>
    <?php
  $ores = sqlStatement("SELECT option_id , title FROM list_options " .
  "WHERE list_id ='Wellness_Programe' AND option_id = 'Heart Disease' AND activity = 1 ORDER BY seq");
  while ($orow = sqlFetchArray($ores)) {
    echo "    <label  value='" . attr($orow['option_id']) ."'";
    if ($orow['option_id'] == $obj{"heart_disease"}) {
      echo " selected";
    }
    echo ">" . text($orow['title']) . "</label>\n";
}
  ?>
    <input type="checkbox" class="custom-control-input" id="weightproblem" name="weight_problem" value="Weight Problem"<?php echo ($obj{"weight_problem"} =='Weight Problem')?'checked':'' ?>>
    <?php
  $ores = sqlStatement("SELECT option_id , title FROM list_options " .
  "WHERE list_id ='Wellness_Programe' AND option_id = 'Weight Problem' AND activity = 1 ORDER BY seq");
  while ($orow = sqlFetchArray($ores)) {
    echo "    <label  value='" . attr($orow['option_id']) ."'";
    if ($orow['option_id'] == $obj{"weight_problem"}) {
      echo " selected";
    }
    echo ">" . text($orow['title']) . "</label>\n";
}
  ?>
    <input type="checkbox" class="custom-control-input" id="others" name="others" value="Others"<?php echo ($obj{"others"} =='Others')?'checked':'' ?>>
    <?php
  $ores = sqlStatement("SELECT option_id , title FROM list_options " .
  "WHERE list_id ='Wellness_Programe' AND option_id = 'Others' AND activity = 1 ORDER BY seq");
  while ($orow = sqlFetchArray($ores)) {
    echo "    <label  value='" . attr($orow['option_id']) ."'";
    if ($orow['option_id'] == $obj{"others"}) {
      echo " selected";
    }
    echo ">" . text($orow['title']) . "</label>\n";
}
  ?>
    </div>
    <div>
          <h4>Condition Crictical</h4>
<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="yes" name="condition_crictical" value="YES"<?php echo ($obj{"condition_crictical"} =='YES')?'checked':'' ?>>
  <?php
  $ores = sqlStatement("SELECT option_id , title FROM list_options " .
  "WHERE list_id = 'yesno' AND option_id = 'YES' AND activity = 1 ORDER BY seq");
  while ($orow = sqlFetchArray($ores)) {
    echo "    <label  value='" . attr($orow['option_id']) ."'";
    if ($orow['option_id'] == $obj{"condition_crictical"}) {
      echo " selected";
    }
    echo ">" . text($orow['title']) . "</label>\n";
}
  ?>
</div>
<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="no" name="condition_crictical"  value="NO"<?php echo ($obj{"condition_crictical"} =='NO')?'checked':'' ?>>
  <?php
  $ores = sqlStatement("SELECT option_id , title FROM list_options " .
  "WHERE list_id = 'yesno' AND option_id = 'NO' AND activity = 1 ORDER BY seq");
  while ($orow = sqlFetchArray($ores)) {
    echo "    <label  value='" . attr($orow['option_id']) ."'";
    if ($orow['option_id'] == $obj{"condition_crictical"}) {
      echo " selected";
    }
    echo ">" . text($orow['title']) . "</label>\n";
}
  ?>
</div>
</div>
<div class="form-group">
<label for="textarea"><h4>Symptoms</h4></label>
<textarea class="form-control rounded-0" id="textarea" name="symptoms" rows="3"><?php echo attr($obj{"symptoms"});?></textarea>
</div>
<div class="custom-file"> 
    <input type="file" class="custom-file-input" id="customFile" name="document"  value="<?php echo attr($obj{"document"});?>"> 
    <label class="custom-file-label" for="customFile"><?php echo attr($obj{"document"});?></label>
  </div>
<br>
<a href="javascript:top.restoreSession();document.my_form.submit();" class="link_submit">[Save]</a>
<br>
<a href="<?php echo $GLOBALS['form_exit_url']; ?>" class="link"
 onclick="top.restoreSession()">[Don't Save Changes]</a>
</form>
</div>
</div>
<?php
formFooter();
?>
