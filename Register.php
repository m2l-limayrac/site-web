<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <?php include './includes/header.php'; ?>         
    </head>
<body>
<div id="page-wrapper">
<?php include './includes/head.php'; ?>  
    <center>
        <h2>Inscription</h2>
        <div>    
            <br>
            <form method="POST" action="register.php">
                <div >
                    <label for="exampleInputEmail1">Saisissez un pseudo</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Nom d'utilisateur" required>
                </div>
                <div>
                    <label for="Mot de Passe">Saisissez un mot de passe</label>
                    <input type="password" class="form-control" name="mdp" id="mdp" placeholder="Mot de passe" required>
                </div>    
                <label for="choix de ligue">Choix de la Ligue</label>
                <span class="custom-dropdown custom-dropdown--white">
                    <select name="choixLigue" class="custom-dropdown__select custom-dropdown__select--white">
                        <option value="Rugby">Ligue de Rugby</option>
                        <option value="volley">Ligue de volley</option>
                        <option value="escrime">Ligue d'escrime</option>       
                    </select>
                </span>

                <br></br>
                <div>
                    <label for="exampleInputEmail1">Saisissez un votre adresse Mail</label>
                    <input type="email" class="form-control" name="Mail" id="Mail" placeholder="Mail" required>
                </div>
                <br></br>
                <button type="submit" name="submit" class="button alt">Inscription</button>
            </form>
        </div>
        <div class="col-md-3">
            <p>Vous souhaitez vous Connectez?<a href="login-volley.php">Cliquez ici.</a></p>
        </div>
        <?php include './includes/footer.php'; ?>
    </center>
</div>
</body>

<?php 

// on se connecte a Mysql 
$bdd = mysqli_connect("localhost","root","","m2l");
// si on ne se connecte pas ou die l'execution
if (!$bdd) {
   echo 'Erreur de connection';
}else{

    if (isset ($_POST['submit']))
    {

        if( $_POST && isset($_POST['username']) && isset($_POST['mdp'])&& isset($_POST['Mail']) && $_POST['choixLigue'])
        {   
            $choix = $_POST['choixLigue'];
            if ($choix == 'Rugby') {
                $choix = 1;
            }
            if ($choix == 'Volley')
            {
                $choix = 2;
            }
            if ($choix == 'Escrime')
            {
                $choix = 3;
            }

            $username= $_POST['username'];
            $mdp = $_POST['mdp'];
            $Mail = $_POST['Mail'];

            $sql ="INSERT INTO user (pseudo,mdp,mail,id_ligue)VALUES ('".$username."','".$mdp."','".$Mail."','".$choix."')";

            if(mysqli_query($bdd,$sql))
            {
                echo "Success";
            }
            else
            {
                echo "error".$sql."<br>".mysqli_error($bdd);
                echo "<script>alert(\"Erreur vous n'avais pas ete enregister\")</script>";

            }
        }

        if ($choix == 1 )
        {
            echo "<script>alert(\"Vous avez bien ete inscrit a la ligue de Rugby\")</script>";
            header('Location: ./rugby.php');
            exit();
        } 
        if ($choix == 2) 
        {
             echo "<script>alert(\"Vous avez bien ete inscrit a la ligue de Volley\")</script>";
            header('Location: ./volley.php');
            exit();
        }
        if ($choix == 3) 
        {
            
            echo "<script>alert(\"Vous avez bien ete inscrit a la ligue d'escrime\")</script>";
            header('Location: ./escrime.php');
            exit();
        }   

    }
}
 ?>
 </div></html>