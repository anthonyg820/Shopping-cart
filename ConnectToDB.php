<!--
	This file connects to the server and the database
-->

<?php

	$mysqlHost = $_SERVER["HTTP_HOST"];
	$mysqlUser = "root";
	$mysqlPassword = "";
	
	$mysqlDB = "shoppingcartsim";
	
	$mysqlError = "Unable to connect to database";
	
	if(!mysql_connect($mysqlHost, $mysqlUser, $mysqlPassword) || !mysql_select_db($mysqlDB))
	{
		die($mysqlError);
	}
	
?>