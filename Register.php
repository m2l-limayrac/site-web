<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/css_custom.css" />
         
    </head>
<div class="container">
<center>
    <h2>Inscription</h2>
    
    <div >    
        <br />
       
        <form method="POST" action="Register.php">
            <div >
                <label for="exampleInputEmail1">Saisissez un pseudo</label>

                <input type="text" class="form-control" name="username" id="username" placeholder="Nom d'utilisateur" required>
            </div>
           
          <div >
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
            </label>
            <br></br>
            
            <div >
                <label for="exampleInputEmail1">Saisissez un votre adresse Mailm</label>
                <input type="email" class="form-control" name="Mail" id="Mail" placeholder="Mail" >
            </div>
            <br></br>
          
            <button type="submit" name="valider" class="button alt">Inscription</button>
        </form>
    </div>

    <div class="col-md-3">
        <p>Vous souhaitez vous Connectez?<a href="login-volley.php">Cliquez ici.</a></p>
    </div>
</center>
</div>

<?php 

//$bdd = mysqli_connect("localhost","root","")or die ("erreur de co");

//mysql_select_db("m2l",$bdd)or die("erreur de connexion a la base de donnees");



 //if (isset ($_POST['valider'])){

            //$username = $_POST['username'];
            //$mdp = $_POST['mdp'];s
            //$Mail= $_POST['Mail'];
            //$choixLigue= $_POST['choixLigue'];

    //$sql = 'INSERT INTO user (pseudo,mdp,mail,id_ligue)VALUES ("'.$username.'","'.$mdp'","'.$Mail.'","'.$choixLigue.'")';
    //INSERT INTO user (pseudo,mdp,mail,id_ligue)VALUES ("toto",'1235',"jul@m2l.fr",2);

    //$sql = "INSERT INTO user (pseudo,mdp,mail,id_ligue)VALUES ("toto",'1235',"jul@m2l.fr",2)";


    //}

?>

<?php 

// on se connecte a Mysql 
$bdd = mysqli_connect("localhost","root","","m2l");
// si on ne se connecte pas ou die l'execution
if (!$bdd) {
   echo 'Erreur de connection';
}
else {

    if (isset ($_POST['valider']))
    {

        if( $_POST && isset($_POST['username']) && isset($_POST['mdp'])&& isset($_POST['Mail']) && $_POST['choixLigue'])
        {   
            $choix = $_POST['choixLigue'];
            if ($choix == 'Rugby') {
                $choix = 1;
            }else{
                $choix = 2;
            }

            $username= $_POST['username'];
            $mdp = $_POST['mdp'];
            $Mail = $_POST['Mail'];

            $sql ="INSERT INTO user (pseudo,mdp,mail,id_ligue)VALUES ('".$username."','".$mdp."','".$Mail."',".$choix.")";

            if(mysqli_query($bdd,$sql))
            {
                echo "Success";
            }
            else
            {
                echo "error".$sql."<br>".mysqli_error($bdd);
            }
        }   

    }
}
 ?>