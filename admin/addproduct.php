<!DOCTYPE html>
<head>
	
	<title>Add Products</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet" type="text/css">
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
	<link href="css/templatemo_style.css" rel="stylesheet" type="text/css">	
    <style>
        p {
            font-family: 'Open Sans', sans-serif;
            font-size: 20px;
            color: #09F;
            text-align: center;
            }
    </style>
</head>
<body class="templatemo-bg-gray">
	<h2 class="margin-bottom-15">Add Product</h2>
	<div class="container">
		<div class="col-md-12">			
			<form class="form-horizontal templatemo-create-account templatemo-container" role="form" action="includes/add.inc.php" method="POST">
				<div class="form-inner">
					<div class="form-group">
			          <div class="col-md-6">		          	
			            <label for="product_name" class="control-label">Product Name</label>
			            <input type="text" class="form-control" name="product_name" placeholder="">		            		            		            
			          </div>  
			          <div class="col-md-6">		          	
			            <label for="brand_name" class="control-label">Brand Name</label>
			            <input type="text" class="form-control" name="brand_name" placeholder="">		            		            		            
			          </div>             
			        </div>
			        <div class="form-group">
			          <div class="col-md-12">		          	
			            <label for="price" class="control-label">Price</label>
			            <input type="text" class="form-control" name="price" placeholder="">		            		            		            
			          </div>              
			        </div>			
			        
                    <div class="form-group">
                    
                    <div class="col-md-6">		          	
			            <label for="qty" class="control-label">Qty</label>
			            <input type="text" class="form-control" name="qty" placeholder="">		            		            		            
			          </div>              
			        </div>
			        <div class="form-group">
			          <div class="col-md-6">
			            <label for="product_description" class="control-label">Product Description</label>
			            <input type="product_description" class="form-control" name="product_description" placeholder="">
			          </div>
			          
			        </div>
			        <div class="form-group">
			          <div class="col-md-12">
			            <input type="submit" name="submit" value="Add Product" class="btn btn-info">
			            <!--<a href="login.php" class="pull-right">Login</a>-->
			          </div>
                      <?php
                        if(isset($_POST["error"])){
                            if($_POST["error"] == "emptyinput"){
                                echo "<p> Please complete all the fields !</p>";
                            }
                           
                            elseif($_POST["error"] == "noerror"){
                                echo "<p> Registration successful !</p>";
                            }

                        }
                        ?>
			        </div>
                   	
				</div>				    	
		      </form>		      
		</div>
	</div>

	<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>