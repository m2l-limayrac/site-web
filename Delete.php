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

?>
<!DOCTYPE HTML> 
<html lang="fr">
    <head>
        <?php include './includes/header.php'; ?>
    </head>
<body>
<?php include './includes/head.php'; ?>
<form method="post" action="delete.php<?php echo "?id=$id"; ?>">
  <h2>Question</h2>
  <textarea name="question" rows="5" cols="40" disabled><?php echo $row1[0];?></textarea>
  <h2>Reponse</h2>
  <textarea name="reponse" rows="5" cols="40" disabled><?php echo $row2[0];?></textarea>
  <button type="submit" name="submit" placeholder>Supprimer la question</button>
</form>
</body>
</html>



<?php



$id_usertype = $_SESSION['id_user'];
$req3=  mysqli_query($bdd,"SELECT id_usertype FROM user where id_user = $id_usertype");

$row3 = mysqli_fetch_row($req3);


    if (isset($_POST['submit']))
    {
      if ($row3[0] == 2 || $row3[0] == 3)
      {

        $sql ="DELETE FROM faq WHERE id_faq = $id"; 
                    
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
      else
      {
        echo "<script>alert(\"Vous n'avez pas les autorisations necessaires\");</script>";
        echo "<script>window.location = './list.php';</script>";
      }    

    }
    

      
?>
