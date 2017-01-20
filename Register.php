<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/css_custom.css" />
    </head>
<div class="container marketing">

    <h2>Inscription</h2>
    
    <div class="col-md-9">

        <?php
        if (isset($erreur)) {
            error($erreur);
        } else {
            "no error";
        }
        ?>
        <br />
        <form method="POST" action="Register.php">
            <div class="form-group">
                <label for="exampleInputEmail1">Pseudo</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="Nom d'utilisateur" required>
            </div>
           
          <div class="form-group">
                <label for="Mot de Passe">Mot de Passe</label>
                <input type="password" class="form-control" name="mdp" id="mdp" placeholder="mdp" required>
            </div>
            <br></br>
            <div>
             <label for="choix de ligue ">Choix de la Ligue</label>
            
                <SELECT name="ligue" size="1">
                <OPTION>Ligue de Rugby
                <OPTION>Ligue de volley
                </SELECT>
           </div>
            <br></br>
            <div class="form-group">
                <label for="exampleInputEmail1">Mail</label>
                <input type="email" class="form-control" name="Mail" id="Mail" placeholder="Mail" required>
            </div>

            <br></br>
            <button type="submit" class="btn btn-default">Inscription</button>
        </form>
    </div>
            <br></br>
    <div class="col-md-3">
        <p>Vous souhaitez vous Connectez?<a href="login-volley.php">Cliquez ici.</a></p>
    </div>

</div>
</div>