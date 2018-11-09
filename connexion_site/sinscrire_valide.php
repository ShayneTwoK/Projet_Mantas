<?php
//Déclaration des variables
$connexion = mysqli_connect('localhost', 'root', 'root','videorecrut', '3333');
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$mail = $_POST['mail'];
$mdp = $_POST['mdp'];
$role = 0;
$erreur = "";

if (!empty($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['mail']) && !empty($_POST['mdp']))
{
    $reponse = "INSERT INTO utilisateur(prenom, nom, mdp, mail, role)
      VALUES('$prenom', '$nom', '$mdp', '$mail', '$role')";
    mysqli_query($connexion, $reponse);
    header('Location: connexionreussi.php');
}
else
{
    $erreur = "Un champ a été mal ou non rempli.";
}
?>
