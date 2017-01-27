<!DOCTYPE HTML>
<html lang="fr">
	<head>
		<?php include './includes/header.php'; ?>
	</head>
	<body>
		<div id="page-wrapper">
			<!-- Header -->
			<div id="header">
			<!-- Logo -->
				<h1><a id="logo">M2L <em>Maison des ligues</em></a></h1>
			<!-- Navbar -->
				<nav id="nav">
					<ul>
						<li class="current"><a href="index.php">Accueil</a></li>
						<li>
							<a href="#">Maison des Ligue</a>
							<ul>
								<li><a href="#ligue">Ligue</a></li>
								<li><a href="#mission">Mission</a></li>
								<li><a href="#correspondance">Correspondance des bureaux et des ligues</a></li>
								<li><a href="#financement">Financement</a></li>
								<li><a href="#service">Services proposés</a></li>
								<li><a href="#contact">Contact</a></li>
							</ul>
						</li>
						<li><a href="Rugby.php">Rugby à XV</a></li>
						<li><a href="Volley.php">Volley</a></li>
					</ul>
				</nav>
			</div>
			<!-- Banner -->
			<div>
				<section id="banner" class="mainBanner">
					<div class="carousel" data-ride="carousel">
				      <ul>
				      	<li><img src="images/m2lLogo.png" alt="Logo M2L"></li>
				      	<li><img src="images/Volley.jpg" alt="image Volley"></li>
				      	<li><img src="images/rugby.jpg" alt="image rugby"></li>
				      </ul>
					</div>
					<header class="headerLigue">
						<h2><em>BIENVENUE SUR LE SITE DE LA MAISON DES LIGUE DE LORRAINE</em></h2>
					</header>
				</section>
			<!-- Highlights -->
				<section class="wrapper style1">
					<div class="container">
						<div class="row 200%" id="ligue">
							<section class="6u 12u(narrower)">
								<div class="box highlight">
									<img class="icon" src="./images/Volleyball-icon.png" width="50" height="50" alt="Logo-Volley">
									<a href="./Volley.html"><h3>Ligue de Volley</h3></a>
									<p>Le volley-ball est un sport collectif, dans lequel 2 équipes de 6 joueurs, séparées par un filet, s'affrontent avec un ballon sur un terrain rectangulaire.</p>
								</div>
							</section>
							<section class="6u 12u(narrower)">
								<div class="box highlight">
									<img class="icon" src="./images/Rugby-icon.png" width="50" height="50" alt="Logo-Rugby">
									<a href="./Rugby.html"><h3>Ligue de Rugby</h3></a>
									<p>Le rugby est un sport de contact anglo-saxon cree fin XIX qui se joue a 15 par equipe sur un terrain et qui consiste a marquer le plus d'essai en 80 minute pour gagner la partie</p>
								</div>
							</section>
						</div>
					</div>
				</section>
			<!-- Gigantic Heading -->
				<section class="wrapper style2">
					<div class="container" id="mission">
						<header class="major">
							<h2>Notre Mission</h2>
							<p>Fournir des espaces et des services aux différentes ligues sportives régionales de Lorraine.</p>
						</header>
					</div>
				</section>
			<!-- Posts -->
				<section class="wrapper style1">
					<div class="container">
						<div class="row">
							<section class="11u 12u(narrower)">
								<div class="box post" id="correspondance">
									<a href="#" class="image left"><img src="images/ligue.jpg" alt="ligue de Lorraine" /></a>
									<div class="inner">
										<h3>Correspondance des bureaux et des ligues</h3>
										<table>
											<tr>
												<th>Ligue</th>
												<th>Numéro de Bureau</th>
											</tr>
											<tr>
												<td>Ligue de Football</td>
												<td>A107-A109</td>
											</tr>
											<tr>
												<td>Ligue de Athletisme</td>
												<td>A108-A110</td>
											</tr>
											<tr>
												<td>Ligue de Volley</td>
												<td>A201-A203-A205</td>
											</tr>
											<tr>
												<td>Ligue de Escrime</td>
												<td>A207-A209</td>
											</tr>
											<tr>
												<td>Ligue de Badminton</td>
												<td>A210</td>
											</tr>
											<tr>
												<td>Ligue de Natation</td>
												<td>A303-A305</td>
											</tr>
											<tr>
												<td>Ligue de Rugby à XIII</td>
												<td>A309</td>
											</tr>
											<tr>
												<td>Ligue de Judo</td>
												<td>A306</td>
											</tr>
											<tr>
												<td>Ligue de Hokey</td>
												<td>A405</td>
											</tr>
											<tr>
												<td>Ligue de Karaté</td>
												<td>A404</td>
											</tr>
											<tr>
												<td>Ligue de Rugby à XV</td>
												<td>A408-A410</td>
											</tr>
										</table>
									</div>
								</div>
							</section>
						</div>
						<div class="row">
							<section class="6u 12u(narrower)">
								<div class="box post" id="financement">
									<a href="#" class="image left"><img src="images/financement.jpg" alt="image financement" /></a>
									<div class="inner">
										<h3>Financement</h3>
										<p>La M2L est une structure financée par le Conseil Régional de Lorraine dont l'administration est déléguée au Comité Régional Olympique et Sportif de Lorraine (CROSL).</p>
									</div>
								</div>
							</section>
							<section class="6u 12u(narrower)">
								<div class="box post" id="service">
									<a href="http://m2l.michaelelbaz.com/?p=m2l&page=services" class="image left"><img src="images/services.jpg" alt="image service" /></a>
									<div class="inner">
										<h3>Services proposés</h3>
										<p>Accès Internet, Impressions, Serveur FTP documentaire, Intégration des postes informatiques des ligues, Réservation des salles, Formations.</p>
									</div>
								</div>
							</section>
					 	</div>
					</div>
				</section>
			<!-- Footer -->
				<?php include './includes/Footer.php'; ?>
			</div>
		</div>
		<!-- Scripts -->
		<script type="text/javascript" src="assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.dropotron.min.js"></script>
		<script type="text/javascript" src="assets/js/skel.min.js"></script>
		<script type="text/javascript" src="assets/js/util.js"></script>
		<script type="text/javascript" src="assets/js/main.js"></script>
		<script type="text/javascript" src="assets/js/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="assets/js/unslider.js"></script>
		<script>
		$('.carousel').unslider({
			autoplay: true
		});
		</script>
	</body>
</html>
