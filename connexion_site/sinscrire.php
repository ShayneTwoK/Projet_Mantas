<html>
    <head>
        <meta charset="UTF-8"/>
        <title>S'inscrire</title>
    </head>
    <body>
        <form method="post" class="inscription" action="sinscrire_valide.php">
            Votre prénom : <input name="prenom" value="<?php isset($_POST['prenom']);?>"type="text" required="required" placeholder="Entrez votre prénom">
            Votre nom : <input name="nom" value="<?php isset($_POST['nom']);?>" type="text" required="required" placeholder="Entrez votre nom">
            Votre mail : <input name="mail" value="<?php isset($_POST['mail']);?>" type="email" required="required" placeholder="Entrez votre mail">
            Mot de passe : <input name ="mdp" value="" type="password" required="required" placeholder="Entrez votre mot de passe">
            <input type="submit" value="Valider">
        </form>
        <?php include('sinscrire_valide.php'); ?>
    </body>
</html>
