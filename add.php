
<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <?php include './includes/header.php'; ?>
    </head>
        <body>
        <div id="page-wrapper">
            <!-- Header -->
             <?php include './includes/head.php'; ?>
            </div>
            <br></br>
            <center>
                <h2>Ajouter une question a la FAQ</h2>
                <h2>Question</h2>

                    <form method="POST" action="add.php">
                        <div>                    
                            <TEXTAREA name="question" placeholder="Saisissez votre question " rows=10 cols=40></TEXTAREA>                            
                        </div>   
                        <br></br>
                        <button type="submit" class="button alt" name="submit">Enregistrer</button>
                    </form>
                    <br></br>
                    <button class="button" onclick="window.location.href='list.php'">Retourner a la liste de Question.</button>
                <br> </br>
            </center>
            <!-- FOOTER -->
            <?php include './includes/footer.php'; ?>
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
else {

    if (isset ($_POST['submit']))
    {

        if( $_POST && isset($_POST['question']))
        {   
           
            $question= $_POST['question'];

            $date = date("Y-m-d") ;
            $id = mysqli_query($bdd, "SELECT id_user FROM user WHERE pseudo = '".$_SESSION['login']."';");
            $row = mysqli_fetch_row($id);
            $sql = "INSERT INTO faq(question, dat_question, id_user) VALUES ('$question','$date',$row[0])";
           //$sql->('id' => $_SESSION["user"]["id_user"]);

            if(mysqli_query($bdd,$sql))
            {
                header('Location: ./list.php');
                echo "oui";
            }
            else
            {
                echo "error".$sql."<br>".mysqli_error($bdd);
            }
        }
           
    }
}

 ?>
</html>







