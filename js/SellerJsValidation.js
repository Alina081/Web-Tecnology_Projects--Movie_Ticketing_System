function validateForm3() { 
    var id = document.getElementById("id").value;
    var moviename = document.getElementById("moviename");
    var pattern = /^[a-zA-Z0-9_]+$/;
  
    var date = document.getElementById("date").value; 
    var showtime = document.getElementById("showtime");
  var filter1 = /^([A-Z0-9_])+$/;

  var number = document.getElementById("number");
  var filter2 = /^([0-9_])+$/;

  
  var price = document.getElementById("price");
  var filter3 = /^([0-9_])+$/;
    
   
    
    if (id == "") {
        document.getElementById("jsiderror").innerHTML="Id must be filled out";
      //alert("Id must be filled out");//
      return false;
      }
    
    if(!pattern.test(moviename.value)) {
      valid = 0;
      document.getElementById("jsmnerror").innerHTML= "Invalid Name";
    return false;
    }
  
  
    if (date == "") {
      document.getElementById("jsdateerror").innerHTML="Date must be filled out";
    //alert("Date must be filled out");//
    return false;
    } 
  
  
    if(!filter1.test(showtime.value)) {
        valid = 0;
        document.getElementById("jssterror").innerHTML= "Invalid Showtime Number";
      return false;
      }



      if(!filter2.test(number.value)) {
        valid = 0;
        document.getElementById("jsnuerror").innerHTML= "Invalid  Number";
      return false;
      }

      if(!filter3.test(price.value)) {
        valid = 0;
        document.getElementById("jspriceerror").innerHTML= "Invalid Price";
      return false;
      }
    
    
   
    }
  
  
  
  
  
 