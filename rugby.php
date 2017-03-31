<?php
	if($_GET){
		$log = $_GET['id'];
	}
?>
<!DOCTYPE HTML>
<html lang="fr">
	<head>
		<?php include './includes/header.php'; ?>
	</head>
	<body>
	<?php 
		if($_GET){
			if($log == "login"){
				echo "<script type='application/javascript'> alert('Vous etes bien connecté a la ligue de Rugby'); </script>";
			}
		}
	 ?>
		<div id="page-wrapper">
			<!-- Header -->
			<?php include './includes/head.php'; ?>
			<!-- Main -->
			<section class="wrapper style1">
				<div class="container">
					<div class="row 200%">
						<div class="8u 12u(narrower)">
							<div id="content">
								<!-- Content -->
								<article>
									<header>
										<h2 id="Prés-Rugby">Rugby à XV</h2> 
										<p>Présentation du rugby de la M2L de Loraine</p>
									</header>

									<span class="image featured"><img src="images/rugby.jpg" alt="rugby" /></span>

									<h3 id="Historique">Historique</h3>
									<p>L'histoire du rugby commence officiellement en 1823, par une action d'un étudiant de seize ans : William Webb Ellis, sur le terrain d'une petite ville située entre Oxford et Cambridge.Le football de Rugby est né. Les premières règles sont établies dans les années 1840 et le sport s'étend dans le Royaume Uni dans les décennies qui suivent. Le football et le rugby n'adoptent toutefois leurs différences essentielles entre jeu au pied et à la main qu'en 1863.Les fédérations, de la Rugby Union à l'IRB, feront évoluer les règles du rugby vers celles que l'on suit aujourd'hui, tout en conservant l'amateurisme comme valeur essentielle du rugby à 15.</p>
									<h3 id="Règles">Les Règles</h3>
									<p>Le rugby est un sport de contact avec un ballon de forme ovoïdale.Un terrain de rugby est composé d'une surface généralement gazonnée d'une largeur maximale de 70 mètres et d'une longueur maximale de 144 mètres. Des lignes sont peintes en blanc à intervalle régulier : 
									Le but est constitué de deux poteaux (appelés « pagelles » dans le jargon rugbystique) situés au centre de la ligne de but et séparés par une distance de 5,6 mètres. Une barre horizontale située à 3 mètres au-dessus du sol relie les poteaux et leur donne une forme de H.
									L'essentiel du jeu consiste à tenter de faire progresser le ballon vers l'avant, c'est-à-dire l'en-but adverse, pour marquer des points grâce à un essai, un drop, ou une pénalité due à une faute adverse ; ceci, tout en tentant d'empêcher l'équipe adverse d'en faire autant. Le cours du jeu est segmenté en différents types de phases.
									Un match de rugby est arbitré par un seul arbitre, assisté par deux juges de touche et parfois d'une équipe s'occupant de l'arbitrage vidéo (demandé par l'arbitre en cas de besoins plus précis). Les juges de touche décident si un joueur ou le ballon a franchi la ligne de touche et si une pénalité est correctement passée entre les poteaux.
									Le principe du rugby à XV est de marquer plus de points que son adversaire. Pour cela, il existe plusieurs moyens.			
									Porter le ballon au sol avec les mains ou les bras, ou en exerçant une pression verticale sur le ballon avec n'importe quelle partie du corps comprise entre la taille et le cou inclusivement dans l'en-but adverse. La base des poteaux du but adverse fait également partie de l'en-but
									Le jeu courant se déroule lorsqu'une équipe essaie de progresser vers l'en-but adverse en courant et en se passant le ballon. La passe ne doit pas s'effectuer vers l'avant (règle 12). Lorsque cela arrive, ou lorsque le ballon tombe des mains du joueur vers l'avant, l'arbitre siffle un « en-avant » et accorde à l'équipe adverse une mêlée. </p>
									<h3 id="Entraineurs">Les Entraineurs</h3>
									<ul>
										<li>Fabien Galthié</li>
										<li>Yannick Bru</li>
										<li>Bernard Laporte</li>
										<li>Marc Lièvremont</li>
										<li>Philippe Saint-André</li>
										<li>Guy Novès</li>
									</ul>
									<h3 id="Catégories">Les différente catégories</h3>
									<table>
										<tbody>
											<tr>
												<th><strong>Catégorie</strong></th>
												<th><strong>Naissance</strong></th>
											</tr>
											<tr>
												<td>Mini Poussin </td>
												<td> -8 ans</td>
											</tr>
											<tr>
												<td>Poussins  </td>
												<td>-10 ans</td>
											</tr>
											<tr>
												<td>Benjamins  </td>
												<td> -12 ans</td>
											</tr>
											<tr>
												<td>Minimes</td>
												<td> -14 ans</td>
											</tr>
											<tr>
												<td>Cadets</td>
												<td> -16 ans</td>
											</tr>
											<tr>
												<td>Juniors </td>
												<td> -18 ans</td>
											</tr>
											<tr>
												<td>Espoirs </td>
												<td>-21 ans</td>
											</tr>
											<tr>
												<td>Séniors </td>
												<td>+ de 19 ans</td>
											</tr>
											<tr>
												<td>Vétérans </td>
												<td>+ de 35 ans</td>
											</tr>
										</tbody>
									</table>
									<h3 id="entrainementsL">Lieu d'entrainements</h3>
									<p>Les rugbyments s'entraînent directement sur les terrains, en faisant des jeux de passe, des pénalités, etc...</p>
									<h3 id="entrainementsJ">Jours d'entrainement</h3>
									<p>Pour les jeunes les entrainement sont le Mercredi et le Samedi. <br> Pour les adultes les entrainement sont le Mardi et Vendredi.</p>
									<h3 id="Calendrier">Le Calendrier des Matchs</h3>
									<table >
										<tbody>
											<tr>
												<th><strong>Date</strong></th>
												<th><strong>Heure</strong></th>
												<th><strong>Equipe A</strong></th>
												<th><strong>Equipe B</strong></th>
											</tr>
											<tr>
												<td>14 janvier 2017 </td>
												<td> 14:00</td>
												<td> Montpellier Rugby <img src="images/logo_rug/Rmon.png" alt="mompelier" width="35"> </td>
												<td> F.C Grenoble rugby <img src="images/logo_rug/grenoble.png" alt="grenoble" width="23"></td>
											</tr>
											<tr>
												<td>17 janvier 2017 </td>
												<td> 21:30</td>
												<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lyon Rugby &nbsp;&nbsp;<img src="images/logo_rug/lyon.png" alt="lyon" width="30"></td>
												<td> &nbsp;&nbsp;&nbsp;Stade Toulousain <img src="images/logo_rug/stade.jpg" alt="toulouse" width="30"></td>
											</tr>
											<tr>
												<td>24 janvier 2017 </td>
												<td> 16:00</td>
												<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SASP Castre&nbsp;&nbsp;&nbsp;<img src="images/logo_rug/castre.png" alt="castre" width="30"></td>
												<td> &nbsp;&nbsp;&nbsp;&nbsp;Section Paloise&nbsp;&nbsp;<img src="images/logo_rug/pau.png" alt="paux" width="30"></td>
											</tr>
											<tr>
												<td>7 mars 2017 </td>
												<td> 17:30</td>
												<td> &nbsp;&nbsp;&nbsp;&nbsp;CA Brive Rugby<img src="images/logo_rug/brive.png" alt="brive" width="30"></td>
												<td> Racing Club Toulon<img src="images/logo_rug/toulon.png" alt="toulon" width="30"></td>
											</tr>
											<tr>
												<td>9 avril 2017 </td>
												<td> 20:00</td>
												<td> &nbsp;&nbsp;&nbsp;	Stade Francais&nbsp;&nbsp;<img src="images/logo_rug/paris.png" alt="sfrancais" width="25"></td>
												<td> &nbsp;&nbsp;Bordeaux-Bègles&nbsp;&nbsp;<img src="images/logo_rug/bordeaux.png" alt="bordeaux" width="33"></td>
											</tr>
										</tbody>
									</table>								
								</article>
							</div>
						</div>
						<div class="4u 12u(narrower)">
							<div id="sidebar">
								<!-- Sidebar -->
								<section>
									<h3>Présentation du Rugby</h3>
									<p>Le rugby est un sport de contact anglo-saxon cree fin XIX qui se joue a 15 par equipe sur un terrain et qui consiste a marquer le plus d'essai en 80 minute pour gagner la partie </p>
								</section>
								<section>
									<h3>D'autre type de Rugby</h3>
									<ul class="links">
										<li><a href="https://fr.wikipedia.org/wiki/Rugby_%C3%A0_XIII">Rugby a XII</a></li>
										<li><a href="https://fr.wikipedia.org/wiki/Rugby_%C3%A0_sept">Rugby a VII</a></li>
										<li><a href="https://fr.wikipedia.org/wiki/Beach_rugby">Le beach rugby</a></li>
										<li><a href="https://fr.wikipedia.org/wiki/Touch_rugby">Le touche rugby</a></li>
									</ul>
								</section>
								<section><img src="images/Rabitre.jpg" id="RA" alt="terrain" width="350"></section>
								<section><img src="images/Rterrain.png" id="RT" alt="terrain" ></section>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Footer -->
			<?php include './includes/footer.php'; ?>
		</div>
		<!-- Scripts -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.dropotron.min.js"></script>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/util.js"></script>
		<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
		<script src="assets/js/main.js"></script>
	</body>
</html>
