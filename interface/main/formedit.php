
<html>
<head>
<title>Edit Visitors</title>
<link rel="stylesheet" href="../../../public/assets/bootstrap/dist/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="../../../public/assets/jquery-ui/jquery-ui.css" type="text/css">
<script type="text/javascript" src="../../../public/assets/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="../../../public/assets/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../../../public/assets/jquery-ui/jquery-ui.js"></script>
<link rel="stylesheet" href="../../../public/assets/font-awesome/css/font-awesome.min.css" type="text/css">

<script>
$(document).ready(function() { 
 
 $('#update').click(function() {  

	$(".error").hide();
	 var hasError = false;
	 var nameReg = /^[a-zA-Z]+(\s[a-zA-Z]+)?$/;

	 var nameaddressVal = $("#fname").val();
	 if(nameaddressVal == '') {
		 $("#fname").after('<span class="error" style = "color:red">Please enter your Name.</span>');
		 hasError = true;
	 }

	 else if(!nameReg.test(nameaddressVal)) {
		 $("#fname").after('<span class="error" style = "color:red">Must contaian letters only.</span>');
		 hasError = true;
	 }

	 
	 if(hasError == true) { return false; }

   $(".error").hide();
	 var hasError = false;
	 var nameReg = /^[a-zA-Z]+(\s[a-zA-Z]+)?$/;

	 var nameaddressVal = $("#lname").val();
	 if(nameaddressVal == '') {
		 $("#lname").after('<span class="error" style = "color:red">Please enter your LastName.</span>');
		 hasError = true;
	 }

	 else if(!nameReg.test(nameaddressVal)) {
		 $("#lname").after('<span class="error" style = "color:red">Must contaian letters only.</span>');
		 hasError = true;
	 }

	 
	 if(hasError == true) { return false; }

   $(".error").hide();
	 var hasError = false;
	 var nameReg = /^[a-zA-Z]+(\s[a-zA-Z]+)?$/;

	 var nameaddressVal = $("#datepicker").val();
	 if(nameaddressVal == '') {
		 $("#datepicker").after('<span class="error" style = "color:red">Date birth is not valid</span>');
		 hasError = true;
	 }
	 
	 if(hasError == true) { return false; }

  });
});

  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  $( function() {
    $( "#salutation" ).selectmenu();
  } );
  </script>
</head>
<?php
require_once("../globals.php");

$res = sqlStatement("SELECT * FROM visitor_table WHERE visitorid = '".$_GET['visitorid']."'");
while ($row = sqlFetchArray($res)) {
    $visitorid = $row['visitorid'];
    $fname = $row['fname'];
    $lname = $row['lname'];
    $salutation = $row['salutation'];
    $visitorname = $row['salutation'] . $row['fname'];
    $dob= $row['dob'];
    $gender =  $row['gender'];
    $purpofvisit = $row['purposeofvisiting'];
    $visitordetails = $row['visitordetails'];
    $visitdate = $row['visitingdate'];
   

?>
<body class="body_top">
<div class="container">
  <div class="panel panel-primary">
  <div class = "panel-heading">
      <h2 class = "panel-title">Edit Vistors</h2>
   </div>
  <div class="panel-body">
    <form  action="save.php" method='POST'>  
                    <div class="form-group">
                    <div>
      <label for="visitorname" class="col-md-2">Visitor Name :</label>
    
     <select name="salutation" id="salutation">
      <option value ="Mr."<?php echo ($salutation=='Mr.')?'selected':'' ?>>Mr.</option>
      <option value ="Mrs."<?php echo ($salutation=='Mrs.')?'selected':'' ?>>Mrs.</option>
      <option  value ="Dr."<?php echo ($salutation=='Dr.')?'selected':'' ?>>Dr.</option>
      <option value ="Ms."<?php echo ($salutation=='Ms.')?'selected':'' ?>>Ms.</option>
    </select>
      <input class="input-sm" id="fname" name="fname" type="text" autocomplete="off" placeholder="Enter Name" value="<?php echo $fname;?>">
      <input class="input-sm"  id="lname" name="lname" type="text" autocomplete="off" placeholder="Last Name" value="<?php echo $lname; ?>">
      </div><br>
      <div>
      <label for="datepicker" class="col-md-2">DOB :</label> 
      <input type="text" id="datepicker" name="dob" autocomplete="off" placeholder="Date Of Birth" value="<?php echo $dob;?>">
      </div><br>
      <div>
      <label for="gender" class="col-md-2">Gender :</label>
      <select name="gender" id="gender">
      <option value ="Male"<?php echo ($gender=='Male')?'selected':'' ?>>Male</option>
      <option value ="Female"<?php echo ($gender=='Female')?'selected':'' ?>>Female</option>
      <option value ="Others"<?php echo ($gender=='Others')?'selected':'' ?>>Others</option>
    </select>
    </div>
          </div>
          <div>
          <h3>Purpose Of Visting</h3>
         <!-- Group of default radios - option 1 -->
<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="radio1" name="purposeofvisiting" value="Consulting" <?php echo ($purpofvisit=='Consulting')?'checked':'' ?>>
  <label class="custom-control-label" for="radio1">Consulting</label>
</div>

<!-- Group of default radios - option 2 -->
<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="radio2" name="purposeofvisiting"  value="Medicine" <?php echo ($purpofvisit=='Medicine')?'checked':'' ?>>
  <label class="custom-control-label" for="radio2">Medicine</label>
</div>

<!-- Group of default radios - option 3 -->
<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="radio3" name="purposeofvisiting" value="Patient visit" <?php echo ($purpofvisit=='Patient visit')?'checked':'' ?> >
  <label class="custom-control-label" for="radio3">Patient Visit</label>
</div>
<!-- Group of default radios - option 4 -->
<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="radio4" name="purposeofvisiting" value="Others" <?php echo ($purpofvisit=='Others')?'checked':'' ?>>
  <label class="custom-control-label" for="radio4">Others</label>
</div>
</div>
  <div class="form-group">

  <label for="textarea"><h3>Additional Details</h3></label>
  <textarea class="form-control rounded-0" id="textarea" name="visitordetails" rows="3"><?php echo $visitordetails;?></textarea>
</div>
<input type="hidden" name="visitorid" value="<?php echo $visitorid; ?>">
<div class="btn-group">
      <button type="submit" id="update" name="updateform" class="btn btn-primary">Update</button>
      <button type="reset" class="btn btn-default">Cancel</button>
      <a href="table.php" class="btn btn-success">
      Visitors <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
    </form>
    
    </div>
  </div>
</div>            
        </div>
</body>
<?php
}
?>
</html>
