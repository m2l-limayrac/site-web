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
                $Requete = mysqli_query($mysqli,"SELECT * FROM user WHERE pseudo = '".$pseudo."' AND mdp = '".$MotDePasse."'");
                //on est senser avoir 1 sin on a 1 alors c qu'on a un resultat
                    if(mysqli_num_rows($Requete) == 0) // si pas de valeur dans la DB
                    {
                    
                      echo "<script>alert(\"Identifiant ou Mot de Passe Incorrect\")</script>"; 

                    }   
                    else 
                    {
                    
                        $test = "SELECT id_ligue FROM user WHERE pseudo = '$pseudo'";
                        $result = mysqli_query($mysqli, $test);
                        
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)){
                                    if($row["id_ligue"] == 1){
                                        session_start();
                                        $_SESSION['login'] = $pseudo;
                                        $_SESSION['ligue'] = $row["id_ligue"];
                                        header('Location: ./rugby.php');
                                        exit();     
                                    } else if($row["id_ligue"] == 2){
                                        session_start();
                                        $_SESSION['login'] = $pseudo;
                                        $_SESSION['ligue'] = $row["id_ligue"];
                                        header('Location: ./volley.php');
                                        exit();     
                                    }else if ($row["id_ligue"] == 3) {
                                       session_start();
                                        $_SESSION['login'] = $pseudo;
                                        $_SESSION['ligue'] = $row["id_ligue"];
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


?>