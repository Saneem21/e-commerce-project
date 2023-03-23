
    <?php
session_start();
include("db.php");

error_reporting(0);
if(isset($_GET['action']) && $_GET['action']!="" && $_GET['action']=='delete')
{
$order_id=$_GET['order_id'];

/*this is delet query*/
mysqli_query($con,"delete from orders where order_id='$order_id'")or die("delete query is incorrect...");
} 

///pagination
$page=$_GET['page'];

if($page=="" || $page=="1")
{
$page1=0;	
}
else
{
$page1=($page*10)-10;	
}

include "sidenav.php";
include "topheader.php";

?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <!-- your content here -->
          <div class="col-md-14">
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Orders  / Page <?php echo $page;?> </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive ps">
                  <table class="table table-hover tablesorter " id="">
                    <thead class=" text-primary">
                      <tr><th></th><th><th></th><th></th><th></th><th></th><th></th>
                    </tr></thead>
                    <tbody>
                    
                      
<h1>ORDERS:</h1>	
<form action="orders.php">
<input type="submit" name="vieworders" value="vieworder"/></a>
</form>				  
 <?php
   if(isset($_REQUEST['vieworders'])){
   $con=mysqli_connect("localhost","root","") or die(mysql_error());
   $db=mysqli_select_db($con,"ecom")or die(mysql_error());
   
    $query=" select * from checkout ";
     $result=mysqli_query($con,$query);
echo "<table border='1' >";
echo "<tr>";
echo '<th width="90" >S No</th>';
echo '<th width="90" >FIRST NAME</th>';
echo  '<th width="40" >EMAIL</th>';
 echo '<th>ADDRESS</th>';
  echo '<th>CITY</th>';
 echo '<th>STATE</th>';
 echo '<th>ZIP</th>';

 echo"</tr>";
while($row=mysqli_fetch_array($result)){

echo "<tr>
<td >",$row['id']," </td>
<td >",$row['firstname']," </td>
<td >",$row['email']," </td>
<td >",$row['address']," </td>
<td >",$row['city']," </td>
<td >",$row['state']," </td>
<td >",$row['zip']," </td>




</tr>";
}
echo "<table>";
mysqli_close($con);
 }
 
 ?>
                    </tbody>
                  </table>
                  
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      <?php
include "footer.php";
?>