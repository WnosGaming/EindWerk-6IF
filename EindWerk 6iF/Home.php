<!-- GitHub -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>R6 Shop</title>
	
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
	<link rel="stylesheet" href="css/HomePage.css">
	<!-- <link rel="shortcut icon" href="img/Icon.png" type="image/png"> -->
	<link rel="shortcut icon" href="img/Favicon.png" type="image/png">
	
</head>

<body>
<?php
    include_once("navbar.php");
    ?> 

	<section class="c-banner">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<h1 class="text-center"> -   R6 Shop   - </h1>
				</div>
			</div>
		</div>
	</section>

	<section class="c-features text-center py-5">
		<div class="container">
			<div class="row gy-5">
				<div class="col-8 offset-2 col-md-6 offset-md-0 col-lg-4">
					<h3>Rainbow Six Siege</h3>
					<p>Teamtactisch schietspel, aanvallers & verdedigers, strategie, samenwerking, unieke vaardigheden.</p>
				</div>
				<div class="col-8 offset-2 col-md-6 offset-md-0 col-lg-4">
					<h3>Aanvallers</h3>
					<p>Aanvallers in Rainbow Six Siege vallen vijandelijke posities aan.</p>
				</div>
				<div class="col-8 offset-2 col-lg-4 offset-lg-0">
					<h3>Verdedigers</h3>
					<p>Verdedigers in Rainbow Six Siege beschermen locaties met gadgets en barricades.</p>
				</div>
			</div>
		</div>
	</section>

	<section class="c-showcase">
		<div class="container-fluid g-0">
			<div class="row g-0" id="html">
				<div class="col-lg-6 text-center">
					<img src="img/stretched-1920-1080-1322943.jpg" class="c-showcase__img img-fluid" width="900" height="601" alt="Fully Responsive Design">
				</div>
				<div class="col-lg-6 my-auto">
					<div class="p-5">
						<h2>Rainbow Six Siege</h2>
						<p>Rainbow Six Siege is een teamgebaseerd tactisch schietspel waarin spelers als aanvallers of verdedigers strijden. Het draait om strategie, samenwerking en het gebruik van unieke operatorvaardigheden en gadgets.</p>
						<a href="https://www.ubisoft.com/en-gb/game/rainbow-six/siege"><button class="btn">Meer Info</button></a>
					</div>
				</div>
			</div>
			<div class="row g-0" id="css">
				<div class="col-lg-6 order-lg-2 text-center">
					<img src="img/Aanvallers.jpg" class="c-showcase__img img-fluid" width="900" height="600" alt="Updated For Bootstrap 5">
				</div>
				<div class="col-lg-6 order-lg-1 my-auto">
					<div class="p-5">
						<h2>Aanvallers</h2>
						<p>Aanvallers in Rainbow Six Siege zijn de spelers die vijandelijke posities aanvallen en doelwitten proberen te veroveren. Ze werken samen en hebben elk speciale vaardigheden en gadgets om hun missie te volbrengen.</p>
						<a href="productenAanvallers.php"><button class="btn">Koop Nu!</button></a>
					</div>
				</div>
			</div>
			<div class="row g-0" id="js">
				<div class="col-lg-6 text-center">
					<img src="img/Verdedigers.jpg" class="c-showcase__img img-fluid" width="900" height="640" alt="Easy to Use & Customize">
				</div>
				<div class="col-lg-6 my-auto">
					<div class="p-5">
						<h2>Verdedigers</h2>
						<p>Verdedigers in Rainbow Six Siege beschermen locaties en gebruiken gadgets en barricades om vijandelijke aanvallen te stoppen. Elke verdediger heeft speciale vaardigheden om de positie te versterken.</p>
						<a href="productenVerdedigers.php"><button class="btn">Koop Nu!</button></a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="c-testimonial text-center">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="py-5">
						<img class="c-testimonial__img" src="img/jynxzi3.jpg">
						<h3 class="my-3">Jynxzi</h3>
						<p>"Dit is fantastisch! Heel erg bedankt, Goooorrrr Aiiiimmmm!"</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="py-5">
						<img class="c-testimonial__img" src="img/Spoit1.jpg">
						<h3 class="my-3">Spoit</h3>
						<p>"R6 Shop is geweldig. Ik heb het gebruikt om heel veel supermooie skins te kopen."</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="py-5">
						<img class="c-testimonial__img" src="img/wnos3.jpg">
						<h3 class="my-3">Wnos</h3>
						<p>"Heel erg bedankt dat jullie deze skins beschikbaar stellen voor ons!"</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<?php
    include_once("footer.php");
    ?> 
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>