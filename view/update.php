<?php
include('../control/db.php');
include('../control/updatecheck.php');
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<h6 id="Header"><?php include '../header/header.php';?></h6>
<title>update</title>

</head>
<body>
<div class="sticky">
<div class="topnav">

<a href="../View/home.php">HOME</a>

<a href="../View/Account.php">ACCOUNTS</a>

<a href="../view/login.php">LOG IN</a>

<a href="../view/reg.php">REGISTRATION</a>

<a href="../view/search.php">SEARCH</a>

<a href="../View/sell.php">EMPLOYEE</a>


<a href="home.php">REMOVE REQUEST</a>

<a href="../control/logoutcheck.php">LOGOUT</a>
</div>
</div>

<script src="../js/ProfileJsValidation.js"></script>
<h2>Update Profile information</h2>

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

  <input type="submit" name="update" id="jButton" value="update">
  </form>
  <a href="search.php"><br><button name="cancel"  id="jCancle">Cancel</button></a><br>
  


  <?php

$connection = new db();
$conn=$connection->OpenCon();
$userQuery=$connection->showall($conn,"registration"); 
 

echo "<table border='1'>
<tr>
<th>id</th>
<th>username</th>
<th>email</th>
<th>DOB</th>
<th>password</th>
<th>address</th>
<th>gender</th> 
<th>usertype</th>

</tr>";

if($userQuery->num_rows > 0){
    while($row=$userQuery->fetch_assoc())
    {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['username'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
   
    echo "<td>" . $row['DOB'] . "</td>";
    echo "<td>" . $row['password'] . "</td>";

    echo "<td>" . $row['address'] . "</td>";
    echo "<td>" . $row['gender'] . "</td>";
    echo "<td>" . $row['usertype'] . "</td>";
    
   
    }
    echo "</table>"; //$conn->close(); //mysqli_close($conn);
    } 
?>  
</body>
</html>