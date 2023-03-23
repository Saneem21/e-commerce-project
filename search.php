<!DOCTYPE html>
<html>
<head>
<title> Retrive data</title>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>
<table>
<tr>
<td>Name</td>
<td>Image</td>
<td>Price</td>

</tr>

<?php
error_reporting(0);
$con = mysqli_connect("localhost","root","","ecom");
if(count($_POST)>0) {
$name=$_POST[name];
$result = mysqli_query($con,"SELECT * FROM products where name='$name' ");
}
?>
   
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
<td><?php echo $row["name"]; ?></td>
<td><?php echo $row["image"]; ?></td>
<td><?php echo $row["price"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
</body>
</html>