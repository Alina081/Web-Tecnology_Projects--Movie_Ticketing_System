<?php

include('../Control/profilecheck.php');

include('../Control/Updatecheck.php');

if(isset($_SESSION['username'])){
header("location: ../control/profileoutput.php");
}
?>



<!DOCTYPE html>
<html>
<head>
<title>Profile</title>
</head>

<script src="../js/ProfileJsValidation.js"></script>
  
<link rel="stylesheet" type="text/css" href="../css/style.css">
<h6 id="Header"><?php include '../header/header.php';?></h6>

<div class="sticky">
<div class="topnav">

<a href="../View/home.php">HOME</a>

<a href="../View/Account.php">ACCOUNTS</a>

<a href="../view/login.php">LOG IN</a>

<a href="../view/reg.php">REGISTRATION</a>

<a href="../view/search.php">SEARCH</a>

<a href="../View/sell.php">EMPLOYEE</a>

<a href="../control/logoutcheck.php">LOGOUT</a>
</div>
</div>
<body>

 


<h1>Profile</h1>



<br><br><br><br>

<form action="" method='post' onsubmit="return validateForm2()">
  

<Label>Id:</label><br> <h4 id="jsiderror"></h4>
  <input type="text" id="id" name="id" ><br><br>

  <Label>User Name:</label><br> <?php //echo $emailerror;?> <h4 id="jsusernameerror"></h4>
  <input type="text" id="username" name="username" ><br><br>
  
  
  <Label>Email:</Label><br> <h4 id="jsemailerror"></h4>
  <input type="text" id="email" name="email" ><br><br><br>
 
  <Label>Date Of Birth:</Label><br>
  <input type="date" id="DOB" name="DOB" ><?php //echo $DOBError; ?> <h4 id="jsDOBerror"></h4><br><br>
  
  <Label>Password:</Label><br> <?php //echo $error;?> <h4 id="jspasserror"></h4>
  <input type="password" id="password" name="password" ><br><br>

  
 
  <Label>Address:</Label><br>
  <input type="text" id="address" name="address" ><?php// echo $addressError; ?><h4 id="jsaddresserror"></h4><br><br>

  <label>Gender:</label> <h4 id="jsgendererror"></h4>
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

</form>
<br>
</body>
<?php include '../footer/footer.php';?>
</html>



