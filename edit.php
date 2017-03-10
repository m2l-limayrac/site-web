<?php
$bdd = mysqli_connect("localhost","root","","m2l");
// si on ne se connecte pas ou die l'execution
    if (!$bdd) {
      echo 'Erreur de connection';
    }
    else{
      $req1 = mysqli_query($bdd,'SELECT question FROM faq  where id_faq =  ');
      $req2 = mysqli_query($bdd,'SELECT reponse FROM faq  where id_faq =  ');
    } 

    if (isset ($_POST['submit']))
    {

      // modifier le code de julien d'ajout de question pour l'ajout de la reponse

    }
?>

<!DOCTYPE HTML> 
<html lang="fr">
    <head>
        <link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/css_custom.css" /> 
    </head>
<body>

<h2>Question</h2>
<textarea name="question" rows="5" cols="40"><?php echo $req1;?></textarea>

<h2>Reponse</h2>
<textarea name="reponse" rows="5" cols="40"><?php echo $req2;?></textarea>

<button type="submit" class="button alt" name="enregistrement">Enregistrer</button>
</body>
</html>



