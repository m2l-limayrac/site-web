<?php
	if (basename($_SERVER['PHP_SELF']) == "index.php") {
		echo '<div id="header">
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
				</div>';
	}elseif (basename($_SERVER['PHP_SELF']) == "Rugby.php") {
		echo '<div id="header">
				<!-- Logo -->
					<h1><a id="logo">M2L <em>Ligue de Rugby</em></a></h1>
				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="index.php">Accueil</a></li>
							<li class="current">
								<a href="Rugby.php">Rugby à XV</a>
								<ul>
									<li><a href="#Prés-Rugby">Présentation du Rugby</a></li>
									<li><a href="#Historique">Historique</a></li>
									<li><a href="#Règles">Règles</a></li>
									<li><a href="#Entraineurs">Entraineurs</a></li>
									<li><a href="#Catégories">Les différente catégories</a></li>
									<li><a href="#entrainementsL">Lieu d\'entrainements</a></li>
									<li><a href="#entrainementsJ">Jours d\'entrainements</a></li>
									<li><a href="#Calendrier">Le Calendrier des Matchs</a></li>
									<li><a href="#contact">Contact</a></li>
								</ul>
							</li>
							<li><a href="Volley.php">Volley</a></li>
							<li>
								<a href="login-rugby.php">Connexion</a>
								<ul>
									<li><a href="Register.php">Inscription</a></li>
								</ul>
							</li>
						</ul>
					</nav>
				</div>';
	}elseif (basename($_SERVER['PHP_SELF']) == "Volley.php") {
		echo '<div id="header">
				<!-- Logo -->
					<h1><a id="logo">M2L <em>Ligue de Volley</em></a></h1>
				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="index.php">Accueil</a></li>
							<li><a href="Rugby.php">Rugby à XV</a></li>
							<li class="current">
								<a href="Volley.php">Volley</a>
								<ul>
									<li><a href="#Prés-Volley">Présentation du Volley</a></li>
									<li><a href="#Historique">Histoire du sport</a></li>
									<li><a href="#Règles">Règles du sport</a></li>
									<li><a href="#Entraineurs">Les entraineurs</a></li>
									<li><a href="#Catégories">Les catégories</a></li>
									<li><a href="#entrainementsL">Lieu d\'entrainements</a></li>
									<li><a href="#entrainementsJ">Jours d\'entrainements</a></li>
									<li><a href="#Calendrier">Calendrier des Matchs</a></li>
									<li><a href="#contact">Contact</a></li>
								</ul>
							</li>
							<li>
								<a href="login-volley.php">Connexion</a>
								<ul>
									<li><a href="Register.php">Inscription</a></li>
								</ul>
							</li>
						</ul>
					</nav>
				</div>';
	}elseif (basename($_SERVER['PHP_SELF']) == "Register.php") {
		echo '';
	}elseif (basename($_SERVER['PHP_SELF']) == "login-rugby.php") {
		echo '<div id="header">
				<!-- Logo -->
	                <h1><a id="logo">M2L <em>Ligue de Rugby</em></a></h1>
	            <!-- Nav -->
	                <nav id="nav">
	                    <ul>
	                        <li><a href="index.php">Accueil</a></li>
	                        <li><a href="Rugby.php">Rugby</a></li>
	                        <li><a href="Volley.php">Volley</a></li>
	                        <li class="current">
								<a href="login-rugby.php">Connexion</a>
								<ul>
									<li><a href="Register.php">Inscription</a></li>
								</ul>
							</li>
	                    </ul>
	                </nav>
                </div>';
	}elseif (basename($_SERVER['PHP_SELF']) == "login-volley.php") {
		echo '<div id="header">
				<!-- Logo -->
	                <h1><a id="logo">M2L <em>Ligue de Volley</em></a></h1>
	            <!-- Nav -->
	                <nav id="nav">
	                    <ul>
	                        <li><a href="index.php">Accueil</a></li>
	                        <li><a href="Rugby.php">Rugby</a></li>
	                        <li><a href="Volley.php">Volley</a></li>
	                        <li class="current">
								<a href="login-volley.php">Connexion</a>
								<ul>
									<li><a href="Register.php">Inscription</a></li>
								</ul>
							</li>
	                    </ul>
	                </nav>
                </div>';
	}
?>