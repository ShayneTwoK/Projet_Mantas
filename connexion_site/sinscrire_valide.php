<?php
//Déclaration des variables
$connexion = mysqli_connect('localhost', 'root', 'root','videorecrut', '3333');
$id =  "SELECT COUNT(id_user) as nbID FROM utilisateur";
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$mail = $_POST['mail'];
$mdp = $_POST['mdp'];
$role = 0;
$erreur = "";

//Vérifie si le mdp est identique sur les deux champs du formulaire
if (!empty($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['mail']) && !empty($_POST['mdp']))
{
    $reponse = "INSERT INTO utilisateur(id_user, prenom, nom, mdp, mail, role)
      VALUES('$id +1', '$prenom', '$nom', '$mdp', '$mail', '$role')";
    mysqli_query($connexion, $reponse);
    echo "Création réussie";
    header('Location: connexion.php');
}
else
{
    $erreur = "Un champ a été mal ou non rempli.";
}
?>
