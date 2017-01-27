<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <?php include './includes/header.php'; ?>         
    </head>
<div class="container">
<body>
    <center>
        <h2>Inscription</h2>
        <div>    
            <br/>
            <form method="POST" action="Register.php">
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
                        <option value="Rugby" >Ligue de Rugby</option>
                        <option value="volley"> Ligue de volley</option>       
                    </select>
                </span>
                <br></br>
                <div >
                    <label for="exampleInputEmail1">Saisissez un votre adresse Mail</label>
                    <input type="email" class="form-control" name="Mail" id="Mail" placeholder="Mail" required>
                </div>
                <br></br>
                <button type="submit" class="button alt">Inscription</button>
            </form>
        </div>
        <div class="col-md-3">
            <p>Vous souhaitez vous Connectez?<a href="login-volley.php">Cliquez ici.</a></p>
        </div>
    </center>
</body>
<?php 

$bdd = mysqli_connect("localhost","root","","m2l")or die ("erreur de co");
// si on ne se connecte pas ou die l'execution
if (!$bdd) die('Erreur de connection');
// on selectionne la base de données
mysqli_select_db($bdd,'m2l' );
 
if  (isset($_POST['submit'])){

if( $_POST && isset($_POST['username']) && isset($_POST['mdp'])&& isset($_POST['choixLigue'])  && $_POST['Mail'] )
{
$username = $_POST['title'];
$mdp = $_POST['mdp'];
$Mail= $_POST['Mail'];
$choixLigue= $_POST['choixLigue'];


// On vérifie si les anti quote sont active sinon on les rajoute
if(!get_magic_quotes_gpc())
{
$username = addslashes($username);
$mdp = addslashes($mdp);
$Mail = addslashes($Mail);
$choixLigue = addslashes($choixLigue);
}

$sql = mysqli_query($bdd,"INSERT INTO user (pseudo,mdp,choixLigue,mail) VALUES ('".$username."','".$mdp."','".$Mail."','".$choixLigue."', NOW())");

if (!$sql) 
throw new Exception( mysqli_error($bdd) );
// Si aucune erreur on redirige vers la page détail de l'article


}
// On vérifie les infos qu'on reçoit via un POST

?>