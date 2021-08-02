<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "movie_ticketing_system";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$recv=$_REQUEST['id'];
// sql to delete a record
$sql = "DELETE FROM registration WHERE id=$recv";

if (mysqli_query($conn, $sql)) {
  header("Location: regoutput.php?deleted");
  //echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>