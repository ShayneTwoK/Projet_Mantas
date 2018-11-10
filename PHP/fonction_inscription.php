<?php
//Déclaration des variables
include('dbconnect.php');

if(isset($_POST['binscription']))
{
  if (!empty($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['mail']) && !empty($_POST['mdp']))
  {
    // TOUJOURS mettre les variables après LES VERIFICATION
    // si non elle ne seront PAS filtrés ni juste.
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $mail = $_POST['mail'];
    $mdp = $_POST['mdp'];
    $role = 0;

      // ET LA on peut lancé la requête avec les variables FILTRER
      $reponse = "INSERT INTO utilisateur(prenom, nom, mdp, mail, role)
        VALUES('$prenom', '$nom', '$mdp', '$mail', '$role')";
        mysqli_query($connexion, $reponse);
        $erreur= "Vous êtes Inscrit !";
        // je vois pas pourquoi on le redirige vers une page connexion et pas sur accueil
        // le gars doit ABSOLULUMENT se connecter ? je sais que c'est le but mais
        // laisse lui le choix...
        //  header('Location: connexionreussi.php');
  }
  else
  {
    $erreur = "Un champ a été mal ou non rempli.";
  }
}
?>
