<!--
	This file handles adding items to the "cart" database
-->

<?php
	
	require($_SERVER["DOCUMENT_ROOT"] . "/Shopping Cart/ConnectToDB.php");
	
	$emptyQuantityFlag = false;
	$negativeQuantityFlag = false;
	
	if(isset($_POST["Quantity"]) && isset($_POST["PID"]))
	{
		if(empty($_POST["Quantity"]))
		{
			$emptyQuantityFlag = true;
		}
		
		if($_POST["Quantity"] <= 0 && !empty($_POST["Quantity"]))
		{
			$negativeQuantityFlag = true;
		}
		
		$quantity = $_POST["Quantity"];
		$pid = $_POST["PID"];
		
		//If there are no form errors
		if(!$emptyQuantityFlag && !$negativeQuantityFlag)
		{
			$checkIfExistsQuery = mysql_query("SELECT `ID` FROM `cart` WHERE `ID` = '" . $pid . "'");
			echo(mysql_num_rows($checkIfExistsQuery));
			if(mysql_num_rows($checkIfExistsQuery) == 0 || mysql_num_rows($checkIfExistsQuery) == null)
			{
				$queryToCreateNewProduct = mysql_query("INSERT INTO cart VALUES('" . $pid . "', '" . $quantity . "')");
			}
			else
			{
				$currentQuantityQuery = mysql_query("SELECT `Quantity` FROM `cart` WHERE `ID` = '" . $pid . "'");
				echo(mysql_result($currentQuantityQuery, 0, "Quantity"));
				$newQuantity = mysql_result($currentQuantityQuery, 0, "Quantity") + $quantity;
				mysql_query("UPDATE cart SET Quantity='" . $newQuantity . "' WHERE ID = '" . $pid ."'");
			}
				
			header("Location: http://" . $mysqlHost . "/Shopping Cart/Cart/Cart.php");
		}		
	}

?>