




<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <form action="home.php" class="form-inline my-2 my-lg-0" align="right">
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


<div class="container">
  <form action="" method="post">
   

  <div class="row">
      <div class="col-25">
        <label for="country"></label>
      </div>
      <div class="col-75">
        <select id="country" name="TOW">
          <option value="Organic">Organic</option>
          <option value="Plastic">Plastic</option>
          <option value="Paper">Paper</option>
  <option value="Metal">Metal</option>
   <option value="Glass">Glass</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Address</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="addr" placeholder="Write ur address.." style="height:200px"></textarea>
      </div>
    </div>



<div class="row">
      <div class="col-25">
        <label for="fname">Contact:</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="con" placeholder="Mobile Number">
      </div>
    </div>

    <div class="row">
      <input type="submit" name="sub" value="Submit">
    </div>
  </form>
</div>
<body bgcolor="white">
 <?php
       
  if(isset($_REQUEST['sub'])){
   $conn=mysqli_connect("localhost","root","") or die(mysql_error());
   $db=mysqli_select_db($conn,"desp")or die(mysql_error());
   
     $query="insert into recy values('".$_REQUEST["TOW"]."','".$_REQUEST["addr"]."','".$_REQUEST["con"]."')";
if(mysqli_query($conn,$query))
echo " <br>";
 else
die(mysql_error());
   }
 
 
 
 if(isset($_REQUEST['sub'])){
   $conn=mysqli_connect("localhost","root","") or die(mysql_error());
   $db=mysqli_select_db($conn,"desp")or die(mysql_error());
   
    $query=" select * from despinfo ";
$result=mysqli_query($conn,$query);
echo "<table border='1' ><caption> results found from customers:<caption>";
echo "<tr>";
echo '<th width="90" >TYPE OF WASTE </th>';
echo  '<th width="40" >QUANTITY OF WASTE</th>';
 echo '<th>LOCATION</th>';
 echo"</tr>";
while($row=mysqli_fetch_array($result)){
$addr=str_replace("\n","<br>",$row['address']);
echo "<tr>
<td >",$row['TypeofWaste']," </td>
<td >",$row['qof']," </td>

<td width='60%'>",$addr," </td>

</tr>";
}
echo "<table>";
mysqli_close($conn);
 }
 
 ?>
</body>
</html>
