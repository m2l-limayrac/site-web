<?php  

if(isset($_POST['connexion'])) 
{   
            $pseudo = htmlentities($_POST['username'], ENT_QUOTES, "ISO-8859-1"); 
            $MotDePasse = htmlentities($_POST['password'], ENT_QUOTES, "ISO-8859-1");
            // connexion BD
            $mysqli = mysqli_connect("localhost","root","","m2l");
            //vérification connexion 
            if(!$mysqli)
            {
                echo "Erreur de connexion à la base de données.";
            } 
            else 
            {
                // requete SQL
                $Requete = mysqli_query($mysqli,"SELECT * FROM user WHERE pseudo = '".$pseudo."' AND mdp = '".$MotDePasse."'");
                //on est senser avoir 1 sin on a 1 alors c qu'on a un resultat
                    if(mysqli_num_rows($Requete) == 0) // si pas de valeur dans la DB
                    {
                    
                      echo "<script>alert(\"Pas connecter\")</script>"; 

                    }   
                    else 
                    {
                    
                        header ('location : Rugby.php');
                        echo "connecter";

                    }
            }    
}
?>















<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <?php include './includes/header.php'; ?>
    </head>

    <div id="page-wrapper">
            <!-- Header -->
            <div id="header">
            <!-- Logo -->
                <h1><a id="logo">M2L <em>Ligue de Volley</em></a></h1>
            <!-- Nav -->
                <nav id="nav">
                    <ul>
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="Volley.php">Volley</a></li>
                        <li><a href="Rugby.php">Rugby</a></li>
                    </ul>
                </nav>
    </div>
    <br></br>
    <center>
    <h2>Connexion à la ligue de Volley</h2>

        <form method="POST" action="login-Volley.php">
            <div>
                <label for="exampleInputEmail1">Nom d'utilisateur spécifique à la ligue de Voley</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="Nom d'utilisateur" required>
            </div>
            <div>
                <label for="exampleInputPassword1">Mot de passe (ligue de Volley)</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe" required>
            </div>
            <br></br>
            <button type="submit" class="button alt">Connexion à la ligue de Volley</button>
        </form>
    <br> </br>
    <div>
        <p>Vous souhaitez vous inscrire ? <a href="Register.php">Cliquez ici.</a></p>
    </div>
    </center>
</div>




