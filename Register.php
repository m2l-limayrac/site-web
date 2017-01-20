<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/css_custom.css" />
         
    </head>
<div class="container marketing">
<center>
    <h2>Inscription</h2>
    
    <div class="col-md-9">    
        <br />
        <form method="POST" action="Register.php">
            <div class="form-group">
                <label for="exampleInputEmail1">Veuillez saisir votre pseudo</label>

                <input type="text" class="form-control" name="username" id="username" placeholder="Nom d'utilisateur" required>
            </div>
           
          <div class="form-group">
                <label for="Mot de Passe">Veuillez saisir votre mot de passe</label>
                <input type="password" class="form-control" name="mdp" id="mdp" placeholder="Mot de passe" required>
            </div>
           
    
            <label for="choix de ligue ">Choix de la Ligue</label>
                <span class="custom-dropdown custom-dropdown--white">
                    <select class="custom-dropdown__select custom-dropdown__select--white">
                        <option>Ligue de Rugby</option>
                        <option>Ligue de volley</option>       
                    </select>
                </span>
            </label>
            <br></br>
            
            <div class="form-group">
                <label for="exampleInputEmail1">Veuillez saisir votre Mail</label>
                <input type="email" class="form-control" name="Mail" id="Mail" placeholder="Mail" required>
            </div>
            <br></br>
          
            <button type="submit" class="button alt">Inscription</button>
        </form>
    </div>

    <div class="col-md-3">
        <p>Vous souhaitez vous Connectez?<a href="login-volley.php">Cliquez ici.</a></p>
    </div>
</center>
</div>

