<?php
session_start(); 

$cookie_name = "Employee";
$cookie_value = $_SESSION["username"];
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day


if(empty($_SESSION["username"])) 
{
header("Location:../view/reg.php"); // Redirecting To Home Page
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



<a href="../control/logoutcheck.php">LOGOUT</a>
</div>
</div>
<body>
<h2>Successfully Registered Information</h2>




<?php 
echo "<h2>Your Input:</h2>";

echo  $_SESSION["fname"];
echo "<br>";
echo  $_SESSION["lname"];
echo "<br>";

echo  $_SESSION["email"];
echo "<br>";

echo  $_SESSION["username"];
echo "<br>";


echo  $_SESSION["DOB"];
echo "<br>";

echo  $_SESSION["address"];
echo "<br>";

echo  $_SESSION["gender"];
echo "<br>";

echo  $_SESSION["usertype"];
echo "<br> <br> <br>" ;
//include('display.php');
// include 'footer/footer.php';?>

<?php
include('db.php');

$connection = new db();
$conn=$connection->OpenCon();
$userQuery=$connection->showall($conn,"registration"); 
 

echo "<table border='1'>
<tr>
<th>id</th>
<th>fname</th>
<th>lname</th> 
<th>email</th>
<th>username</th>
<th>DOB</th>
<th>password</th>
<th>cpassword</th>
<th>address</th>
<th>gender</th> 
<th>usertype</th>
</tr>";

if($userQuery->num_rows > 0){
    while($row=$userQuery->fetch_assoc())
    {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['fname'] . "</td>";
    echo "<td>" . $row['lname'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['username'] . "</td>";
    echo "<td>" . $row['DOB'] . "</td>";
    echo "<td>" . $row['password'] . "</td>";
    echo "<td>" . $row['cpassword'] . "</td>";
    echo "<td>" . $row['address'] . "</td>";
    echo "<td>" . $row['gender'] . "</td>";
    echo "<td>" . $row['usertype'] . "</td>";
    
    
    echo "</tr>";
    }
    echo "</table>"; //$conn->close(); //mysqli_close($conn);
    } 
?>  
<a href="../view/Account.php"> Account </a>
</body>
</html>
