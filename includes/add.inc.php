<?php

if (isset($_POST['submit'])) {

  //get the data from form
  $productName = $_POST['product_name'];
  $brandname = $_POST['brand_name'];
  $price = $_POST['price'];
  $qty = $_POST['qty'];
  $productdescription = $_POST['product_description'];





  include_once "dbh.inc.php";
  include_once "myfunction.inc.php";


  if (emptyaddProducts($productName, $brandname, $price, $qty, $productdescription) !== false) {
    header("location: ../admin/add-product.php?error=emptyinput");
    exit();
  } else {
    creatproduct($conn, $productName, $brandname, $price, $qty, $productdescription);
    header("location: ../admin/add-product.php?error=successful");
  }
} else {
  header("location: ../admin/add-product.php?error=1");
}
