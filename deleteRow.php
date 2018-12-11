<!--
	This file handles the deletion of a row from the sopping cart when they click a trash can icon
-->

<?php

	require($_SERVER["DOCUMENT_ROOT"] . "/Shopping Cart/ConnectToDB.php");

	$query = "DELETE FROM cart WHERE ID = '" . $_POST["pid"] . "'";
	
	if($queryRun = mysql_query($query))
	{
		echo("Successful deletion");
		header("Location: http://" . $mysqlHost . "/Shopping Cart/Cart/Cart.php");
	}
?>			
