 <?php
 include 'connexion_script.php';
 if (isset($_POST['connexion'])) {
    $pseudo = htmlentities($_POST['username'], ENT_QUOTES, "ISO-8859-1"); 
    $MotDePasse = htmlentities($_POST['password'], ENT_QUOTES, "ISO-8859-1");
    connect($pseudo, $MotDePasse);
}
?>
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
                <h1><a id="logo">M2L <em>Ligue de Rugby</em></a></h1>
            <!-- Nav -->
                <nav id="nav">
                    <ul>
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="Volley.php">Volley</a></li>
                        <li><a href="Rugby.php">Rugby</a></li>
                        <li><a href="Escrime.php">Escrime</a></li>
                        <li class="current"><a href="login-rugby.php">Connexion</a></li>
                    </ul>
                </nav>
            </div>
            <br></br>
            <center>
                <h2>Connexion à la ligue de Rugby</h2>
                    <form method="POST" action="login-rugby.php">
                        <div>
                            <label for="exampleInputEmail1">Nom d'utilisateur spécifique à la ligue de Rugby</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="Nom d'utilisateur" required>
                        </div>
                        <div>
                            <label for="exampleInputPassword1">Mot de passe (ligue de Rugby)</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe" required>
                        </div>
                        <br></br>
                        <button type="submit" class="button alt" name="connexion">Connexion à la ligue de rugby</button>
                    </form>
                <br> </br>
                <div>
                    <p>Vous souhaitez vous inscrire ? <a href="register-rugby.php">Cliquez ici.</a></p>
                </div>
            </center>
            <!-- FOOTER -->
            <?php include './includes/Footer.php'; ?>
        </div>
    </body>
</html>
