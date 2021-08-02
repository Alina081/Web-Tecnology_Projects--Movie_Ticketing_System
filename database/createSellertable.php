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
$sql = "CREATE TABLE seller (
id VARCHAR(10) PRIMARY KEY NOT NULL,
    moviename VARCHAR(50) NOT NULL,
    date VARCHAR(50) NOT NULL,
    showtime VARCHAR(30) NOT NULL,
    number VARCHAR(50) NOT NULL,
    price VARCHAR(50) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table seller created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
