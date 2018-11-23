<?php
//Déclaration des variables




if (!empty($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['mail']) && !empty($_POST['mdp']))
{
  $prenom = $_POST['prenom'];
  $nom = $_POST['nom'];
  $mail = $_POST['mail'];
  $mdp = $_POST['mdp'];
  $role = 0;
  $erreur = "";

    $reponse = "INSERT INTO utilisateur(prenom, nom, mdp, mail, role)
      VALUES('$prenom', '$nom', '$mdp', '$mail', '$role')";
    mysqli_query($mysqli, $reponse);
    header('Location: creationreussi.php');
}
else
{
    $erreur = "Un champ a été mal ou non rempli.";
}
?>
