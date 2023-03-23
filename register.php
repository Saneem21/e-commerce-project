<!DOCTYPE html>
<html>
  
<div class="bg-img">
<br><br><br><br><br><br><br><br>

<center>
<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

h1 { 
            text-align:center; 
            color:blue; 
            -webkit-text-stroke: 1px black; 
        } 
		h2 { 
            text-align:center; 
            color:green; 
            -webkit-text-stroke: 1px black; 
        } 
          

.bg-img {
  /* The image used */
  background-image: url("back05.png");



  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container {
  position: absolute;
  right: 0;
  margin: 20px;
  max-width: 300px;
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=email],input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus,input[type=email], input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}




</style>
<body>
 
<h1> REGISTRATION FORM</h1>
<h2>PLEASE FILL THE  FORM TO CREATE AN ACCOUNT</h2>
 <form  name="f1" action="" method="post">
 <table>
 <tr>
 <td><h3 style="background-color:powderblue;">User Name</h3></td>
 <td><b>:</b></td>
<td><input type="text"  name="name" value="" maxlength = "16" class="text-bars" placeholder="Username" required></td>
 </tr>
 <tr>
 <td><h3 style="background-color:powderblue;">E-mail Id</h3></td>
 <td><b>:</b></td>
 <td><input type="email"  name="mail" value="" placeholder="Email Id"required></td>
 </tr>
 
 
 <tr>
 
 <td><h3 style="background-color:powderblue;">Password:</h3></td>
 <td><b>:</b></td>
 <td><input type="password" value="FakePSW" placeholder="minumun 8 character" name ="pwd" id="myInput" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
<input type="checkbox" onclick="myFunction()" >Show Password</td>
 </tr>
 
 
 <tr>
 <td><input type="submit" name="signup" value="SIGNUP"/></td>
 
 <td><input type="reset" name="reset" value="RESET"/></td>
 
 
 
 </tr>
 <tr>
 <td><br><br><b>ALREADY HAVE AN ACCOUNT???<a href="login.html">SIGN IN</a></b></td>
 </tr>
 


 
 </form>
 </table>
 
<h5>PASSWORD SHOULD HAVE  ATLEAST 1CAPTITAL LETTER ,1 SPECIAL CHARACTER,AND 1 NUMBER </h5>
 
 <body bgcolor="ash"  >
 
 
 <?php
 
 if(isset($_REQUEST['signup'])){
   $conn=mysqli_connect("localhost","root","") or die(mysql_error());
   $db=mysqli_select_db($conn,"ecom")or die(mysql_error());
   
     $query="insert into register01 values('".$_REQUEST["id"]."','".$_REQUEST["name"]."','".$_REQUEST["mail"]."','".$_REQUEST["pwd"]."')";
 if(mysqli_query($conn,$query))
 {
    echo header("Location:welcom.php?username=".$_REQUEST['name']);
 }
 else
     echo "Invalid";
   }
   
   ?>
   </body>
   
   </div>
   
   </html>
