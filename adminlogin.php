<html>
   
<head>
	<title>FunitureLand | The home of BestFurniture</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>


  
   
  <div class="bg-img">
   <br><br><br><br><br><br><br><br>

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

<style>
.bg-img {
  /* The image used */
  background-image: url("logback.png");



  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
h1,h2 { 
            text-align:center; 
            color:blue; 
            -webkit-text-stroke: 1px black; 
        } 
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
</style>

<body>

<center>


<h1><b>ADMIN LOGIN</b></h1>

 <form  name="f1" action="add_products.php" method="post">
 <table>
<tr>
 <td><h2 style="background-color:powderblue;">User Name</h2></td>
 <td><b>:</b></td>
<td><input type="text"  name="aname" value="" maxlength = "16" class="text-bars" placeholder="Username" required></td>
 </tr>
 
  <tr>
 
 <td><h2 style="background-color:powderblue;">Password:</h2></td>
 <td><b>:</b></td>
 <td><input type="password" value="FakePSW" name ="apwd" id="myInput" required><br>
<input type="checkbox" onclick="myFunction()" ><b>Show Password</b></td>
 </tr>
 
 
 
 
 <tr>
 <td><input type="submit" name="login" value="LOGIN"/></td>
 
 <td><input type="reset" name="reset" value="RESET"/></td>
 
 
 
 
 
 </tr>
 <tr>
 <td><br><br><b>IF you dont have account click here to Register???<a href="adminregister.php">Sign Up</a></b></td>
 </tr>
 </form>
 </table>
  <br><br><br><br>
 
 
 <body bgcolor="ash" >
 
 
 <?php
 
 if(isset($_REQUEST['login'])){
   $con=mysqli_connect("localhost","root","") or die(mysql_error());
   $db=mysqli_select_db($con,"ecom")or die(mysql_error());
   
   $query="select * from admin_register where admin_name='".$_REQUEST['aname']."' and admin_pwd='".$_REQUEST['apwd']."'";
     $result=mysqli_query($con,$query) or die(mysql_error());
$c=mysqli_num_rows($result);
if($c>0){
    echo header("Location:adminindex.php");
}
else
{
    echo '<b style="color:red;text-align:center;">INVALID USER!please Register</b>';
}
 mysqli_close($con);
   }
   ?>
   
</body> 
  </div>
   </html>

   