<?php
function emptyaddProducts($productName,$brandname,$price,$qty,$productdescription){
    $result;

    if(empty($productName) || empty($brandname) || empty($price) || empty($qty) || empty($productdescription)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
//write function for add product
function creatproduct($conn, $productName,$brandname,$price,$qty,$productdescription){
    
    //Inserting into "product" table
    $sql = "INSERT INTO product (product_name, brand_name, price, qty, product_description) VALUES (?,?,?,?,?);"; 
   $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../admin/add-product.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sssis",$productName,$brandname,$price,$qty,$productdescription );
    
    mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);
    //Finish quary

   
    //Inserting into "categories" table
    $sql1 = "INSERT INTO categories  (product_id) VALUES (?);";
    $stmt1 = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt1, $sql1)){
        header("location: ../add-product.php?error=stmtfailed");
        exit();
    }

    $last_entry1 = mysqli_insert_id($conn);
    mysqli_stmt_bind_param($stmt1, "i", $last_entry1);
    mysqli_stmt_execute($stmt1);

    mysqli_stmt_close($stmt1);
    //Finish quary
   
    //Inserting into "brand" table
    $sql2 = "INSERT INTO brand (product_id, category_id, brand_name) VALUES (?,?,?);";
    $stmt2 = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt2, $sql2)){
        header("location: ../add-product.php?error=stmtfailed");
        exit();
    }

    $last_entry2 = mysqli_insert_id($conn);
    mysqli_stmt_bind_param($stmt2, "iis", $last_entry1, $last_entry2,$brandname);
    mysqli_stmt_execute($stmt2);

    mysqli_stmt_close($stmt2);
    //header("location: ../signup.php?error=noerror");

    //Finish quary

    //Updating "brand table
    $sql3 = "UPDATE brand SET category_id = ? WHERE brand_id = ?;";
    $stmt3 = mysqli_stmt_init($conn);
 
    if(!mysqli_stmt_prepare($stmt3, $sql3)){
         header("location: ../add-product.php?error=stmtfailed");
         exit();
    }
 
    $last_entry3 = mysqli_insert_id($conn);
    mysqli_stmt_bind_param($stmt3, "iii", $last_entry3, $last_entry2 ,$last_entry1);
    mysqli_stmt_execute($stmt3);
 
    mysqli_stmt_close($stmt3);
    header("location: ../add-product.php?error=noerror");
   
    // var_dump($_POST )
}

