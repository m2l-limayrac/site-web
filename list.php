<?php
$bdd = mysqli_connect("localhost","root","","m2l");
// si on ne se connecte pas ou die l'execution
?>

<!DOCTYPE HTML> 
<html lang="fr">
    <head>
        <link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/css_custom.css" /> 
    </head>
<body>

<table>
  <thead>
   <tr>
       <th>Nr</th>
       <th>Auteur</th>
       <th>Question</th>
       <th>Reponse</th>
       <th>Actions</th>
   </tr>
  </thead>
  
  <tbody>
    <?php 
    if (!$bdd) {
      echo 'Erreur de connection';
    }
    else{
      $req = mysqli_query($bdd,'SELECT faq.id_faq,user.pseudo,faq.question,faq.reponse FROM faq inner join user on faq.id_user = user.id_user ');
    } 
    while($row = mysqli_fetch_row($req)) { ?>
      <tr>
          <td><?php echo "".$row[0].""; ?></td>
          <td><?php echo "".$row[1].""; ?></td>
          <td><?php echo "".$row[2].""; ?></td>
          <td><?php echo "".$row[3].""; ?></td>
<<<<<<< HEAD
          <td><img src="images\tabIco\edit.png" title="Modifier" alt="Modifier" class="icon ic_b_edit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images\tabIco\delete.png" title="Effacer" alt="Effacer" class="icon ic_b_drop"></td>
=======
          <td><img src="images\tabIco\edit.png" title="Modifier" alt="Modifier" class="icon ic_b_edit"><img src="images\tabIco\delete.png" title="Effacer" alt="Effacer" class="icon ic_b_drop"></td>
>>>>>>> 7acad34924e0ffab0d68f617020d9ad1c3f1302e

      </tr>
      <?php } ?>
</tbody>
</table>
<<<<<<< HEAD
<td><img src="images\tabIco\edit.png" title="add" alt="add" class="icon ic_b_edit">&nbsp;&nbsp;&nbsp;<a href="edit.php" target="_blank">Ajouter une question</a></td>
=======

>>>>>>> 7acad34924e0ffab0d68f617020d9ad1c3f1302e
</body>
</html>



