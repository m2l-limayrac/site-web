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
				echo "<script type='application/javascript'> alert(\"Vous etes bien connecté a la ligue d'Escrime\"); </script>";
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
										<h2 id="Prés-Rugby">Escrime</h2> 
										<p>Présentation de l'Escrime de la M2L de Loraine</p>
									</header>

									<span class="image featured"><img src="images/escrime.jpg" alt="escrime" /></span>

									<h3 id="Historique">Historique</h3>
									<p>Si l’on considère l’escrime comme l’art de manier les armes de poing, son histoire commence à l’aube de l’humanité. Dès l’Antiquité, les témoignages de combats à l'arme blanche sont nombreux, à l'instar des bas-reliefs égyptiens du temple de Ramsès III à Médinet Habou.
									La conception moderne de l’escrime apparaît en même temps que l'arme à feu. Jusque là, les techniques devaient s'adapter aux protections que portaient l'adversaire et notamment la cotte de mailles ou l'armure. Avec l'apparition de la poudre, la course en avant entre l'outil offensif, l'épée, et la protection, l’armure, perd sa raison d’être : l'arme à feu rend caduque l'armure, et même dangereuse, car ralentissant le mouvement de la cible. L'épée devient alors plus fine et plus légère.
									L’histoire de l’escrime peut être partagée en deux étapes : la première est la marque d’un glissement progressif de l’activité guerrière vers une forme d'art martial où le beau geste et l’élégance morale l'emportent ; la deuxième est un nouveau glissement, plus rapide celui-là, entre l'art martial et la pratique sportive contemporaine.</p>
									<h3 id="Règles">Les Règles</h3>
									<p>En compétition, un assaut (un match) se déroule sur une piste de 14 mètres de long sur 1,5 mètre de large. 
										Au début du duel, chaque escrimeur se tient à 2 mètres derrière la ligne centrale. Idem après chaque point marqué.
										Les assauts se disputent en 3 périodes de 3 minutes. Le premier qui marque 15 touches ou celui qui inscrit le plus de points à l'issue des 3 manches est déclaré vainqueur.
										L'assaut est jugé à l'aide d'un appareil électrique, qui enregistre les touches et affiche tous les points. Un fil relie le bout de la lame à cet appareil. Les escrimeurs y sont également reliés par un fil tendu dans leur dos depuis des enrouleurs. 
										Une lampe de couleur verte ou rouge s'allume dès qu'un escrimeur a valablement touché son adversaire.</p>
									<h3 id="Entraineurs">Les Entraineurs</h3>
									<ul>
										<li>Jean-Michel Fournier</li>
										<li>Didier Lacoste</li>
										<li>Michael Grojean</li>
										<li>Bernard Dechamps</li>
										<li>Jean-Batiste Villadiere</li>
										<li>Sylvain Farouche</li>
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
									<p>L'entrainement se fait au gymnase de Saint-Jean Dépres</p>
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
												<td>18 janvier 2017 </td>
												<td> 14:00</td>
												<td> SAINT LOUIS</td>
												<td> SAINT EMILION</td>
											</tr>
											<tr>
												<td>20 janvier 2017 </td>
												<td> 21:30</td>
												<td> MULHOUSE</td>
												<td> SAVERNE "la Licorne"</td>
											</tr>
											<tr>
												<td>25 janvier 2017 </td>
												<td> 16:00</td>
												<td> SELESTAT</td>
												<td> WITTENHEIM</td>
											</tr>
											<tr>
												<td>3 mars 2017 </td>
												<td> 17:30</td>
												<td>COLMAR</td>
												<td>ERSTEIN</td>
											</tr>
											<tr>
												<td>5 avril 2017 </td>
												<td> 20:00</td>
												<td>RIBEAUVILLE</td>
												<td>SOUFFELWEYERSHEIM</td>
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
									<h3>Présentation de l'escrime</h3>
									<p>L’escrime est un sport de combat. Il s’agit de l’art de toucher un adversaire avec la pointe ou le tranchant (estoc et taille) d’une arme blanche sur les parties valables sans être touché.</p>
								</section>
								<section>
									<h3>Les differentes armes </h3>
									<ul class="links">
										<li><a href="https://fr.wikipedia.org/wiki/Escrime#Le_fleuret">Fleuret</a></li>
										<li><a href="https://fr.wikipedia.org/wiki/Escrime#L.E2.80.99.C3.A9p.C3.A9e">L'épée</a></li>
										<li><a href="https://fr.wikipedia.org/wiki/Escrime#Le_sabre">Le Sabre</a></li>
									</ul>
								</section>
								<section><img src="images/escrimeA.png" id="RA" alt="arbitre" width="350"></section>
								<section><img src="images/escrimeT.jpg" id="RT" alt="terrain" ></section>
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
