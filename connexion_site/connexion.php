<?php
/*    // si l'evenement bouton connection est enclenché
    if(isset($_POST['bconnexion']))
    {
      if(!empty($_POST['mail']) && (!empty($_POST['mdp']))
      {
        // On affecte les variablesinséré dans le form
        $mailconnect = $_POST['mail'];
        $mdpconnect = $_POST['mdp'];
        // Puis on on prépare les requêtes
        include('/valide_connexion');
      }
    }
    else {
        $erreur = "Le champ mail ou mot de passe n'est pas rempli !";
    }
*/
 ?>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>TITRE</title>
    </head>
    <body>
        <form method="post" class="connexion" action="valide_connexion.php">
            Login : <input type="text" name="mail" required="required" placeholder="Enter your login">
            Password : <input type="password" name="mdp" required="required" placeholder="Enter your password">
            <input type="submit" name="bconnexion" value="Valider">
        </form>
    </body>
</html>
