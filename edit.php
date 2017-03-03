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
                        <li class="current"><a href="login-rugby.php">Connexion</a></li>
                    </ul>
                </nav>
            </div>
            <br></br>
            <center>
                <h2>Ajouter une question a la FAQ</h2>
                <h2>Question</h2>

                    <form method="POST" action="edit.php">
                        <div>                    
                            <TEXTAREA name="question" rows=10 cols=40>Valeur par défaut</TEXTAREA>                            
                        </div>   
                        <br></br>
                        <button type="submit" class="button alt" name="submit">Enregistrer</button>
                    </form>
                <br> </br>
            </center>
            <!-- FOOTER -->
            <?php include './includes/Footer.php'; ?>
        </div>
    </body>
</html>

<?php
// on se connecte a Mysql 
$bdd = mysqli_connect("localhost","root","","m2l");
// si on ne se connecte pas ou die l'execution
if (!$bdd) {
   echo 'Erreur de connection';
}
else 
{

    if (isset ($_POST['submit']))
    {

        if( $_POST && isset($_POST['question']))
        {   
           
            $question= $_POST['question'];

            $date = date("d-m-Y") ;
            $id = $_SESSION["id_user"];

            $sql ="INSERT INTO faq(question, date_question, id_user) VALUES ('".$question."','".$date."','".$id."')";
            //$sql->('id' => $_SESSION["user"]["id_user"]);

            if(mysqli_query($bdd,$sql))
            {
                echo "votre question a bien etais prise en compte";
            }
            else
            {
                echo "error".$sql."<br>".mysqli_error($bdd);
            }

        }
           
    }
}

 ?>
