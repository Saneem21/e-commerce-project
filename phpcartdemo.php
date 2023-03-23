 
 <?
 //code for adding product in cart
case "add":
if(!empty($_POST["quantity"])) {
$pid=$_GET["pid"];
$result=mysqli_query($con,"SELECT * FROM tblproduct WHERE id='$pid'");
while($productByCode=mysqli_fetch_array($result)){
$itemArray = array($productByCode["code"]=>array('name'=>$productByCode["name"], 'code'=>$productByCode["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode["price"], 'image'=>$productByCode["image"]));
if(!empty($_SESSION["cart_item"])) {
// searches for specific value code
if(in_array($productByCode[0]["code"],array_keys($_SESSION["cart_item"]))) {
foreach($_SESSION["cart_item"] as $k => $v) {
if($productByCode[0]["code"] == $k) {
if(empty($_SESSION["cart_item"][$k]["quantity"])) {
$_SESSION["cart_item"][$k]["quantity"] = 0;
}
$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
}
}
} else {
//The array_merge() function merges one or more arrays into one array.
$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
}
} else {
$_SESSION["cart_item"] = $itemArray;
}
}
}
break;
?>