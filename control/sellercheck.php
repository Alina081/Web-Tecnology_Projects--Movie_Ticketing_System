<?php
include('dbsell.php');

session_start(); 
$id=$moviename=  $date = $showtime= $number=  $price=   "";

$idError= $movienameError= $dateError=  $numberError= $priceError=  " ";

function test_input($data) {$data = trim($data);$data = stripslashes($data);$data = htmlspecialchars($data);
return $data; }

if(isset($_POST["submit"])){

$id = test_input($_POST["id"]);
$moviename = test_input($_POST["moviename"]);
$date = test_input($_POST["date"]);
$showtime = test_input($_POST["showtime"]);
$number  = test_input($_POST["number"]);
$price = test_input($_POST["price"]);




if ((empty($_POST['id'])) ||(empty($_POST['moviename'])) || (empty($_POST['date'])) || (empty($_POST['showtime'])) ||(empty($_POST['number']))|| 
(empty($_POST['price'])) 
 )
 {
    $idError = " Id is required!";
    $movienameError = " Movie Name is required!";
    $dateError = " Date is required"; 
    $showtimeError =  " Showtime is required";
    $numberError = " Number is required";
    $priceError = " price is required";
    
    
} else{


$id = $_POST['id'];
$moviename = $_POST['moviename'];
$date = $_POST['date'];
$showtime = $_POST['showtime'];
$number  = $_POST['number'];
$price= $_POST['price'];


$connection = new dbsell();
$conn=$connection->OpenCon();
$userQuery=$connection->insertUser($conn,$id,$moviename,$date, $showtime, $number, $price);

$_SESSION["id"]=$id;
$_SESSION["moviename"]=$moviename;
$_SESSION["date"]=$date;
$_SESSION["showtime"]=$showtime;
$_SESSION["number"] =$number ;
$_SESSION["price"]=$price;

}
}

?>