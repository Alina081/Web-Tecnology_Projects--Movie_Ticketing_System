<?php
include('../control/sellercheck.php');

if(isset($_SESSION['moviename'])){
header("location: selleroutput.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<script src="../js/SellerJsValidation.js"></script>
  
<link rel="stylesheet" type="text/css" href="../css/style.css">
<div class="sticky">
<div class="topnav">

<a href="../View/home.php">HOME</a>

<a href="../View/Account.php">ACCOUNTS</a>

<a href="../view/profile.php">PROFILE</a>

<a href="../view/login.php">LOG IN</a>

<a href="../View/sell.php">REGISTRATION</a>

<a href="../control/logoutcheck.php">LOGOUT</a>
</div>
</div>




</div>

<div class="column">
<legend style="text-align:center; font-size:35px;  color:#B8860B"><b> Employee </b></legend>
<form action=" " method="POST" onsubmit="return validateForm3()" >

<Label>Movie Id:</label><br>
  <input type="text" id="id" name="id" ><?php// echo $idError; ?><h4 id="jsiderror"></h4>
  <Label>Movie Name:</label><br>
  <input type="text" id="moviename" name="moviename" ><?php// echo $movienameError; ?> <h4 id="jsmnerror"></h4><br><br>
  <Label>Date:</label><br> 
  <input type="date" id="date" name="date" ><?php //echo $dateerror;?> <h4 id="jsdateerror"></h4><br><br>
  <Label>Showtime:</Label><br> 
  <input type="text" id="showtime" name="showtime" ><?php //echo $showtimeerror;?> <h4 id="jssterror"></h4><br><br>
  <Label>Serial Number:</Label><br>
  <input type="text" id="number" name="number" ><?php //echo $numbereerror;?> <h4 id="jsnuerror"></h4><br><br>
  <Label>Ticket Price:</label><br> 
  <input type="text" id="price" name="price" ><?php //echo $priceerror;?> <h4 id="jspriceerror"></h4><br><br>

  <input type="submit" name="submit" id="submit" value="submit">

 </form>
</div>



</html>