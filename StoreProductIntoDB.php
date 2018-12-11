<!--
	This file stores new product information into the "Products" database
-->

<?php
	
	require($_SERVER["DOCUMENT_ROOT"] . "/Shopping Cart/ConnectToDB.php");
	
	$emptyFieldFlag = false;
	$nameTooLongFlag = false;
	$descriptionTooLongFlag = false;
	
	if(isset($_POST["Name"]) && isset($_POST["Description"]) && isset($_POST["Price"]) && isset($_POST["imgName"]))
	{
		if(empty($_POST["Name"]) || empty($_POST["Description"]) || empty($_POST["Price"]) || empty($_POST["imgName"]))
		{
			$emptyFieldFlag = true;
		}
		
		$name = $_POST["Name"];
		$description = $_POST["Description"];
		$price = $_POST["Price"];
		$imgName = $_POST["imgName"];
		
		
		if(strlen($name) > 40)
		{
			$nameTooLongFlag = true;
		}
		
		if(strlen($description) > 300)
		{
			$descriptionTooLongFlag = true;
		}
		
		//If there are no form errors
		if(!$emptyFieldFlag && !$nameTooLongFlag && !$descriptionTooLongFlag)
		{
			echo($imgName);
			$queryToCreateNewProduct = mysql_query("INSERT INTO products VALUES('', '" . $name . "', '" . $description . "', '" . $price . "', '" . $imgName . "')");
									
			header("Location: http://" . $mysqlHost . "/Shopping Cart/Product Listings/ProductListings.php");
		}		
	}

?>