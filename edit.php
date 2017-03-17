<?php
$bdd = mysqli_connect("localhost","root","","m2l");
// si on ne se connecte pas ou die l'execution
    if (!$bdd) {
      echo 'Erreur de connection';
    }
    else{
      $id = $_GET['id'];
      $req1 = mysqli_query($bdd,"SELECT question FROM faq  where id_faq = $id");
      $req2 = mysqli_query($bdd,"SELECT reponse FROM faq  where id_faq = $id");

      $row1 = mysqli_fetch_row($req1);
      $row2 = mysqli_fetch_row($req2);
    } 

    if (isset($_POST['submit']))
    {

      if(isset($_POST['question'])  && isset($_POST['reponse']))
        {   
           
            $question = $_POST['question'];
            $reponse = $_POST['reponse'];

            $sql ="UPDATE faq SET question = '$question' , reponse= '$reponse' WHERE id_faq = $id"; 
            
            
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
?>

<!DOCTYPE HTML> 
<html lang="fr">
    <head>
        <link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/css_custom.css" /> 
    </head>
<body>

<form method="post" action="edit.php<?php echo "?id=$id"; ?>">
  <h2>Question</h2>
  <textarea name="question" rows="5" cols="40"><?php echo $row1[0];?></textarea>
  <h2>Reponse</h2>
  <textarea name="reponse" rows="5" cols="40"><?php echo $row2[0];?></textarea>
  <button type="submit" name="submit" placeholder>Enregistrer</button>
</form>
</body>
</html>



