<!--
	This file creates the main top navigation
-->

<header id = "dtNavBar">

	<div id = "dtNavContent">
	
		<div id = "leftOfDTHeader">
	
			<a  id = "dtNavLogoHolder">
	
				Shopping Cart Sim
					
			</a>
						
		</div>
		
		
		<div id = 'rightOfDTHeader'>
		
			<a id = 'cartButton' href = 'http://<?php echo($mysqlHost) ?>/Shopping Cart/Cart/Cart.php'> <span class = 'dtLinkText'> View Cart </span> </a>
			<a class = 'dtNormalNavLink' href = 'http://<?php echo($mysqlHost) ?>/Shopping Cart/Edit Products/EditProducts.php'>  <span class = 'dtLinkText'> Edit products </span> </a>		
			<a class = 'dtNormalNavLink' href = 'http://<?php echo($mysqlHost) ?>/Shopping Cart/Product Listings/ProductListings.php'>  <span class = 'dtLinkText'> Shop </span> </a>		
	
		</div>
	
	</div>

</header>
	