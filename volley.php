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
				echo "<script type='application/javascript'> alert('Vous etes bien connecté a la ligue de Volley'); </script>";
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
						<div class="4u 12u(narrower)">
							<div id="sidebar">
								<!-- Sidebar -->
								<section>
									<h3 id="Prés-Volley">Présentation du Volley</h3>
									<p>Le volley-ball est un sport collectif, dans lequel 2 équipes de 6 joueurs, séparées par un filet, s'affrontent avec un ballon sur un terrain rectangulaire.</p>
								</section>
								<section>
									<h3>Variantes du Volley-ball</h3>
									<ul class="links">
										<li><a href="https://fr.wikipedia.org/wiki/Beach-volley">Beach-volley</a></li>
										<li><a href="https://fr.wikipedia.org/wiki/Wallyball">Walley-ball</a></li>
										<li><a href="https://fr.wikipedia.org/wiki/Volley-ball_handisport">Volley-ball (handisport)</a></li>
										<li><a href="https://fr.wikipedia.org/wiki/Ecuavolley">L'Ecuavolley</a></li>
										<li><a href="https://fr.wikipedia.org/wiki/Volley-ball_handisport">Volley-ball assis </a></li>
										<li><a href="https://fr.wikipedia.org/wiki/Bossaball">Bossaball </a></li>
									</ul>
								</section>
								<section><img src="images/VHistoire.png" id="VHistoire" alt="VHistoire" /></section>
								<section><img src="images/VTerrain.png" id="VTerrain" alt="Vterrain" /></section>
							</div>
						</div>
						<div class="8u  12u(narrower) important(narrower)">
							<div id="content">
								<!-- Content -->
								<article>
									<header>
										<h2>Volley</h2>
										<p>Présentation du sport</p>
									</header>
									<span class="image featured"><img src="images/Volley.jpg" alt="" /></span>
									<h3 id="Historique">Histoire du sport</h3>
									<p>Le volley-ball est inventé le 9 février 1895 aux États-Unis par le professeur d’éducation physique William G. Morgan afin d'occuper les athlètes pendant l'hiver. C'est en s'inspirant à la fois du basket-ball et également du tennis qu'est née la « mintonette » le 2 décembre 1895 qui sera appeller par la suite le voley ball. Un autre sport de salle, le basket-ball, a été inventé juste dix miles (seize kilomètres) plus loin dans la ville de Springfield (Massachusetts), seulement quatre années auparavant. La mintonette se devait d'être un sport de salle moins violent que le basket-ball, pour les membres les plus âgés, tout en exigeant toujours un minimum d'effort physique..</p>
									<p>Le premier pays, en dehors des États-Unis, à adopter le volley-ball est le Canada en 1900. Une fédération internationale, la Fédération Internationale de Volley-ball (FIVB), est fondée à Paris en 1947, et le premier championnat du monde se tient en 1949 pour les hommes et en 1952 pour les femmes. Le sport est aujourd'hui populaire au Brésil, en Europe (les équipes d'Italie, des Pays-Bas et des pays de l'Europe de l'Est sont des équipes de premier plan depuis la fin des années 1980), en Russie, et dans d'autres pays incluant la Chine et le reste de l'Asie, aussi bien qu'au États-Unis.</p>
									<h3 id="Règles">Règles du sport</h3>
									<p>Les points sont marqués soit en faisant tomber le ballon sur le terrain de l'équipe adverse, soit quand l'adversaire commet une faute. La première équipe à atteindre 25 points gagne le set et la première équipe à gagner trois sets gagne le match. Chaque équipe peut toucher le ballon jusqu'à trois fois avant que le ballon ne retraverse le filet, et les contacts consécutifs doivent être faits par des joueurs différents. Le ballon est d'habitude joué avec les mains ou les bras, mais les joueurs ont le droit de toucher le ballon avec n'importe quelle autre partie du corps.</p>
									<h3 id="Entraineurs">Les entraineurs</h3>
									<ul>
										<li>Entraîneur : Laurent TILLIE</li>
										<li>Entraîneur adjoint : Arnaud JOSSERAND</li>
										<li>Entraîneur adjoint : Luc MARQUET</li>
										<li>Manager : Pascal FOUSSARD</li>
									</ul>
									<h3 id="Catégories">Les catégories</h3>
									<table>
										<tbody>
											<tr>
												<th><strong>Catégorie</strong></th>
												<th><strong>Naissance</strong></th>
											</tr>
											<tr>
												<td>Seniors</td>
												<td>24 ans et plus</td>
											</tr>
											<tr>
												<td>Espoirs</td>
												<td>22 ans et plus</td>
											</tr>
											<tr>
												<td>Juniors</td>
												<td>18 ans et plus</td>
											</tr>
											<tr>
												<td>Cadets</td>
												<td>17 ans et plus</td>
											</tr>
											<tr>
												<td>Minimes</td>
												<td>15 ans et plus</td>
											</tr>
											 <tr>
												<td>Benjamins</td>
												<td> 14 ans et plus </td>
											</tr>
											<tr>
												<td>Poussins</td>
												<td>12 ans et plus </td>
											</tr>
											<tr>
												<td>Pupilles</td>
												<td>11 ans et plus </td>
											</tr>
											<tr>
												<td>Baby</td>
												<td>9 ans et plus</td>
											</tr>
										</tbody>
									</table>							
									<h3 id="entrainementsL">Lieu d'entrainement</h3>
									<p>Le volley-ball se pratique le plus souvent en salle. Le terrain a une forme rectangulaire de 18 mètres de longueur sur 9 mètres de largeur. Les lignes de délimitation sont à l'intérieur du terrain. Une ligne centrale s'étend sous le filet sur toute la largeur du terrain et sépare les deux camps. Une ligne d'attaque est peinte au sol dans chaque moitié de terrain, à 3 mètres du filet ; elle est communément appelée « ligne des 3 mètres »</p>
									<h3 id="entrainementsJ">Jours d'entrainement</h3>
									<ul>
										<li>lundi : 20H30-22H30</li>
										<li>Mardi : 20H30-23H00</li>
										<li>Mercredi : 19H30-19h30</li>
										<li>Vendredi : 20H30-22H30</li>
										<li>Samedi : 10H30-11H</li>
									</ul>
									<h3 id="Calendrier">Calendrier des matchs</h3>
									<table>
										<tbody>
											<tr>
												<th><strong>Date</strong></th>
												<th><strong>Heures</strong></th>
												<th><strong>Equipe A</strong></th>
												<th><strong>Equipe B</strong></th>	
											</tr>
											<tr>
												<td>21 fevrier 2017</td>
												<td>20 : 00</td>
												<td>&nbsp;&nbsp;&nbsp;&nbsp;Ajaccio&nbsp;&nbsp;<img src="images/imgL/Ajaccio.jpg" alt="ajjacio" width="30"></td>
												<td>Nantes Rezé&nbsp;<img src="images/imgL/nantes.jpg" alt="Nantes" width="30"></td>
											</tr>
											<tr>
												<td>26 fevrier 2017</td>
												<td>20 : 00</td>
												<td>Nice Volley<img src="images/imgL/nice.jpg" width="30" alt="NiceVolley" ></td>
												<td>&nbsp;Paris Volley&nbsp;&nbsp;<img src="images/imgL/paris.jpg" alt="parVol" width="37"></td>
											</tr>
											<tr>
												<td>27 fevrier 2017</td>
												<td>20 : 30</td>
												<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tours&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/imgL/tours.jpg" alt="tour" width="30"></td>
												<td>&nbsp;Chaumont&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/imgL/chaumont.jpg" alt="chau" width="30"></td>
											</tr>
											<tr>
												<td>28 fevrier 2017</td>
												<td>19 : 30</td>
												<td>AS Cannes<img src="images/imgL/cannes.png" width="30" alt="cann"></td>
												<td>&nbsp;&nbsp;&nbsp;Poitiers&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/imgL/poitiers.jpg" alt="poi" width="30"></td>
											</tr>
											<tr>
												<td>30 fevrier 2017</td>
												<td>20 : 00</td>
												<td>&nbsp;&nbsp;Narbonne&nbsp;<img src="images/imgL/narbonne.jpg" width="30" alt="narb"></td>
												<td>&nbsp;&nbsp;&nbsp;Toulouse&nbsp;&nbsp;&nbsp;<img src="images/imgL/toulouse.jpg" alt="toul" width="45"></td>
											</tr>
										</tbody>
									</table>
								</article>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- CTA -->
			<?php include './includes/footer.php'; ?>
		<!-- Scripts -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.dropotron.min.js"></script>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>
	</body>
</html>