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
$sql = "CREATE TABLE MyProfile (

firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(30)NOT NULL ,
username VARCHAR(30) NOT NULL,
DOB VARCHAR(50) NOT NULL,
 password VARCHAR(50) NOT NULL,
 gender VARCHAR(50) NOT NULL,
 usertype VARCHAR(50) NOT NULL,
    
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table Myprofile created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>