<!--
	This file is where new products can be created (for testing purposes)
-->

<?php require($_SERVER["DOCUMENT_ROOT"] . "/Shopping Cart/ConnectToDB.php"); require("StoreProductIntoDB.php");?>

<!DOCTYPE html>

<html lang="en">

	<head>
	
		<meta charset = "UTF-8" />
		<title> Add a new product </title>
		<meta name="viewport" content="width=device-width; initial-scale=1.0;">
		<link rel = "stylesheet" type = "text/css" media = "all" href = "http://<?php echo($mysqlHost); ?>/Shopping Cart/Main Navigation/MainNav_styles.css">
		<link rel = "stylesheet" type = "text/css" media = "all" href = "http://localhost/Shopping Cart/Add New Product/AddNewProduct_styles.css">
		<link href="https://fonts.googleapis.com/css?family=Coda|Saira+Condensed" rel="stylesheet">	
		<script src = "http://<?php echo($mysqlHost); ?>/Shopping Cart/Cart/Cart.js"></script>
		
	</head>

	<body id = "body">
				
		<?php include($_SERVER["DOCUMENT_ROOT"] . "/Shopping Cart/Main Navigation/Desktop/DesktopNav.php");?>
				
		<div id = "ALLCONTAINER">
		
			<h1 id = "mainHeader"> Add a new product </h1>
			
			<div id = "formHolder">
			
				<div id = "errorHolder">
			
					<ul>
					
						<?php
					
							if($emptyFieldFlag)
							{
								echo("<li> All fields must be filled in. </li>");
							}
							
							if($nameTooLongFlag)
							{
								echo("<li> Your product name is too long (It must be less than 40 characters). </li>");
							}
							
							if($descriptionTooLongFlag)
							{
								echo("<li> Your product description is too long (It must be less than 300 characters). </li>");
							}
					
						?>
					
					</ul>
				
				</div>
			
				<h2> Fill out the following form to create a new product. </h2>
			
				<form id = "newProductForm" action = "AddNewProduct.php" method = "POST" enctype="multipart/form-data">
				
					<input type = "text" name = "Name" value placeholder = "Name">
						
					<input type = "text" name = "Description" value placeholder = "Description">
					
					<input type = "text" name = "Price" value placeholder = "Price">
					
					<input type = "text" name = "imgName" value placeholder = "Image Name (including filetype e.g mypic.jpg)">
										
					<input id = "submitProductButton" type = "submit" name = "submit" value = "Create Product">
				
				</form>
							
			</div>
					
		</div>
	
	</body>
	
</html>