<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <?php include './includes/header.php'; ?>
    </head>
<div class="container marketing">

    <h2>Connexion à la ligue de Volley</h2>
    <br />
    <div class="col-md-9">

        <?php
        if (isset($erreur)) {
            error($erreur);
        } else {
            "no error";
        }
        ?>
        <br />
        <form method="POST" action="login-volley.php">
            <div class="form-group">
                <label for="exampleInputEmail1">Nom d'utilisateur spécifique à la ligue de Volley</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="Nom d'utilisateur" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Mot de passe (ligue de Volley)</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe" required>
            </div>
            <button type="submit" class="btn btn-default">Connexion à la ligue de volley</button>
        </form>
    </div>

    <div class="col-md-3">
        <p>Vous souhaitez vous inscrire ? <a href="register-volley.php">Cliquez ici.</a></p>
    </div>

</div>
</div>