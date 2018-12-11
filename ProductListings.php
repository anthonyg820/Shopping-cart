<!--
	This file is where users can add items to their cart.
-->

<?php require($_SERVER["DOCUMENT_ROOT"] . "/Shopping Cart/ConnectToDB.php"); require($_SERVER["DOCUMENT_ROOT"] . "/Shopping Cart/Product Listings/AddToCart.php");?>


<!DOCTYPE html>

<html lang="en">

	<head>
	
		<meta charset = "UTF-8" />
		<title> Product Listings </title>
		<meta name="viewport" content="width=device-width; initial-scale=1.0;">
		<link rel = "stylesheet" type = "text/css" media = "all" href = "http://<?php echo($mysqlHost); ?>/Shopping Cart/Main Navigation/MainNav_styles.css">
		<link rel = "stylesheet" type = "text/css" media = "all" href = "http://localhost/Shopping Cart/Product Listings/ProductListings_styles.css">
		<link href="https://fonts.googleapis.com/css?family=Coda|Saira+Condensed" rel="stylesheet">	
		
	</head>

	<body id = "body">
				
		<?php include($_SERVER["DOCUMENT_ROOT"] . "/Shopping Cart/Main Navigation/Desktop/DesktopNav.php");?>
				
		<div id = "ALLCONTAINER">
		
			<h1 id = "topHeader"> Shop </h1>			
			
			<div id = "errorHolder">
			
				<ul>
				
					<?php
				
						if($emptyQuantityFlag)
						{
							echo("<li> You must enter a quantity. </li>");
						}
						
						if($negativeQuantityFlag)
						{
							echo("<li> You must enter a quantity greater than zero. </li>");
						}
				
					?>
				
				</ul>
			
			</div>
			
			<div id = "allProductsHolder">
			
				<?php include($_SERVER["DOCUMENT_ROOT"] . "/Shopping Cart/Product Listings/DisplayAllProducts.php");?>
			
			</div>
					
		</div>
	
	</body>
	
</html>