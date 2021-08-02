function validateForm2() {
    var id = document.getElementById("id").value;
    
    var username = document.getElementById("username").value; 
    var email = document.getElementById("email");
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  
    var DOB = document.getElementById("DOB").value;
    var password = document.getElementById("password").value;
   
    var address = document.getElementById("address").value;
    var gender = document.getElementsByName("gender");
    var usertype = document.getElementById("usertype").value;
    
    
    document.getElementById("Button").onclick;
   
    if (id == "") {
        document.getElementById("jsiderror").innerHTML="Id must be filled out";
      //alert("Id must be filled out");//
      return false;
      }


      if (username == "") {
        document.getElementById("jsusernameerror").innerHTML="User Name must be filled out";
      //alert("User Name must be filled out");//
      return false;
      }
  
    if(!filter.test(email.value)) {
      valid = 0;
      document.getElementById("jsemailerror").innerHTML= "Invalid Email address";
    return false;
    }
    
     
    if (DOB == "") {
      document.getElementById("jsDOBerror").innerHTML="Date must be selected";
    //alert("Date of birth must be selected");//
    return false;
    }
  
    
    if (password.length<2) {
      document.getElementById("jspasserror").innerHTML="Password must be more than 1 input";
    //alert("Password must be filled out");//
    return false;
    }
    
    
    if (address == "") {
      document.getElementById("jsaddresserror").innerHTML="Address must be selected";
    //alert("Address must be selected");//
    return false;
    }
   
    if (gender[0].checked == true) {
      document.getElementById("jsgendererror").innerHTML = "Male selected";
    } else if (gender[1].checked == true) {
      document.getElementById("jsgendererror").innerHTML = "Female selected";
    } else {
      // no checked
      document.getElementById("jsgendererror").innerHTML = "Gender must be selected";
      return false;
    }
  
    if (usertype == "") {
      document.getElementById("jsuterror").innerHTML="Usertype must be selected";
    //alert("Usertype must be selected");//
    return false;
    }
    
    }