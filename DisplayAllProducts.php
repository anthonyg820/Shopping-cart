<!--
	This file loads all products from the database into the "ProductListings.php" file
-->

<?php

	$query = "SELECT * FROM products ORDER BY PID ASC";
	
	if($queryRun = mysql_query($query))
	{
		
		if(mysql_num_rows($queryRun) != 0 && mysql_num_rows($queryRun) != null) //Check to see if such a query exists
		{															
																	
			while($queryRow = mysql_fetch_assoc($queryRun)) 
			{
				$itemID = $queryRow['PID'];
				$itemName = $queryRow['Name'];
				$itemDesc = $queryRow['Description'];
				$itemPrice = $queryRow['Price'];
				$itemImgName = $queryRow['ImgName'];
?>			
	
	<div class = "product">
				
		<img src = "http://<?php echo($mysqlHost); ?>/Shopping Cart/Product Images/<?php echo($itemImgName); ?>">
	
		<h3 class = "subheader"> <?php echo($itemName); ?> </h3>
		
		<p> <?php echo($itemDesc); ?> </p>
		
		<h4> $ <?php echo($itemPrice); ?>.00 </h4>
		
		<form class = "productQuantityForm" action = "ProductListings.php" method = "POST">
						
			<input type = "text" name = "Quantity" value placeholder = "Quantity">
			
			<input type = "text" name = "PID" value = "<?php echo($itemID) ?>" class = "hiddenField">
															
			<input class = "addToCartButton" type = "submit" value = "Add to cart">
								
		</form>
	
	</div>	
			
<?php			
			}
		}
		else
		{
			echo("No such query exists");
		}
	}
	else
	{
		echo("Query failed to be set");
	}

?>