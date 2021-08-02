<?php
class dbsell{
function OpenCon(){
$servername = "localhost";
$username = "root";
$password = "";
$dbName= "movie_ticketing_system";
$conn = mysqli_connect($servername, $username, $password,$dbName) or die("Connect failed: %s\n". $conn -> error);
return $conn;}




// function insertUser($conn,$id, $moviename, $date, $showtime, $number, $price  ){
//     $stmt=$conn->prepare("insert into seller(id, moviename, date, showtime, number, price ) values(?,?,?,?,?,?)") or die(mysqli_error($conn));
//     $stmt->bind_param("isssss",$id, $moviename, $date, $showtime, $number, $price) or die(mysqli_error($conn));
//     $stmt->execute();
//     echo "<h3>Created Successful!</h3>";
//     $stmt->close();}

    function insertUser($conn,$id, $moviename, $date, $showtime, $number, $price ){
        $result=$conn->query("insert into seller(id, moviename, date, showtime, number, price ) values('$id','$moviename','$date','$showtime','$number','$price')") or die(mysqli_error($conn));
            return $result;
            echo "<h3>Registration Successful!</h3>";
        }

function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>
