<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--index.php-->
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<title>Merchant of Games</title>
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
					Home
					<br /><br />
				</div>

				<div id=datetime>
					<?php
					echo "<h3>Today is ".date("l, F jS").".<br />";
					?>
				</div>

				<p id="intro_text">
					Welcome to Merchant of Games! We supply tabletop gamers everywhere, be they wargamers, roleplayers,
					boardgamers, or cardmongers, with the supplies they need to take over
					the world.<br />
	        <br />
	  		</p>

				<div id="categoryCollection">

					<div class="GameCategory">
		    		<img class="GameImage" src="images/ccg.jpg" alt="Collectible Card Game" width="318"/>
						<ul>
							<li><a href="products.shtml">Magic: The Gathering</a></li>
						</ul>
					</div>

					<div class="GameCategory">
		    		<img class="GameImage" src="images/ttg.jpg" alt="Tabletop Game" width="318"/>
						<ul>
							<li><a href="products.shtml">Warhammer 40,000</a></li>
							<li>WARMACHINE</li>
						</ul>
					</div>

					<div class="GameCategory">
		    		<img class="GameImage" src="images/rpg.jpg" alt="Roleplaying Game" width="318"/>
						<ul>
							<li><a href="products.shtml">Dungeons &amp; Dragons</a></li>
							<li>Pathfinder</li>
			 			</ul>
					</div>

					<div class="GameCategory">
		    		<img class="GameImage" src="images/acc.jpg" alt="Game Accessories" width="318"/>
						<ul>
							<li><a href="products.shtml">Dice</a></li>
							<li><a href="products.shtml">Mats</a></li>
							<li><a href="products.shtml">Software</a></li>
						</ul>
					</div>

				</div>
			</div>

			<?php
			include("common/footer.html");
			?>
		</div>
	</body>
</html>
