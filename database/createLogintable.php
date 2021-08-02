<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "movie_ticketing_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE UserLogin (
username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table login created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
