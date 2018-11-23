<!DOCTYPE html>
<?php
include ('Allinclude.php');
?>

<html>
    <head>
      <meta charset="utf-8">
      <title>Ekara</title>
      <link rel="stylesheet" href="CSS/connexion.css">
    </head>
    <body>
        <form method="post" class="connexion" action="valide_connexion.php">
            <div class="container">
                <h1>Se connecter</h1>

                <hr>
                <label for="uname"><b>Login</b></label>
                <input type="email" name="login" value="<?php if (isset($_POST['login'])){echo $_POST['login'];}?>" required="required" placeholder="Entrez votre login">

                <label for="psw"><b>Password</b></label>
                <input type="password" name="pass" required="required" placeholder="Entre votre mot de passe">

                <input class="button" type="submit" name="bconnexion" value="Connexion">
                <label>
                  <input type="checkbox" checked="checked" name="remember"> Remember me
                </label><br/><br/>
                Vous n'avez pas de compte ?<br/><br/>
               <a class="buttonsins" href="sinscrire.php">S'inscrire</a>
            </div>
        </form>
    </body>
</html>
