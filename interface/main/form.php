
<html>
<head>
<title>Visitors Form</title>
<link rel="stylesheet" href="../../../public/assets/bootstrap/dist/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="../../../public/assets/jquery-ui/jquery-ui.css" type="text/css">
<script type="text/javascript" src="../../../public/assets/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="../../../public/assets/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../../../public/assets/jquery-ui/jquery-ui.js"></script>
<link rel="stylesheet" href="../../../public/assets/font-awesome/css/font-awesome.min.css" type="text/css">

<script>
$(document).ready(function() { 
 
 $('#save').click(function() {  

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
<body class="body_top">
<div class="container">
  <div class="panel panel-primary">
  <div class = "panel-heading">
      <h2 class = "panel-title">Vistors Form</h2>
   </div>
  <div class="panel-body">
    <form action="save.php" method='POST'>  
                    <div class="form-group">
                    <div>
      <label for="visitorname" class="col-md-2">Visitor Name :</label>
      <select name="salutation" id="salutation">
      <option>Mr.</option>
      <option>Mrs.</option>
      <option>Dr.</option>
      <option>Ms.</option>
    </select>
      <input class="input-sm" id="fname" name="fname" type="text" autocomplete="off" placeholder="Enter Name" >
      <input class="input-sm"  id="lname" name="lname" type="text" autocomplete="off" placeholder="Last Name">
      </div><br>
      <div>
      <label for="datepicker" class="col-md-2">DOB :</label> 
      <input type="text" id="datepicker" name="dob" autocomplete="off" placeholder="Date Of Birth">
      </div><br>
      <div>
      <label for="gender" class="col-md-2">Gender :</label>
      <select name="gender" id="gender">
      <option>Male</option>
      <option>Female</option>
      <option>Others</option>
    </select>
    </div>
          </div>
          <div>
          <h3>Purpose Of Visting</h3>
         <!-- Group of default radios - option 1 -->
<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="radio1" name="purposeofvisiting" value="Consulting">
  <label class="custom-control-label" for="radio1">Consulting</label>
</div>

<!-- Group of default radios - option 2 -->
<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="radio2" name="purposeofvisiting"  value="Medicine">
  <label class="custom-control-label" for="radio2">Medicine</label>
</div>

<!-- Group of default radios - option 3 -->
<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="radio3" name="purposeofvisiting" value="Patient visit">
  <label class="custom-control-label" for="radio3">Patient Visit</label>
</div>
<!-- Group of default radios - option 4 -->
<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="radio4" name="purposeofvisiting" value="Others" checked>
  <label class="custom-control-label" for="radio4">Others</label>
</div>
</div>
  <div class="form-group">

  <label for="textarea"><h3>Additional Details</h3></label>
  <textarea class="form-control rounded-0" id="textarea" name="visitordetails" rows="3"></textarea>
</div>
<div class="btn-group">
      <button type="submit" id="save" name="visitorForm" class="btn btn-primary">Save</button>
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
</html>
