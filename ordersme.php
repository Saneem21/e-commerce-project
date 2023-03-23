<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <form action="index.html" class="form-inline my-2 my-lg-0" align="right">
      <button class="btn btn-outline-success my-2 my-sm-0" type="Logout" > logout</button>

    </form>
 

<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 10px 10px 10px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 3px;
  background-color: #f2f2f2;
  padding: 100px;
}

.col-25 {
  float: left;
  width: 15%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>



<h1>Order Details:</h1>					  
 <?php
error_reporting(0);
$con = mysqli_connect("localhost","root","","ecom");
if(count($_POST)>0) {
$firstname=$_POST[firstname];
$result = mysqli_query($con,"SELECT * FROM checkout where firstname='$firstname' ");
}
?>

<body>
<table>
<tr>
<td>S no:</td>

<td>First Name:</td>
<td>Email:</td>
<td>Address:</td>
<td>City</td>
<td>State</td>
<td>Zip</td>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
<td> <?php echo $i+1?></td>

<td><?php echo $row["firstname"]." " ;?></td>
<td><?php echo $row["email"]." " ;  ?></td>
<td><?php echo $row["city"]." " ; ?></td>
<td><?php echo $row["state"]." " ; ?></td>
<td><?php echo $row["zip"]; ?></td>


</tr>
<?php
$i++;
}
?>
</table>

</body>
</html>