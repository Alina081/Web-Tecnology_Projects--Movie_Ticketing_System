<?php
session_start(); 
if(empty($_SESSION["moviename"])) 
{
header("Location: sell.php"); // Redirecting To Home Page
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<h6 id="Header"><?php include '../header/header.php';?></h6>

</head>


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
<h1 style= "text-align:center; color:MediumSeaGreen"><b> Congratulations!! </b><h1>
<h2 style= "text-align:center; color:darkorange"><b> Your Ticket Is Confirm </b><h2>

<?php 
//echo "<h2>your input</h2>";

//echo  $_SESSION["id"];
echo "<br>";
//echo  $_SESSION["moviename"];
echo "<br>";

//echo  $_SESSION["date"];
echo "<br>";

//echo  $_SESSION["showtime"];
echo "<br>";


//echo  $_SESSION["number"];
echo "<br>";

//echo  $_SESSION["price"];
echo "<br>";

?>





</div>

</body>
</html>