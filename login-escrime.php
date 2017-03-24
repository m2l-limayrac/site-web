<?php
 include 'fonctions.php';
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
            <?php include './includes/head.php'; ?>            
            <br></br>
            <center>
                <h2>Connexion à la ligue d'Escrime</h2>
                    <form method="POST" action="login-escrime.php">
                        <div>
                            <label for="exampleInputEmail1">Nom d'utilisateur spécifique à la ligue d'Escrime</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="Nom d'utilisateur" required>
                        </div>
                        <div>
                            <label for="exampleInputPassword1">Mot de passe (ligue d'Escrime)</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe" required>
                        </div>
                        <br></br>
                        <button type="submit" class="button alt" name="connexion">Connexion à la ligue d'Escrime</button>
                    </form>
                <br><br>
                <div>
                    <p>Vous souhaitez vous inscrire ? <a href="register.php">Cliquez ici.</a></p>
                </div>
            </center>
        </div>
        <!-- FOOTER -->
        <?php include './includes/footer.php'; ?>
    </body>
</html>



