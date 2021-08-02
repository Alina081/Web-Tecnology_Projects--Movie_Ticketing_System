<?php
include('../control/logincheck.php');

if(isset($_SESSION['username'])){
header("location: home.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>LOG IN</title>
</head>
<script src="../js/loginjs.js"></script>
  <p id="mytext"></p>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  
<h6 id="Header"><?php include '../header/header.php';?></h6>

<div class="sticky">
<div class="topnav">



<a href="../View/Account.php">ACCOUNTS</a>

<a href="../view/profile.php">PROFILE</a>


<a href="../view/reg.php">REGISTRATION</a>

<a href="../View/sell.php">EMPLOYEE</a>

<a href="../control/logoutcheck.php">LOGOUT</a>


</div>
</div>
<body>
<h1>Login</h1>
<form action="" method='post' onsubmit="return validateForm1()">

 <Label>UserName:</label><br><?php echo $usernameerror; ?> <h4 id="jsusernameerror"></h4>
  <input type="text" id="username" name="username" placeholder="Enter your username!"><br><br>

  <Label>Password:</label><br><?php echo $passworderror; ?> <h4 id="jspassworderror"></h4>
  <input type="password" id="password" name="password"placeholder="Enter your password!"  ><br><br>


<input name="submit" type="submit" value="Login"><br>
<input name="reset" type="reset" value="reset"><br>
<ul type="squre">
<li><a href="ui.php"> USER INTERFACE </a></li>
</ul>
</form>
<br>
</body>
</html>