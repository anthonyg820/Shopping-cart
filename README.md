# Shopping-cart
A basic shopping cart simulator

The name of this project is "Shopping Cart Simulator".

The front end was developed using HTML, CSS and JavaScript.

The back end was developed using PHP and MySQL databases.

This simulator uses 2 databases:
	1) Products
		-Stores all product information, including:
			a) Unique Identifier (referred to as PID)
			b) Name
			c) Description
			d) Price
			e) ImagePath
	2) Cart
		-Stores all of the users shopping data, including:
			a) The PID of the users chosen products
			b) The quantity of the users chosen products

This simulator has 3 primary pages:
	1) ProductListings.php
		-This page is where users can see all available products and add a 
		specific quantity of an item to their shopping cart.

	2) EditProducts.php
		-This page was used primarily for testing / debugging purposes. It
		allows the creation of new products.

	3) Cart.php
		-This page is where the users can see all of their shopping cart data.
		From this page, users can see the items they chose, their respective 
		quantities, and their price. Users can also delete individual rows of
		items by clicking on the trash can icons, or clear their entire shopping
		cart by clicking on the "Empty Cart" button

POSSIBLE FUTURE REVISIONS
	1) Add further form validation against unwanted inputs.
	2) Allow users to alter item quantities directly from the shopping cart.
	3) Add totals including sales tax rates
	4) Implement item categories to allow users to filter through the products


