<?php
include('db.php');

session_start(); 
$username =$email =  $DOB = $password=   $address=  $gender =  $usertype =   "";
$usernameError= $emailError=   $DOBError= $passwordError =   $addressError=   $genderError=  $usertypeError= " ";

function test_input($data) {$data = trim($data);$data = stripslashes($data);$data = htmlspecialchars($data);
return $data; }

if(isset($_POST["submit"])){

$username = test_input($_POST["username"]);
$email = test_input($_POST["email"]);
$DOB  = test_input($_POST["DOB"]);
$password = test_input($_POST["password"]);
$address = test_input($_POST["address"]);
$gender = test_input($_POST["gender"]);
$usertype = test_input($_POST["usertype"]);



if ((empty($_POST['username'])) || (empty($_POST['email'])) ||(empty($_POST['DOB']))|| 
(empty($_POST['password']))  ||(empty($_POST['address'])) ||(empty($_POST['gender'])) ||(empty($_POST['usertype']))
 )
 {
    $usernameError =  " UserName is required";
    $emailError = " Email is required"; 
    $DOBError = " Date of birth is required";
    $passwordError = " Password is required";
    $addressError = " Address is required";
    $genderError = " Gender is required";
    $usertypeError =  " Usertype is required";
    
} else{

$username = $_POST['username'];
$email = $_POST['email'];
$DOB  = $_POST['DOB'];
$password = $_POST['password'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$usertype  = $_POST['usertype'];

$connection = new db();
$conn=$connection->OpenCon();
$userQuery=$connection->insertUser($conn,$id,$username,  $email, $DOB, $password, $address,  $gender, $usertype);

$_SESSION["username"]=$username;
$_SESSION["email"]=$email;
$_SESSION["DOB"] =$DOB ;
$_SESSION["password"]=$password;
$_SESSION["address"]=$address;
$_SESSION["gender"]=$gender;
$_SESSION["usertype"] =$usertype ;

}
}

?>