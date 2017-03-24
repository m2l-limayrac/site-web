<?php

$bdd = mysqli_connect("localhost","root","","m2l");
// si on ne se connecte pas ou die l'execution
?>

<!DOCTYPE HTML>
<html lang="fr">
  <head>
    <?php include './includes/header.php'; ?>
  </head>
  <body>
    <div id="page-wrapper">
      <!-- Header -->
      <?php include './includes/head.php'; ?>
      <!-- Banner -->
      <?php 
      if ($_SESSION) { 
          $id_user = $_SESSION['id_user'];
          $req3=  mysqli_query($bdd,"SELECT id_usertype FROM user where id_user = $id_user");
          $row3 = mysqli_fetch_row($req3);
        ?>
      <div class="tableauList">
        <table>
          <thead>
           <tr>
               <th>Nr</th>
               <th>Auteur</th>
               <th>Question</th>
               <th>Reponse</th>
               <?php if( $row3[0] == 2 || $row3[0] == 3){?>
                  <th>Actions</th>
               <?php } ?>
           </tr>
          </thead>
          <tbody>
            <?php 
              if (!$bdd) 
              {
                echo 'Erreur de connection';
              }
              else 
              {
                  if($row3[0] == 3 )
                {
                  $req = mysqli_query($bdd,"SELECT faq.id_faq,user.pseudo,faq.question,faq.reponse FROM faq inner join user on faq.id_user = user.id_user");
                } 
                else 
                {
                  $req = mysqli_query($bdd,"SELECT faq.id_faq,user.pseudo,faq.question,faq.reponse FROM faq inner join user on faq.id_user = user.id_user WHERE id_ligue = ".$_SESSION['ligue']);
                } 
              }
              while($row = mysqli_fetch_row($req)) { ?>
                <tr>
                  <td><?php echo "".$row[0].""; ?></td>
                  <td><?php echo "".$row[1].""; ?></td>
                  <td><?php echo "".$row[2].""; ?></td>
                  <td><?php echo "".$row[3].""; ?></td>
                  <?php if( $row3[0] == 2 || $row3[0] == 3){?>
                    <td>
                    <a class="aDuTableau" href="edit.php<?php echo "?id=$row[0]"; ?>"><img src="images\tabIco\edit.png" title="Modifier" alt="Modifier" class="icon ic_b_edit"></a>
                    <a class="aDuTableau" href="delete.php<?php echo "?id=$row[0]"; ?>"><img src="images\tabIco\delete.png" title="Effacer" alt="Effacer" class="icon ic_b_drop"></a>
                    </td>
                  <?php } ?>
                </tr>

        <?php 
              }
            }else{
              echo "<script>alert(\"Vous devez etre connecter pour acceder a la FAQ\"); window.location.href = \"./index.php\" ; </script>";
            }
        ?>
          </tbody>
        </table>
        <p><button class="button" onclick="window.location.href='add.php'">Ajouter une question</button></p>
      </div>
    </div>
    <!-- Scripts -->
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.dropotron.min.js"></script>
    <script type="text/javascript" src="assets/js/skel.min.js"></script>
    <script type="text/javascript" src="assets/js/util.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="assets/js/unslider.js"></script>
  </body>
</html>

