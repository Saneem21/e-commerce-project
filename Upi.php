<html>
<style>


body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}









body{
background-image:url('4.jpg');
background-repeat:no-repeat;
background-size:100% 100%;
}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 10px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: right;
}

li a {
  display: block;
  color: Red;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #657383;
}

</style>
<a href="a.html"><input type="submit" name="back" value="BACK"/></a>
<Center>

<div class="row">
  <div class="col-75">
    <div class="container">
      <form >
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label ><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="fname" placeholder="John M. Doe">
            <label ><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="mail" placeholder="john@example.com">
            <label ><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="addr" placeholder="542 W. 15th Street">
            <label ><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="cit" placeholder="New York">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
          </div>
		  <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>

<h1>
BHIM UPI Payment mode:
</h1>
<form action=" ">
<br><strong>Enter Amount:</strong><input type="text" name="Enter id" required value=""><br><br>
Enter UPI ID:<input type="text" name="Enter id" required value=""><br><br>
<script>
function myFunction() {
  alert(" Your Booking is confirmed");
}
</script>
<div onClick="myFunction()">
<input type="submit" name="sub" class="button" id="submitPayment" value="MakePayment" />  
</div>
</center>
</form>
<div class="container">
  <form class="form-inline" method="post" action="ordersme.php">
    <input type="text" name="firstname" class="form-control" placeholder="Enter ur name:">
    <button type="submit" name="save" class="btn btn-primary">View Order</button>
  </form>
</div>

<?php
 $time = $_SERVER['REQUEST_TIME'];

/**
* for a 30 minute timeout, specified in seconds
*/
$timeout_duration = 30;

/**
* Here we look for the user's LAST_ACTIVITY timestamp. If
* it's set and indicates our $timeout_duration has passed,
* blow away any previous $_SESSION data and start a new one.
*/
if (isset($_SESSION['LAST_ACTIVITY']) && 
   ($time - $_SESSION['LAST_ACTIVITY']) > $timeout_duration) {
    session_unset();
    session_destroy();
	echo "<p align='center'> If Your session has expired ! <a href='a.html'>Retry</a></p>";
    session_start();
}

/**
* Finally, update LAST_ACTIVITY so that our timeout
* is based on it and not the user's login time.
*/
$_SESSION['LAST_ACTIVITY'] = $time;

?>
<?php
       
  if(isset($_REQUEST['sub'])){
   $con=mysqli_connect("localhost","root","") or die(mysql_error());
   $db=mysqli_select_db($con,"ecom")or die(mysql_error());
   
$query="insert into checkout values('".$_REQUEST["id"]."','".$_REQUEST["fname"]."','".$_REQUEST["mail"]."',  '".$_REQUEST["addr"]."',  '".$_REQUEST["cit"]."',  '".$_REQUEST["state"]."',  '".$_REQUEST["zip"]."')";
if(mysqli_query($con,$query))
{
   echo "PAYMENT SUCCESSFULL";
}
 else
  echo "error";
   }

?>
</html>