<!DOCTYPE html>
<?php
include ('Allinclude.php');
?>
<html>
<head>
  <meta charset="utf-8">
  <title>Ekara</title>
  <link rel="stylesheet" href="CSS/inscription.css">
</head>
    <body>
        <form method="post" class="inscription" action="sinscrire_valide.php">
          <div class="container">
            <h1>S'inscrire</h1>
            <p>Veuillez remplir le formulaire pour créer un nouveau compte</p>
            <hr>
            <label for="nom"><b>Nom</b></label>
            <input name="nom" value="<?php if(isset($_POST['nom'])) echo $_POST['nom'];?>" type="text" required="required" placeholder="Entrez votre nom">

            <label for="prenom"><b>Prénom</b></label>
            <input name="prenom" value="<?php if(isset($_POST['prenom'])) echo $_POST['prenom'];?>"type="text" required="required" placeholder="Entrez votre prénom">

            <label for="email"><b>Email</b></label>
            <input name="mail" value="<?php if(isset($_POST['mail'])) echo $_POST['mail'];?>" type="email" required="required" placeholder="Entrez votre mail">

            <label for="psw"><b>Password</b></label>
            <input name ="mdp" value="" type="password" required="required" placeholder="Entrez votre mot de passe">
            <div class="clearfix">
                <input class="button" type="submit" value="S'inscrire"><br/><br/>
                <a class="buttoncancel" href="javascript:history.go(-1)">Retour</a>
            </div>

          </div>
          <?php include('sinscrire_valide.php'); ?>
        </form>
    </body>
</html>
