<?php
include 'header.php';
?>

<!DOCTYPE HTML>
<!--
	Dopetrope by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>M2L : Accueil</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/carousel.css" />
	</head>
	<body class="homepage is-preload">


<div id="page-wrapper">

			<!-- Header -->
				<section id="header">

<!-- 					
						<h1><a href="index.html">Dopetrope</a></h1>

					
						<nav id="nav">
							<ul>
								<li class="current"><a href="index.html">Home</a></li>
								<li>
									<a href="#">Dropdown</a>
									<ul>
										<li><a href="#">Lorem ipsum dolor</a></li>
										<li><a href="#">Magna phasellus</a></li>
										<li><a href="#">Etiam dolore nisl</a></li>
										<li>
											<a href="#">Phasellus consequat</a>
											<ul>
												<li><a href="#">Magna phasellus</a></li>
												<li><a href="#">Etiam dolore nisl</a></li>
												<li><a href="#">Veroeros feugiat</a></li>
												<li><a href="#">Nisl sed aliquam</a></li>
												<li><a href="#">Dolore adipiscing</a></li>
											</ul>
										</li>
										<li><a href="#">Veroeros feugiat</a></li>
									</ul>
								</li>
								<li><a href="left-sidebar.html">Left Sidebar</a></li>
								<li><a href="right-sidebar.html">Right Sidebar</a></li>
								<li><a href="no-sidebar.html">No Sidebar</a></li>
							</ul>
						</nav> -->

					<!-- Banner -->

						<p style="margin-top: 80px; margin-bottom: 80px;" class="container">
							La Maison des Ligues de Lorraine (M2L) a pour mission de fournir des espaces et des services aux différentes ligues sportives 
							régionales de Lorraine et à d’autres structures hébergées. 
							La M2L est une structure financée par le Conseil Régional de 
							Lorraine dont l'administration est déléguée au Comité Régional 
							Olympique et Sportif de Lorraine (CROSL). Installée depuis 2003 dans la banlieue Nancéienne, 
							la M2L accueille l'ensemble du mouvement sportif Lorrain qui représente près de 6 500 clubs, 
							plus de 525 000 licenciés et près de 50 000 bénévoles.
						</p>
						
												
						<h2 style="margin-bottom: 2em;"><u>Activités principales</u></h2>

						

						<ul class="slides">
							<input type="radio" name="radio-btn" id="img-1" checked />
							<li class="slide-container">
								<div class="slide">
									<img src="images/rugby.png" />
								</div>
								<div class="navi">
									<label for="img-6" class="prev">&#x2039;</label>
									<label for="img-2" class="next">&#x203a;</label>
								</div>
							</li>
						
							<input type="radio" name="radio-btn" id="img-2" />
							<li class="slide-container">
								<div class="slide">
								  <img src="images/Natation.png" />
								</div>
								<div class="navi">
									<label for="img-1" class="prev">&#x2039;</label>
									<label for="img-3" class="next">&#x203a;</label>
								</div>
							</li>
						
							<input type="radio" name="radio-btn" id="img-3" />
							<li class="slide-container">
								<div class="slide">
								  <img src="images/foot.png" />
								</div>
								<div class="navi">
									<label for="img-2" class="prev">&#x2039;</label>
									<label for="img-4" class="next">&#x203a;</label>
								</div>
							</li>
						
							<input type="radio" name="radio-btn" id="img-4" />
							<li class="slide-container">
								<div class="slide">
								  <img src="images/Baseball.png" />
								</div>
								<div class="navi">
									<label for="img-3" class="prev">&#x2039;</label>
									<label for="img-5" class="next">&#x203a;</label>
								</div>
							</li>
						
						
							
							<li class="navi-dots">
							  <label for="img-1" class="navi-dot" id="img-dot-1"></label>
							  <label for="img-2" class="navi-dot" id="img-dot-2"></label>
							  <label for="img-3" class="navi-dot" id="img-dot-3"></label>
							  <label for="img-4" class="navi-dot" id="img-dot-4"></label>
							</li>
						</ul>

				</section>

			<!-- Main -->
				<section id="main">
					<div class="container">
						<div class="row">
							<div class="col-12">

								<!-- Portfolio -->
									<section>
										<header class="major">
											<a onclick="myFunction()"><h2>Description des Activités</h2></a>
											</br>
										</header>
										<div id="myDIV">
											<u>Rugby</u> : Sport d'équipe dans lequel il faut poser un ballon ovale derrière la ligne de but de l'adversaire (essai), ou le faire passer entre les poteaux de but.
											<br><br>
											<u>Natation</u> : Exercice, sport de la nage.
											<br><br>
											<u>Foot</u> :  Sport opposant deux équipes de onze joueurs, où il faut faire pénétrer un ballon rond dans les buts adverses sans utiliser les mains (au Canada, on dit soccer)
											<br><br>
											<u> Baseball</u> : sport collectif dérivé des mêmes racines que le cricket, qui se pratique sur un terrain de gazon et de sable. Il se joue avec des battes pour frapper une balle lancée, et des gants pour rattraper la balle
											<br><br>

										</div>
									</section>

							</div>
							<div class="col-12">


							</div>
						</div>
					</div>
				</section>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script>
				function myFunction() {
				var x = document.getElementById("myDIV");
				if (x.style.display === "none") {
					x.style.display = "block";
				} else {
					x.style.display = "none";
				}
				}
			</script>
<?php
include 'footer.php';
?>

	</body>
</html>

