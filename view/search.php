<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
<h6 id="Header"><?php include '../header/header.php';?></h6>
</head>
<body>
<div class="sticky">
<div class="topnav">

<a href="../View/home.php">HOME</a>

<a href="../View/Account.php">ACCOUNTS</a>

<a href="../view/login.php">LOG IN</a>

<a href="../view/reg.php">REGISTRATION</a>

<a href="../view/search.php">SEARCH</a>

<a href="../View/sell.php">EMPLOYEE</a>


<a href="home.php">REMOVE REQUEST</a>

<a href="../control/logoutcheck.php">LOGOUT</a>
</div>
</div>

 <script>
function showmyuser() {
  var uname=  document.getElementById("uname").value;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("mytext").innerHTML = this.responseText;
    }
  else
  {
     document.getElementById("mytext").innerHTML = this.status;
  }
  };
  xhttp.open("POST", "/Mycode/HTML/project/control/getuser.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("uname="+uname);
}
</script>
</head>

<br>

<label>Find details of Profile table by ID :</label><br><br>
 ID:<input type="text" id="uname" onkeyup="showmyuser()" >
<p id="mytext"></p>

</body>
</html>