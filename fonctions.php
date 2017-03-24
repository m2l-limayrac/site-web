<?php
function connect ($pseudo, $MotDePasse){
            // connexion BD
            $mysqli = mysqli_connect("localhost","root","","m2l");
            //vérification connexion 
            if(!$mysqli)
            {
                echo "Erreur de connexion à la base de données.";
            } 
            else 
            {
                // requete SQL
                $mdp = hachage($MotDePasse);
                echo "$mdp";
                $Requete = mysqli_query($mysqli,"SELECT * FROM user WHERE pseudo = '".$pseudo."' AND mdp = '".$mdp."'");
                //on est senser avoir 1 sin on a 1 alors c qu'on a un resultat
                    if(mysqli_num_rows($Requete) == 0) // si pas de valeur dans la DB
                    {
                    
                      echo "<script>alert(\"Identifiant ou Mot de Passe Incorrect\")</script>"; 

                    }   
                    else 
                    {
                        $test = "SELECT id_ligue, id_user, id_usertype FROM user WHERE pseudo = '$pseudo'";
                        $result = mysqli_query($mysqli, $test);
                        
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)){
                                    if($row["id_ligue"] == 1){
                                        session_start();
                                        $_SESSION['login'] = $pseudo;
                                        $_SESSION['ligue'] = $row["id_ligue"];
                                        $_SESSION['id_user'] = $row["id_user"];
                                        $_SESSION['id_usertype'] = $row["id_usertype"];
                                        header('Location: ./rugby.php');
                                        exit();     
                                    } else if($row["id_ligue"] == 2){
                                        session_start();
                                        $_SESSION['login'] = $pseudo;
                                        $_SESSION['ligue'] = $row["id_ligue"];
                                        $_SESSION['id_user'] = $row["id_user"];
                                        $_SESSION['id_usertype'] = $row["id_usertype"];
                                        header('Location: ./volley.php');
                                        exit();     
                                    }else if ($row["id_ligue"] == 3) {
                                       session_start();
                                        $_SESSION['login'] = $pseudo;
                                        $_SESSION['ligue'] = $row["id_ligue"];
                                        $_SESSION['id_user'] = $row["id_user"];
                                        $_SESSION['id_usertype'] = $row["id_usertype"];
                                        header('Location: ./escrime.php');
                                        exit();    
                                    }else{
                                    echo "<script>alert(\"Vous tentez de vous connecter a la mauvaise ligue!!\")</script>";
                                }
                                }                                
                            }
                    }
            }    
}


function hachage($mdp){

$hash =  hash('sha256', $mdp);
    return hash('sha256',  10 . $hash);

}


?>