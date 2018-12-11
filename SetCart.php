<!--
	This file loads all shopping cart data into the "Cart.php" file.
-->

<?php

	$query = "SELECT * FROM cart LEFT JOIN products ON cart.ID = products.PID ORDER BY PID ASC";
	
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
				$itemQuantity = $queryRow['Quantity'];
?>			

	<tr>
	<td> <img src = "http://<?php echo($mysqlHost); ?>/Shopping Cart/Product Images/<?php echo($itemImgName); ?>" class = "itemIMG"> </td>
	<td> <?php echo($itemName); ?> </td>
	<td> <?php echo($itemDesc); ?> </td>
	<td> <?php echo($itemPrice); ?> </td>
	<td> <?php echo($itemQuantity); ?> </td>
	<td> 
	
		<form class = "deleteRowForm" action = "deleteRow.php" method = "POST">
		
			<input type = "submit" value = "">
			<input type = "text" name = "pid" value = "<?php echo($itemID);?>">

		</form>

	</td>
	</tr>
			
<?php			
			}
		}
	}
	else
	{
		echo("Query failed to be set");
	}

?>