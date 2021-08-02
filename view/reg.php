<!DOCTYPE html>
<html>
<head>
<meta name="viewport", content="width=device-width, initial-scale=1">

</head>

<body>

<script src="../js/JsValidation.js"></script>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<h6 id="Header"><?php include '../header/header.php';?></h6>

<div class="sticky">
<div class="topnav">

<a href="../View/home.php">HOME</a>

<a href="../View/Account.php">ACCOUNTS</a>

<a href="../view/login.php">LOG IN</a>

<a href="../view/profile.php">PROFILE</a>

<a href="../View/sell.php">EMPLOYEE</a>

<a href="../control/logoutcheck.php">LOGOUT</a>



</div>
</div>


<?php

include('../Control/regcheck.php');

if(isset($_SESSION['username'])){
header("location: ../control/regoutput.php");
}
?>
</div>

<div id="RegistrationBlock4">
<h1 id="Title">Registration</h1>
</div>
<b>
<div id="RegistrationBlock5">
<h2 id="Marquee"><marquee>No Account? Create your Account now!</marquee></h2>
</div>
<div id="RegistrationBlock6">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='post' enctype = "multipart/form-data" onsubmit="return validateForm()">
  
  
  <Label>First Name:</label><br> <?php //echo $fnameerror;?> <h4 id="jsfnameerror"></h4>
  <input type="text" id="fname" name="fname" ><br><br>
  <Label>Last Name:</Label><br> <?php //echo $lnameerror;?> <h4 id="jslnameerror"></h4>
  <input type="text" id="lname" name="lname" ><br><br>
  <Label>Email:</Label><br> <h4 id="jsemailerror"></h4>
  <input type="text" id="email" name="email" ><br><br>
  <Label>User Name:</label><br> <?php //echo $emailerror;?> <h4 id="jsusernameerror"></h4>
  <input type="text" id="username" name="username" ><br><br>

  <Label>Date Of Birth:</Label><br>
  <input type="date" id="DOB" name="DOB" ><?php //echo $DOBError; ?> <h4 id="jsDOBerror"></h4><br><br>
  
  <Label>Password:</Label><br> <?php //echo $error;?> <h4 id="jspasserror"></h4>
  <input type="password" id="password" name="password" ><br><br>

  
  <Label>Confirm Password:</Label><br>
  <input type="password" id="cpassword" name="cpassword" ><?php// echo $cpasswordError; ?> <h4 id="jscpasserror"></h4><br><br>
 
  <Label>Address:</Label><br>
  <input type="text" id="address" name="address" ><?php// echo $addressError; ?><h4 id="jsaddresserror"></h4><br><br>

  <label>Gender:</label><?php// echo $genderError; ?> <h4 id="jsgendererror"></h4>
  <input type="radio" id="gender" name="gender" value="Male" >Male
  <input type="radio" id="gender" name="gender" value="Female" >Female
  <br><br><br>

  <label>Usertype:</label>
  <input type="text" id="usertype" name="usertype"><?php// echo $usertypeError; ?> <h4 id="jsuterror"></h4>
  
  <br><br>

  <br>

  <input type="submit" name="submit" id="Button" value="Submit">
  <input type="reset" name="reset" id="Button" value="reset">

</form> 
<br>


</b>

</div>
</body>
<?php include '../footer/footer.php';?>
</html>