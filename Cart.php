<!--
	This file is where the users shopping cart data is displayed.
	
	From here, users can see the items they've chosen along with their respective quantities.
	
	Users can also delete individual rows by clicking the trash can appended to the ends, or clear the entire shopping cart by clicking the
	"Empty Cart" button.
-->


<?php require($_SERVER["DOCUMENT_ROOT"] . "/Shopping Cart/ConnectToDB.php"); ?>

<!DOCTYPE html>

<html lang="en">

	<head>
	
		<meta charset = "UTF-8" />
		<title> My Cart </title>
		<meta name="viewport" content="width=device-width; initial-scale=1.0;">
		<link rel = "stylesheet" type = "text/css" media = "all" href = "http://<?php echo($mysqlHost); ?>/Shopping Cart/Main Navigation/MainNav_styles.css">
		<link rel = "stylesheet" type = "text/css" media = "all" href = "http://localhost/Shopping Cart/Cart/Cart_styles.css">
		<link href="https://fonts.googleapis.com/css?family=Coda|Saira+Condensed" rel="stylesheet">	
		<script src = "http://<?php echo($mysqlHost); ?>/Shopping Cart/Cart/Cart.js"></script>
		
	</head>

	<body id = "body">
				
		<?php include($_SERVER["DOCUMENT_ROOT"] . "/Shopping Cart/Main Navigation/Desktop/DesktopNav.php");?>
				
		<div id = "ALLCONTAINER">
		
			<h1 id = "mainHeader"> My Cart </h1>
			
			<div id = "content">
				
				<div id = "mainToolbar">
				
					<div id = "emptyCartButton" onclick = "openPopup()"> Empty cart </div>
				
				</div>
				
				<div id = "cartHolder">
				
					<table>
					
						<tr id = "tableHeaders">
						
							<td colspan="2"> Name </td>
							<td> Description </td>
							<td> Price (in USD) </td>
							<td> Quantity </td>
							<td> Remove </td>
						
						</tr>
						
						<tr class = "itemRow">
						
							<?php include($_SERVER["DOCUMENT_ROOT"] . "/Shopping Cart/Cart/SetCart.php");?>
						
							<!--
							<td> <img src = "http://<?php echo($mysqlHost); ?>/Shopping Cart/Product Images/3M Paper Tape.jpg" class = "itemIMG"> </td>
							<td> 3M Tape </td>
							<td> This is the description This is the description This is the description</td>
							<td> $50.00 </td>
							<td> 3 </td>
							<td> <img src = "http://<?php echo($mysqlHost); ?>/Shopping Cart/Product Images/trash_darkgray.svg" class = "trashIMG"> </td>
							-->
						
						</tr>

						<tr class = "totalRow">
						
							<td>  </td>
							<td>  </td>
							<td>  </td>
							<td>  </td>
							<td> Total: </td>
							<td> 
							$
								<?php

									$subtotal = 0;
								
									$query = "SELECT * FROM cart LEFT JOIN products ON cart.ID = products.PID ORDER BY PID ASC";
	
									if($queryRun = mysql_query($query))
									{
										
										if(mysql_num_rows($queryRun) != 0 && mysql_num_rows($queryRun) != null) //Check to see if such a query exists
										{															
																									
											while($queryRow = mysql_fetch_assoc($queryRun)) 
											{
												$itemPrice = $queryRow['Price'];
												$itemQuantity = $queryRow['Quantity'];
												
												$subtotal += ($itemPrice * $itemQuantity);
												
											}
											
										}
										
									}
									
									echo($subtotal);

								?>.00
								
							</td>
						
						</tr>
						
					</table>
				
				</div>
			
			</div>
			
			<h5 id = "noItemsInCartMsg"> There are no items in your cart. </h5>
			
			<?php

				$query = "SELECT * FROM cart LEFT JOIN products ON cart.ID = products.PID ORDER BY PID ASC";
				
				if($queryRun = mysql_query($query))
				{
					
					if(mysql_num_rows($queryRun) == 0 || mysql_num_rows($queryRun) == null) //Check to see if such a query exists
					{
			?>
						<script>
						
							document.getElementById("content").style.display = "none";
							document.getElementById("noItemsInCartMsg").style.display = "block";
						
						</script>			
			
			<?php
					}
					
				}
				
			?>
					
		</div>
		
		<div id = "pageOverlay" onclick = "closePopup()"></div>
		
		<div id = "popupBox">
		
			<h4> Are you sure you want to empty your cart? </h4>
			
			<a id = "yesConfirm" href = "http://<?php echo($mysqlHost) ?>/Shopping Cart/Cart/EmptyCart.php"> Yes </a>
			<div id = "noConfirm" onclick = "closePopup()"> No </div>
		
		</div>
	
	</body>
	
</html>