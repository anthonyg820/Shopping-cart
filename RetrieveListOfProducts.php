<!--
	This file loads all products from the database into the "EditProducts.php" file
-->

<?php

	$query = "SELECT Name, Description, Price, ImgName FROM products ORDER BY PID ASC";
	
	if($queryRun = mysql_query($query))
	{
		
		if(mysql_num_rows($queryRun) != 0 && mysql_num_rows($queryRun) != null) //Check to see if such a query exists
		{															
																	
			while($queryRow = mysql_fetch_assoc($queryRun)) 
			{
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