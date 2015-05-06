<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--index.php-->
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<title>Merchant of Games</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<meta http-equiv="refresh" content="30" />
		<link rel="stylesheet" type="text/css" href="css/global.css" />
		<script type="text/javascript" src="scripts/rotate.js"></script>
	</head>


	<body>
		<div class="Page">
			<?php
			include("common/header.html");
			?>

			<div class="MainContent">
				<div class="Breadcrumbs">
					Home
					<br /><br />
				</div>

				<div id=datetime>
					<?php
					echo "<h3>It is ".date("l, F jS, g:i A").".<br /></h3>";
					?>
				</div>

				<p id="intro_text">
					Welcome to Merchant of Games! We supply tabletop gamers everywhere, be they wargamers, roleplayers,
					boardgamers, or cardmongers, with the supplies they need to take over the world.<br />
	        <br />
	  		</p>

				<div id="categoryCollection">

					<div class="GameCategory">
						<a href="products.php">
		    			<img class="GameImage" src="images/ccg.jpg" alt="Collectible Card Game" width="318"/>
						</a>
						<a href="products.php">Collectible Card Games</a>
					</div>

					<div class="GameCategory">
						<a href="products.php">
		    			<img class="GameImage" src="images/ttg.jpg" alt="Tabletop Game" width="318"/>
						</a>
						<a href="products.php">Tabletop Games</a>
					</div>

					<div class="GameCategory">
						<a href="products.php">
		    			<img class="GameImage" src="images/rpg.jpg" alt="Roleplaying Game" width="318"/>
						</a>
						<a href="products.php">Roleplaying Games</a>
					</div>

					<div class="GameCategory">
						<a href="products.php">
		    			<img class="GameImage" src="images/acc.jpg" alt="Game Accessories" width="318"/>
						</a>
						<a href="products.php">Accessories</a>
					</div>

				</div>
			</div>

			<?php
			include("common/footer.html");
			?>
		</div>
	</body>
</html>
