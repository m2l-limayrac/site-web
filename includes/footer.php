<?php 
	if (basename($_SERVER['PHP_SELF']) == "index.php" || basename($_SERVER['PHP_SELF']) == "register.php" || basename($_SERVER['PHP_SELF']) == "edit.php" || basename($_SERVER['PHP_SELF']) == "delete.php"|| basename($_SERVER['PHP_SELF']) == "add.php" || basename($_SERVER['PHP_SELF']) == "login.php") {
		echo '<section id="cta" class="wrapper style3">
				<div class="container" id="contact">
					<header>
						<h2>Coordonnées de la maison des ligues de Lorraine</h2>
					</header>
				</div>
			</section>
			<div id="footer">
				<ul class="icons">
					<li><a href="https://www.google.fr/maps/place/13+Rue+Jean+Moulin" class="icon fa-map-marker"><span class="label">Adresse</span><p class="icones">13 rue Jean Moulin 54510 TOMBLAINE</p></a></li>
					<li><a href="tel:+33383188702" class="icon fa-phone"><span class="label">Téléphone</span><p class="icones">03 83 18 87 02</p></a></li>
					<li><a class="icon fa-fax"><span class="label">FAX</span><p class="icones">03 83 18 87 03</p></a></li>
					<li><a href="mailto:lucien.gastaldello@m2l.fr" class="icon fa-at"><span class="label">e-mail</span><p class="icones">lucien.gastaldello@m2l.fr</p></a></li>
				</ul>
				<div class="copyright">
					<ul class="menu">
						<li>Powered by Alexis LAPEZE</li>
					</ul>
				</div>
			</div>';
	}elseif (basename($_SERVER['PHP_SELF']) == "rugby.php") {
		echo '<section id="cta" class="wrapper style3">
				<div class="container" id="contact">
					<header>
						<h2>Coordonnées de la ligue de Rugby</h2>
					</header>
				</div>
			</section>
			<div id="footer">
				<!-- Icons -->
				<ul class="icons">
					<li><a href="https://www.google.fr/maps/place/13+Rue+Jean+Moulin" class="icon fa-map-marker"><span class="label">Adresse</span><p class="icones">13 rue Jean Moulin 54510 TOMBLAINE</p></a></li>
					<li><a href="tel:+33383188702" class="icon fa-phone"><span class="label">Téléphone</span><p class="icones">03 83 18 95 61</p></a></li>
					<li><a class="icon fa-fax"><span class="label">FAX</span><p class="icones">03 83 18 95 62</p></a></li>
					<li><a href="mailto:3036A@ffr.fr" class="icon fa-at"><span class="label">e-mail</span><p class="icones">3036A@ffr.fr</p></a></li>
				</ul>
				<div class="copyright">
					<ul class="menu">
						<li>Powered by Clement ROUSSEL</li>
					</ul>
				</div>
			</div>';
	}elseif (basename($_SERVER['PHP_SELF']) == "volley.php" || basename($_SERVER['PHP_SELF'])) {
		echo '<section id="cta" class="wrapper style3">
				<div class="container" id="contact">
					<header>
						<h2>Coordonnées de la ligue de Volley</h2>
					</header>
				</div>
			</section>
			<div id="footer">
				<!-- Icons -->
				<ul class="icons">
					<li><a href="https://www.google.fr/maps/place/13+Rue+Jean+Moulin" class="icon fa-map-marker"><span class="label">Adresse</span><p class="icones">13 rue Jean Moulin 54510 TOMBLAINE</p></a></li>
					<li><a href="tel:+33383188702" class="icon fa-phone"><span class="label">Téléphone</span><p class="icones">03 83 18 87 22</p></a></li>
					<li><a class="icon fa-fax"><span class="label">FAX</span><p class="icones">03 83 18 87 23</p></a></li>
					<li><a href="mailto:contact@llvb.fr" class="icon fa-at"><span class="label">e-mail</span><p class="icones">contact@llvb.fr</p></a></li>
				</ul>
				<div class="copyright">
					<ul class="menu">
						<li>Powered by Julien PINET</li>
					</ul>
				</div>
			</div>';
	}elseif (basename($_SERVER['PHP_SELF']) == "escrime.php" || basename($_SERVER['PHP_SELF'])) {
		echo '<section id="cta" class="wrapper style3">
				<div class="container" id="contact">
					<header>
						<h2>Coordonnées de la ligue de Escrime</h2>
					</header>
				</div>
			</section>
			<div id="footer">
				<!-- Icons -->
				<ul class="icons">
					<li><a href="https://www.google.fr/maps/place/13+Rue+Jean+Moulin" class="icon fa-map-marker"><span class="label">Adresse</span><p class="icones">13 rue Jean Moulin 54510 TOMBLAINE</p></a></li>
					<li><a href="tel:+33383188740" class="icon fa-phone"><span class="label">Téléphone</span><p class="icones">03 83 18 87 40</p></a></li>
					<li><a class="icon fa-fax"><span class="label">FAX</span><p class="icones">03 83 18 87 41</p></a></li>
					<li><a href="mailto:ligue.escrime@lorraine-sport.com" class="icon fa-at"><span class="label">e-mail</span><p class="icones">ligue.escrime@lorraine-sport.com</p></a></li>
				</ul>
				<div class="copyright">
					<ul class="menu">
						<li>Powered by Clement ROUSSEL</li>
					</ul>
				</div>
			</div>';
	}
 ?>



