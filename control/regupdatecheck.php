<?php

 $error="";
// store session data
$id = $fname = "";

if (isset($_POST['update'])){
  if ((empty($_POST['fname']))) {
    
    $error = "<h4 style='color:red'>Enter Correct Input</h4>";
    
    }
    else
{
  $id=$_POST['id'];
  $name=$_POST['name'];
  $email=$_POST['email'];
  $username=$_POST['username'];
  $password=$_POST['password'];
  $cpassword=$_POST['cpassword'];
  $country=$_POST['country'];
  $city=$_POST['city'];
  $address=$_POST['address'];
  $gender=$_POST['gender'];
  $usertype=$_POST['usertype'];  
 
$connection = new dbreg();
$conobj=$connection->OpenCon();

$userQuery=$connection->UpdateUser($conobj,"heros",$id, $fname,$address,$email,$password,$telephone,$gender,$superpower);

echo $userQuery;
$connection->CloseCon($conobj);


}
}
?>