<!DOCTYPE html>
<head>
	<!-- templatemo 418 form pack -->
    <!-- 
    Form Pack
    http://www.templatemo.com/preview/templatemo_418_form_pack 
    -->
	<title>Add Category</title>
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
	<h2 class="margin-bottom-15">Create Category</h2>
	<div class="container">
		<div class="col-md-12">			
			<form class="form-horizontal templatemo-create-account templatemo-container" role="form" action="includes/category.inc.php" method="POST">
				<div class="form-inner">
					<div class="form-group">
			          <div class="col-md-6">		          	
			            <label for="category_name" class="control-label">Category Name</label>
			            <input type="text" class="form-control" name="category_name" placeholder="">		            		            		            
			          </div>  
			          
			        <div class="form-group">
			          <div class="col-md-12">
			            <input type="submit" name="submit" value="Add Category" class="btn btn-info">
			            
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