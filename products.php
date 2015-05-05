<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--products.php-->
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<title>MOG Products</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<meta http-equiv="refresh" content="60" />
		<link rel="stylesheet" type="text/css" href="css/global.css" />
		<script type="text/javascript" src="scripts/products.js"></script>
	</head>

	<body>
		<div class="Page">
			<?php
			include("common/header.html");
			?>

			<div class="MainContent">
				<div class="Breadcrumbs">
					Home -> Products
          <br /><br />
				</div>

				<div class="ProductList">
					<span class="ProductHeading">Accessories</span>
					<form id="mogTee" action="" onsubmit="addProduct('mogTee')">
							<fieldset>

								<h3>Merchant of Games T-Shirt - $9.99</h3>
								<p>
									These t-shirts are made from the softest elf-hide in the lower 48.
									Not only are they guaranteed not to shrink, they also grant
									the wearer night vision once per day for d4 x 60 secs. Amazing.
								</p>
								M.O.G. Tee&nbsp;&nbsp;
								<select name="size">
									<option>X-Small</option>
									<option>Small</option>
									<option>Medium</option>
									<option>X-Medium</option>
									<option>Large</option>
									<option>X-Large</option>
								</select>&nbsp;&nbsp;
								Quantity:
								<input type="text" name="quantity" size="2" />
								<hr />

								<h3>Merchant of Games Travel Mug - $7.99</h3>
								<p>
									This mug will never spill its contents, so long as you keep it
									perfectly upright and/or don't put anything in it. Astounding.
								</p>
								M.O.G. Mug&nbsp;&nbsp;
								<select name="size">
									<option>12 oz.</option>
									<option>22 oz.</option>
									<option>40 oz.</option>
								</select>&nbsp;&nbsp;
								Quantity:
								<input type="text" name="quantity" size="2" />
								<hr />

								<h3>Merchant of Games Dice - $4.99</h3>
								<p>
									These dice are so chock-full of numbers, there's not even any
									room for the Merchant of Games logo on them. Wait, our logo IS
									a die. Mind blown.
								</p>
								M.O.G. Dice&nbsp;&nbsp;
								<select name="size">
									<option>Silver</option>
									<option>Gold</option>
									<option>Space Grey</option>
								</select>&nbsp;&nbsp;
								Quantity:
								<input type="text" name="quantity" size="2" />
								<hr /><br />

								<input id="purchase" type="submit" name="purchase" value="Buy Now" />
							</fieldset>
							<br />
							<fieldset>
								<h2 class="UnderConstruction">Coming Soon ... CCGs, Tabletop Games, and RPGs, oh my!<h2>
							</fieldset>
					</form>
				</div>

			</div>
			<?php
			include("common/footer.html");
			?>
		</div>
	</body>
</html>
