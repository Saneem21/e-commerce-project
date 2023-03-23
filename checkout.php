


<!DOCTYPE html>
<html>
<head>


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
</style>
</head>
<body>
<a href="a.html"><input type="submit" name="back" value="BACK"/></a>
<h2> Checkout Form</h2>

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

          <div class="col-50">
            <h3>Payment</h3>
            <label >Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            
			<dt>Card Number</dt>
        <dd>
            <input type="text" id="cc_no" name="cc_no" required value="" placeholder="1234-5678-9123" />
            <span id="err_cc_no" class="jserror"> </span>
        </dd>            
        <dt>Expiry Date</dt>
        <dd>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <td><select id="cc_exp_mm" name="cc_exp_mm">
                            <option value="">Month</option>
                            <option value="1" selected="selected">January</option>                                 
                            <option value="2">February</option>                              
                            <option value="3">March</option>                           
                            <option value="4">April</option>                           
                            <option value="5">May</option>                            
                            <option value="6">June</option>                            
                            <option value="7">July</option>                           
                            <option value="8">August</option>                             
                            <option value="9">September</option>                     
                            <option value="10">October</option>                              
                            <option value="11">November</option>                             
                            <option value="12">December</option>                             
                        </select></td>                         
                    <td width="20">&nbsp;</td>                         
                    <td><select id="cc_exp_yyyy" name="cc_exp_yyyy">
<option value="">Year</option>                     
                            
                            <option value="2021">2021</option>                            
                            <option value="2022">2022</option>                           
                            <option value="2023">2023</option>                             
                            <option value="2024">2024</option>                     
                            <option value="2025">2025</option>                              
                            <option value="2026">2026</option>                             
                            <option value="2027">2027</option>
                            <option value="2028">2028</option>                             
                            <option value="2029">2029</option>
                            <option value="2030">2030</option>
                        </select>                         
                    </td>                     
                </tr>                 
            </table>             
        </dd>
        <dt>CVV</dt>
        <dd>
            <input id="cvv" type="text" size="5" placeholder="354" name="cvv" required value="" />
        </dd>
        </dl>     
</fieldset> 
<br>
<br>
<table>
<tr>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
	
        
		
		
      
	     <script>
function myFunction() {
  alert(" Your Booking is confirmed");
}
</script>
<div onClick="myFunction()">
<a href="checkout.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction"> <input type="submit"  value="PROCEED TO PAY" name="sub"></a>
</div>

	 
      </form>
    </div>
  </div>
 
</div>
<div class="container">
  <form class="form-inline" method="post" action="ordersme.php">
    <input type="text" name="firstname" class="form-control" placeholder="Enter ur name:">
    <button type="submit" name="save" class="btn btn-primary">View Order</button>
  </form>
</div>

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
</body>
</html>
