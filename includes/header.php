<?php 
	if (basename($_SERVER['PHP_SELF']) == "index.php") {
		echo "<title>Maison des ligues - M2L</title>";
	}elseif (basename($_SERVER['PHP_SELF']) == "rugby.php") {
		echo "<title>Ligue de Rugby</title>";
	}elseif (basename($_SERVER['PHP_SELF']) == "volley.php") {
		echo "<title>Ligue de Volley</title>";
	}elseif (basename($_SERVER['PHP_SELF']) == "escrime.php") {
		echo "<title>Ligue d'Escrime</title>";
	}elseif (basename($_SERVER['PHP_SELF']) == "register.php") {
		echo "<title>Inscription</title>";
	}elseif (basename($_SERVER['PHP_SELF']) == "login-rugby.php") {
		echo "<title>login-Rugby</title>";
	}elseif (basename($_SERVER['PHP_SELF']) == "login-volley.php") {
		echo "<title>login-Volley</title>";
	}elseif (basename($_SERVER['PHP_SELF']) == "login-escrime.php") {
		echo "<title>login-Escrime</title>";
	}elseif (basename($_SERVER['PHP_SELF']) == "list.php") {
		echo "<title>FAQ</title>";
	}elseif (basename($_SERVER['PHP_SELF']) == "edit.php") {
		echo "<title>FAQ-Modification</title>";
	}elseif (basename($_SERVER['PHP_SELF']) == "delete.php") {
		echo "<title>FAQ-delete</title>";
	}elseif (basename($_SERVER['PHP_SELF']) == "add.php") {
		echo "<title>FAQ-ajout</title>";
	}
 ?>

<link rel="icon" type="image/png" href="images/m2lLogo.png"/>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" type="text/css" href="assets/css/main.css" />
<link rel="stylesheet" type="text/css" href="assets/css/css_custom.css" />
<link rel="stylesheet" type="text/css" href="assets/css/unslider.css" />