<!--
	This file displays all current products within the "products" database. It also allows new products to be created (for testing purposes)
-->

<?php require($_SERVER["DOCUMENT_ROOT"] . "/Shopping Cart/ConnectToDB.php"); ?>

<!DOCTYPE html>

<html lang="en">

	<head>
	
		<meta charset = "UTF-8" />
		<title> Edit Products </title>
		<meta name="viewport" content="width=device-width; initial-scale=1.0;">
		<link rel = "stylesheet" type = "text/css" media = "all" href = "http://<?php echo($mysqlHost); ?>/Shopping Cart/Main Navigation/MainNav_styles.css">
		<link rel = "stylesheet" type = "text/css" media = "all" href = "http://<?php echo($mysqlHost); ?>/Shopping Cart/Edit Products/EditProducts_styles.css">
		<link href="https://fonts.googleapis.com/css?family=Coda|Saira+Condensed" rel="stylesheet">	
		
	</head>

	<body id = "body">
				
		<?php include($_SERVER["DOCUMENT_ROOT"] . "/Shopping Cart/Main Navigation/Desktop/DesktopNav.php");?>
				
		<div id = "ALLCONTAINER">
		
			<h1 id = "mainHeader"> Edit Products </h1>
			
			<div id = "content">
			
				<div id = "mainToolbar">
				
					<a id = "addNewProductButton" href = "http://<?php echo($mysqlHost); ?>/Shopping Cart/Add New Product/AddNewProduct.php"> Add a new product </a>
				
				</div>
				
				<h2 class = "subheader"> Current Products </h2>
				
				<div class = "styledUnderline"> <div class = "styledUnderlineInner"></div> </div>
				
				<div id = "currentProductsHolder">
				
					<?php include($_SERVER["DOCUMENT_ROOT"] . "/Shopping Cart/Edit Products/RetrieveListOfProducts.php");?>
				
					<!--KEEP THIS TEMPLATE FOR FUTURE STYLING
					<div class = "product">
				
						<img src = "#">
					
						<h3 class = "subheader"> Product 1 </h3>
						
						<p>
						
							This is the product description.
						
						</p>
					
					</div>
					-->
				
				</div>
			
			</div>
					
		</div>
	
	</body>
	
</html>