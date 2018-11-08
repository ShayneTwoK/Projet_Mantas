<html>
    <head>
        <meta charset="UTF-8"/>
        <title>S'inscrire</title>
    </head>
    <body>

        <?php include('../sinscrire_valide.php');
            echo  $erreur; ?>
        <form method="post" class="inscription" action="/sinscrire_valide.php">
            Votre prénom : <input name="prenom" value="<?php isset($_POST['prenom']);?>"type="text" required="required" placeholder="Entrez votre prénom">
            Votre nom : <input name="nom" value="<?php isset($_POST['nom']);?>" type="text" required="required" placeholder="Entrez votre nom">
            Votre mail : <input name="mail" value="<?php isset($_POST['mail']);?>" type="text" required="required" placeholder="Entrez votre mail">
            Mot de passe : <input name ="mdp" value="<?php isset($_POST['mdp']);?>" type="password" required="required" placeholder="Entrez votre mot de passe">
            Verification mot de passe : <input name="verifmdp" value="<?php isset($_POST['verifmdp']);?>" type="password" required="required" placeholder="Entrez le meme mot de passe">
            <input type="submit" value="Valider">
        </form>
    </body>
</html>
