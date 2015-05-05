<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--products.php-->
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<title>MOG Products</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<meta http-equiv="refresh" content="60" />
		<link rel="stylesheet" type="text/css" href="css/global.css" />
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
					<form id="productForm" action="" onsubmit="processProductForm()">
						<fieldset>
							<h3 id="teeDescription">Merchant of Games (M.O.G.) T-Shirt</h3>
							<p>
								These t-shirts are made from the softest elf-hide in the lower 48.
								Not only are they guaranteed not to shrink, they also grant
								the wearer night vision once per day for d4 x 60 secs. Amazing.
							</p>
							M.O.G. Tee &nbsp;
							$<span id="teePrice">10.00</span>
							&nbsp;&nbsp;
							<select name="teeStyle">
								<option>X-Small</option>
								<option>Small</option>
								<option>Medium</option>
								<option>X-Medium</option>
								<option>Large</option>
								<option>X-Large</option>
							</select>&nbsp;&nbsp;
							Quantity:
							<input type="text" name="teeQuantity" size="2" />
							<div><hr /></div>

							<h3 id="mugDescription">Merchant of Games (M.O.G.) Travel Mug</h3>
							<p>
								This mug will never spill its contents, so long as you keep it
								perfectly upright and/or don't put anything in it. Astounding.
							</p>
							M.O.G. Mug &nbsp;
							$<span id="mugPrice">7.50</span>
							&nbsp;&nbsp;
							<select name="mugStyle">
								<option>12 oz.</option>
								<option>22 oz.</option>
								<option>40 oz.</option>
							</select>&nbsp;&nbsp;
							Quantity:
							<input type="text" name="mugQuantity" size="2" />
							<div><hr /></div>

							<h3 id="diceDescription">Merchant of Games (M.O.G.) Dice</h3>
							<p>
								These dice are so chock-full of numbers, there's not even any
								room for the Merchant of Games logo on them. Wait, our logo IS
								a die. Mind blown.
							</p>
							M.O.G. Dice &nbsp;
							$<span id="dicePrice">5.00</span>
							&nbsp;&nbsp;
							<select name="diceStyle">
								<option>Silver</option>
								<option>Gold</option>
								<option>Space Gray</option>
							</select>&nbsp;&nbsp;
							Quantity:
							<input type="text" name="diceQuantity" size="2" />
							<div><hr /><br /></div>

							<input id="purchase" type="submit" value="Buy Now" />
							<input id="purchase" type="reset" value="Reset" />
						</fieldset>
						<div><br /></div>
						<fieldset>
							<h2 class="UnderConstruction">Coming Soon ... CCGs, Tabletop Games, and RPGs, oh my!</h2>
						</fieldset>
					</form>
				</div>

			</div>
			<?php
			include("common/footer.html");
			?>
		</div>
		<script type="text/javascript" src="scripts/products.js"></script>
	</body>
</html>
