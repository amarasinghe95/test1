<?php
// database connection code
if(isset($_POST['submit']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','test1');

// get the post records

$productName = $_POST['product_name'];
$brandname= $_POST['brand_name'];
$price = $_POST['price'];
$qty =$_POST['qty'];
$productdescription=$_POST['product_description'];
// database insert SQL code
$sql = "INSERT INTO product (product_id, product_name, brand_name, price, qty, product_description) VALUES ('0', '$productName', '$brandname', '$price', '$qty','$productdescription')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted";
}
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>