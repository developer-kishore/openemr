<?php
require_once("../../globals.php");
require_once("$srcdir/api.inc");
formHeader("Form: wellness_programe");
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
    <form method=post action="<?php echo $rootdir;?>/forms/wellness_programe/save.php?mode=new" name="my_form" enctype="multipart/form-data">
    <label for="Patientname" class="col-md-2">Patient Name :</label>
    <input class="input-sm" id="Patientname" name="name" type="text" autocomplete="off" placeholder="Enter Your Name" >
    <div>
      <label for="gender" class="col-md-2">Gender :</label>
      <select name="gender" id="gender">
<?php
$ores = sqlStatement("SELECT option_id, title FROM list_options " .
  "WHERE list_id = 'sex' AND activity = 1 ORDER BY seq");
while ($orow = sqlFetchArray($ores)) {
    echo "    <option value='" . attr($orow['option_id']) . "'";
    echo ">" . text($orow['title']) . "</option>\n";
}
?>
    </select>
    </div>
    <h4>Do you have any following medical problem? (Please check all that apply)</h4>
    <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="cancer" name="cancer" value="Cancer">
    <?php
  $ores = sqlStatement("SELECT option_id , title FROM list_options " .
  "WHERE list_id ='Wellness_Programe' AND option_id = 'Cancer' AND activity = 1 ORDER BY seq");
  while ($orow = sqlFetchArray($ores)) {
    echo "    <label  value='" . attr($orow['option_id']) ."'";
    echo ">" . text($orow['title']) . "</label>\n";
}
  ?>
    <input type="checkbox" class="custom-control-input" id="heartdisease" name="heart_disease" value="Heart Disease">
    <?php
  $ores = sqlStatement("SELECT option_id , title FROM list_options " .
  "WHERE list_id ='Wellness_Programe' AND option_id = 'Heart Disease' AND activity = 1 ORDER BY seq");
  while ($orow = sqlFetchArray($ores)) {
    echo "    <label  value='" . attr($orow['option_id']) ."'";
    echo ">" . text($orow['title']) . "</label>\n";
}
  ?>    
  <input type="checkbox" class="custom-control-input" id="weightproblem" name="weight_problem" value="Weight Problem">
  <?php
  $ores = sqlStatement("SELECT option_id , title FROM list_options " .
  "WHERE list_id ='Wellness_Programe' AND option_id = 'Weight Problem' AND activity = 1 ORDER BY seq");
  while ($orow = sqlFetchArray($ores)) {
    echo "    <label  value='" . attr($orow['option_id']) ."'";
    echo ">" . text($orow['title']) . "</label>\n";
}
  ?> 
    <input type="checkbox" class="custom-control-input" id="others" name="others" value="Others">
    <?php
  $ores = sqlStatement("SELECT option_id , title FROM list_options " .
  "WHERE list_id ='Wellness_Programe' AND option_id = 'Others' AND activity = 1 ORDER BY seq");
  while ($orow = sqlFetchArray($ores)) {
    echo "    <label  value='" . attr($orow['option_id']) ."'";
    echo ">" . text($orow['title']) . "</label>\n";
}
  ?> 
    </div>
    <div>
          <h4>Condition Crictical</h4>
<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="yes" name="condition_crictical" value="YES">
  <?php
  $ores = sqlStatement("SELECT option_id , title FROM list_options " .
  "WHERE list_id = 'yesno' AND option_id = 'YES' AND activity = 1 ORDER BY seq");
  while ($orow = sqlFetchArray($ores)) {
    echo "    <label  value='" . attr($orow['option_id']) ."'";
    echo ">" . text($orow['title']) . "</label>\n";
}
  ?>
</div>
<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="no" name="condition_crictical"  value="NO">
  <?php
  $ores = sqlStatement("SELECT option_id , title FROM list_options " .
  "WHERE list_id = 'yesno' AND option_id = 'NO' AND activity = 1 ORDER BY seq");
  while ($orow = sqlFetchArray($ores)) {
    echo "    <label  value='" . attr($orow['option_id']) ."'";
    echo ">" . text($orow['title']) . "</label>\n";
}
  ?>
</div>
</div>
<div class="form-group">
<label for="textarea"><h4>Symptoms</h4></label>
<textarea class="form-control rounded-0" id="textarea" name="symptoms" rows="3"></textarea>
</div>
<div class="custom-file">
    <input type="file" class="custom-file-input" id="customFile" name="document"> 
    <label class="custom-file-label" for="customFile">Upload any Documents</label>
  </div>
      <br>
<a href="javascript:document.my_form.submit();" name="document" class="link_submit">[Save]</a>
<br>
<a href="<?php echo $GLOBALS['form_exit_url']; ?>" class="link">[Don't Save]</a>
    </form>
  </div>
</div>


<?php
formFooter();
?>
