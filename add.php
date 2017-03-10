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

            $sql ="INSERT INTO faq(question, date_question, id_user) VALUES('".$question."':d,:id)";
            $sql->execute(array(
            'd' => date("Y-m-d"),
            'id' => $_SESSION["user"]["id_user"]))

            if(mysqli_query($bdd,$sql))
            {
                header('Location: ./list.php');
            }
            else
            {
                echo "error".$sql."<br>".mysqli_error($bdd);
            }
        }
           
    }
}

 ?>
        <div class="container marketing">
            <h1>Ajouter une question à la FAQ </h1>
            <label for="exampleInputEmail1"><p>Veuillez saisir une question.</p></label>
            <textarea name="question" placeholder="Votre question" rows="10"></textarea>
            <button type="submit" placeholder>Envoyer la question</button>
            </form>
        </div>
    </body>
</html>







