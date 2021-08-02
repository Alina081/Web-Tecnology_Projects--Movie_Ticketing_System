<?php
session_start(); 


$cookie_name = "Profile";
$cookie_value = $_SESSION["username"];
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day


if(empty($_SESSION["username"])) 
{
header("Location:../view/profile.php"); // Redirecting To Home Page
}

?>
<!DOCTYPE html>
<html>
<body>
<h2>Profile Information</h2>


<h5>Do you want to <a href="logoutcheck.php">logout</a></h5>

<?php 
echo "<h2>Your Input:</h2>";

echo  $_SESSION["username"];
echo "<br>";

echo  $_SESSION["email"];
echo "<br>";

echo  $_SESSION["DOB"];
echo "<br>";

echo  $_SESSION["password"];
echo "<br>";

echo  $_SESSION["address"];
echo "<br>";

echo  $_SESSION["gender"];
echo "<br>";

echo  $_SESSION["usertype"];
echo "<br> <br> <br>" ;
?>

<?php
include('db.php');
$connection = new db();
$conobj=$connection->OpenCon();
$userQuery=$connection->FetchCheckUser($conobj,"registration");


if ($userQuery->num_rows > 0) {
        // output data of each row
        while($row = $userQuery->fetch_assoc()) {
          
          echo "<table  border=1>".
 
          "<tr>".
          "<th>"."Id"."</th> ".
          "<th>"."User Name"."</th> ".
          "<th>"."Email"."</th> ".
          "<th>"."DOB"."</th> ".
          "<th>"."Password"."</th> ".
          "<th>"."Address"."</th> ".
          "<th>"."Gender"."</th> ".
          "<th>"."Usertyper"."</th> ".
         
        "</tr>".
      
        "<tr>".
        "<td>".$row["Id"]."</td>".
          "<td>".$row["User Name"]."</td>".
          "<td>".$row["Email"]."</td>".
          "<td>".$row["DOB"]."</td>".
          "<td>".$row["Password"]."</td>".     
          "<td>".$row["Gender"]."</td>".
          "<td>".$row["Address"]."</td>".
          "<td>".$row["Usertype"]."</td>".
         
        "</tr>".
        "</table>";
        }
      } 
      else {
        echo "0 results";
      }
    
?>


<a href="../view/Account.php"> Account </a>
</body>
</html>
