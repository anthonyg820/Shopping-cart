<!--
	This file clears the rows from the "Cart" database
-->

<?php

	require($_SERVER["DOCUMENT_ROOT"] . "/Shopping Cart/ConnectToDB.php");

	$query = "DELETE FROM cart";
	
	if($queryRun = mysql_query($query))
	{
		echo("Successful deletion");
		header("Location: http://" . $mysqlHost . "/Shopping Cart/Cart/Cart.php");
	}

?>