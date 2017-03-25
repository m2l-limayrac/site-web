<?php
session_start();
	if (basename($_SERVER['PHP_SELF']) == "index.php" || basename($_SERVER['PHP_SELF']) == "edit.php" || basename($_SERVER['PHP_SELF']) == "delete.php") {
		echo '<div id="header">
				<!-- Logo -->
					<h1><a id="logo">M2L <em>Maison des ligues</em></a></h1>
				<!-- Navbar -->
					<nav id="nav">
						<ul>';
							if (isset($_SESSION['login'])) {
								echo '<li><a id="login">Bonjour '.$_SESSION['login'].'</a></li>';
							}
						echo '<li class="current">
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
							<li><a href="rugby.php">Rugby à XV</a></li>
							<li><a href="volley.php">Volley</a></li>
							<li><a href="escrime.php">Escrime</a></li>';
							if (isset($_SESSION['login'])) {
								echo '<li><a href="list.php">FAQ</a></li>
								<li><a href="logout.php">Déconnexion</a></li>';
							}
						echo '</ul>
					</nav>
				</div>';
	}elseif (basename($_SERVER['PHP_SELF']) == "rugby.php") {
		echo '<div id="header">
				<!-- Logo -->
					<h1><a id="logo">M2L <em>Ligue de Rugby</em></a></h1>
				<!-- Nav -->
					<nav id="nav">
						<ul>';
							if (isset($_SESSION['login'])) {
								echo '<li><a id="login">Bonjour '.$_SESSION['login'].'</a></li>';
							}
						echo '<li><a href="index.php">Accueil</a></li>
							<li class="current">
								<a href="rugby.php">Rugby à XV</a>
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
							<li><a href="volley.php">Volley</a></li>
							<li><a href="escrime.php">Escrime</a></li>';
									if (isset($_SESSION['login'])) {
										echo '<li><a href="list.php">FAQ</a></li>
										<li><a href="logout.php">Déconnexion</a></li>';
									}else{
									 echo '<li>
											<a href="login-rugby.php">Connexion</a>
											<ul>
												<li><a href="register.php">Inscription</a></li>
											</ul>
									  	</li>';
									}
						echo '</ul>
					</nav>
				</div>';
	}elseif (basename($_SERVER['PHP_SELF']) == "volley.php") {
		echo '<div id="header">
				<!-- Logo -->
					<h1><a id="logo">M2L <em>Ligue de Volley</em></a></h1>
				<!-- Nav -->
					<nav id="nav">
						<ul>';
							if (isset($_SESSION['login'])) {
								echo '<li><a id="login">Bonjour '.$_SESSION['login'].'</a></li>';
							}
						echo '<li><a href="index.php">Accueil</a></li>
							<li><a href="rugby.php">Rugby à XV</a></li>
							<li class="current">
								<a href="volley.php">Volley</a>
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
							<li><a href="escrime.php">Escrime</a></li>';
								if (isset($_SESSION['login'])) {
									echo '<li><a href="list.php">FAQ</a></li>
									<li><a href="logout.php">Déconnexion</a></li>';
								}else{
								 echo '<li>
											<a href="login-volley.php">Connexion</a>
											<ul>
												<li><a href="register.php">Inscription</a></li>
											</ul>
										</li>';
								}
						echo '</ul>
					</nav>
				</div>';
	}elseif (basename($_SERVER['PHP_SELF']) == "escrime.php") {
		echo '<div id="header">
				<!-- Logo -->
					<h1><a id="logo">M2L <em>Ligue de Escrime</em></a></h1>
				<!-- Nav -->
					<nav id="nav">
						<ul>';
							if (isset($_SESSION['login'])) {
								echo '<li><a id="login">Bonjour '.$_SESSION['login'].'</a></li>';
							}
						echo '<li><a href="index.php">Accueil</a></li>
							<li><a href="rugby.php">Rugby à XV</a></li>
							<li><a href="volley.php">Volley</a></li>
							<li class="current">
								<a href="escrime.php">Escrime</a>
								<ul>
									<li><a href="#Prés-Escrime">Présentation du Escrime</a></li>
									<li><a href="#Historique">Histoire du sport</a></li>
									<li><a href="#Règles">Règles du sport</a></li>
									<li><a href="#Entraineurs">Les entraineurs</a></li>
									<li><a href="#Catégories">Les catégories</a></li>
									<li><a href="#entrainementsL">Lieu d\'entrainements</a></li>
									<li><a href="#entrainementsJ">Jours d\'entrainements</a></li>
									<li><a href="#Calendrier">Calendrier des Matchs</a></li>
									<li><a href="#contact">Contact</a></li>
								</ul>
							</li>';
								if (isset($_SESSION['login'])) {
									echo '<li><a href="list.php">FAQ</a></li>
									<li><a href="logout.php">Déconnexion</a></li>';
								}else{
								 echo '<li>
											<a href="login-escrime.php">Connexion</a>
											<ul>
												<li><a href="register.php">Inscription</a></li>
											</ul>
										</li>';
								}
						echo '</ul>
					</nav>
				</div>';
	}elseif (basename($_SERVER['PHP_SELF']) == "register.php") {
		echo '<div id="header">
				<!-- Logo -->
	                <h1><a id="logo">M2L <em>Enregistrement</em></a></h1>
	            <!-- Nav -->
	                <nav id="nav">
	                    <ul>
	                        <li><a href="index.php">Accueil</a></li>
	                        <li><a href="rugby.php">Rugby</a></li>
	                        <li><a href="volley.php">Volley</a></li>
	                        <li><a href="escrime.php">Escrime</a></li>
	                        <li class="current"><a href="register.php">Inscription</a></li>
	                    </ul>
	                </nav>
                </div>';
	}elseif (basename($_SERVER['PHP_SELF']) == "login-rugby.php") {
		echo '<div id="header">
				<!-- Logo -->
	                <h1><a id="logo">M2L <em>Ligue de Rugby</em></a></h1>
	            <!-- Nav -->
	                <nav id="nav">
	                    <ul>
	                        <li><a href="index.php">Accueil</a></li>
	                        <li><a href="rugby.php">Rugby</a></li>
	                        <li><a href="volley.php">Volley</a></li>
	                        <li><a href="escrime.php">Escrime</a></li>
	                        <li class="current">
								<a href="login-rugby.php">Connexion</a>
								<ul>
									<li><a href="register.php">Inscription</a></li>
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
	                        <li><a href="rugby.php">Rugby</a></li>
	                        <li><a href="volley.php">Volley</a></li>
	                        <li class="current">
								<a href="login-volley.php">Connexion</a>
								<ul>
									<li><a href="register.php">Inscription</a></li>
								</ul>
							</li>
							<li><a href="escrime.php">Escrime</a></li>
	                    </ul>
	                </nav>
                </div>';
	}elseif (basename($_SERVER['PHP_SELF']) == "login-escrime.php") {
		echo '<div id="header">
				<!-- Logo -->
	                <h1><a id="logo">M2L <em>Ligue d\'Escrime</em></a></h1>
	            <!-- Nav -->
	                <nav id="nav">
	                    <ul>
	                        <li><a href="index.php">Accueil</a></li>
	                        <li><a href="rugby.php">Rugby</a></li>
	                        <li><a href="volley.php">Volley</a></li>
	                        <li><a href="escrime.php">Escrime</a></li>
	                        <li class="current">
								<a href="login-escrime.php">Connexion</a>
								<ul>
									<li><a href="register.php">Inscription</a></li>
								</ul>
							</li>
	                    </ul>
	                </nav>
                </div>';
	}elseif (basename($_SERVER['PHP_SELF']) == "list.php") {
		echo '<div id="header">
				<!-- Logo -->
					<h1><a id="logo">M2L <em>FAQ</em></a></h1>
				<!-- Nav -->
					<nav id="nav">
						<ul>';
							if (isset($_SESSION['login'])) {
								echo '<li><a id="login">Bonjour '.$_SESSION['login'].'</a></li>';
							}
						echo '<li><a href="index.php">Accueil</a></li>
							<li><a href="rugby.php">Rugby à XV</a></li>
							<li><a href="volley.php">Volley</a></li>
							<li><a href="escrime.php">Escrime</a></li>
							<li class="current">
								<a href="list.php">FAQ</a>
								<ul>
									<li><a href="./add.php">Ajouter une question</a></li>
								</ul>
							</li>
							<li><a href="logout.php">Déconnexion</a></li>
						</ul>
					</nav>
				</div>';
	}elseif (basename($_SERVER['PHP_SELF']) == "add.php") {
		echo '<div id="header">
				<!-- Logo -->
					<h1><a id="logo">M2L <em>FAQ</em></a></h1>
				<!-- Nav -->
					<nav id="nav">
						<ul>';
							if (isset($_SESSION['login'])) {
								echo '<li><a id="login">Bonjour '.$_SESSION['login'].'</a></li>';
							}
						echo '<li><a href="index.php">Accueil</a></li>
							<li><a href="rugby.php">Rugby à XV</a></li>
							<li><a href="volley.php">Volley</a></li>
							<li><a href="escrime.php">Escrime</a></li>
							<li class="current">
								<a href="list.php">FAQ</a>
								<ul>
									<li><a href="#Prés-Escrime">Je sais pas encore quoi mettre</a></li>
								</ul>
							</li>
							<li><a href="logout.php">Déconnexion</a></li>
						</ul>
					</nav>
				</div>';
	}elseif (basename($_SERVER['PHP_SELF']) == "delete.php") {
		echo '';
	}
?>