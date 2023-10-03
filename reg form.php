<!DOCTYPE html>
<html>
    <head>
        <title> Student Registration Form</title>
        <link rel ="Stylesheet" href ="form .css">
    </head>
    <body style="background-color:#98dae5;">
    
      <div class="alignform">
        <form action="register.php" method="post">
        
          <h2>Student Registration Form</h2>
      
          <label for="first-name">First Name:</label>
          <input type="text" id="first-name" name="fname" required>
      
          <label for="last-name">Last Name:</label>
          <input type="text" id="last-name" name="lname" required>
      
         
      
          <label for="email">Email Address:</label>
          <input type="email" id="email" name="email" required>
      
          <label for="mobile">Mobile:</label>
          <input type="tel" id="mobile" name="mobile" required>

          <label for="password">Password:</label>
          <input type="password" class="pass" id="password" name="password" required>
      
          <label for="gender">Gender:</label>
          <select id="gender" name="gender" required>
            <option value="">Select Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
          </select>
      
          <label for="address">Address:</label>
          <textarea id="address" name="address" required></textarea>
          
          <div class="buttons">

            <button type="submit">Submit</button>
            <p>If acount alredy exists<a href="Login.html">Login</a></p>
          </div>
          </head>
        </form>
        
      </div>
      <script>
    function isCharacterOnly(text) {
        let pattern = /^[a-zA-Z -]+$/;    //allows uppercase and lowercase, spaces, hyphens.
        return pattern.test(text);
    }

       function isNumericOnly(text){
        let pattern=/^[0-9]+$/;
        return pattern.test(text);
       }
function validateTname(tname){
        let pattern=/^[a-zA-Z0-9_.]{3,20}$/;
        return pattern.test(tname);

     }

     function validateAddress(address){
        let pattern=/^[a-zA-Z0-9 ., \/ \-]{4,50}$/;
        return pattern.test(address);

     }
    

    function validateEmail(email) {
      var pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      return pattern.test(email);
    }
   
     function validatePhone(phone) {
  var pattern = /^\d{10}$/;
  return pattern.test(phone);
}

function validate() {
    var name= document.getElementById('Fname').value;
    var name= document.getElementById('Lname').value;
    var name= document.getElementById('Password').value;
            var add= document.getElementById('address').value;
            var email= document.getElementById('Email').value;
            var phone= document.getElementById('mobile').value;
            var genderSelected = false;
    var genderOptions = document.getElementsByName('gender');
    for (var i = 0; i < genderOptions.length; i++) {
        if (genderOptions[i].checked) {
            genderSelected = true;
            break;
        }
    }
}
if (name==="") {
            document.getElementById('Fname').innerHTML = "Enter your name";
            return false;
        }
        
        if (!isCharacterOnly(name)) {
            document.getElementById('Fname').innerHTML ="Name can't contain number and special character";
            return false;
        }
        
        if (name.length <2 || name.length>50) {
            document.getElementById('Fname').innerHTML = "Name must be between 2 -50 letters";
            return false;
        }
        else{
            document.getElementById('Fname').innerHTML = "";
       
    }
    if (name==="") {
            document.getElementById('Lname').innerHTML = "Enter your name";
            return false;
        }
        
        if (!isCharacterOnly(name)) {
            document.getElementById('Lname').innerHTML ="Name can't contain number and special character";
            return false;
        }
        
        if (name.length <2 || name.length>50) {
            document.getElementById('Lname').innerHTML = "Name must be between 2 -50 letters";
            return false;
        }
        else{
            document.getElementById('Lname').innerHTML = "";
       
    }
    if(add===""){
    document.getElementById('add').innerHTML="Enter your address";
        return false;
}

if(!validateAddress(add)){
    document.getElementById('add').innerHTML="Invalid address";
        return false;
}
else{
    document.getElementById('add').innerHTML=""; 
}

if(email===""){
    document.getElementById('mail').innerHTML="Enter your email";
        return false;
}
if(!validateEmail(email)){
    document.getElementById('mail').innerHTML="Invalid email";
        return false;
}
else{
    document.getElementById('mail').innerHTML="";
     
}
if(phone===""){
    document.getElementById('phone').innerHTML="Enter your phone number";
        return false;
}
if(!validatePhone(phone)){
    document.getElementById('phone').innerHTML="Invalid phone number";
        return false;
}
else{
    document.getElementById('phone').innerHTML="";
       
}
if (!genderSelected) {
        document.getElementById('gen').innerHTML = "Select your gender";
        return false;
    } else {
        document.getElementById('gen').innerHTML = "";
    }
    if(password===""){
        document.getElementById('Pass').innerHTML="Enter your password"
        return false;

    }
    else{
        document.getElementById('pass').innerHTML="Invalid password";
        return false;
}
{
    document.getElementById('pass').innerHTML="Valid password";
       
}

    </script>
      </body>
      </html>