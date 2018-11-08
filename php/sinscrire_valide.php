<?php
//Déclaration des variables
$connexion = mysqli_connect('localhost', 'root', 'root','NOM BASE', '3333');
$id = mysqli_query($connexion, "SELECT COUNT(id_user) +1 as nbID FROM utilisateur");
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$mail = $_POST['mail'];
$mdp = $_POST['mdp'];
$verif = $_POST['verifmdp'];
$role = 0;
$erreur = "";

//Vérifie si le mdp est identique sur les deux champs du formulaire
if($mdp = $verif)
{
    $reponse = mysqli_query($connexion, "INSERT INTO UTILISATEUR(id_user, prenom, nom, mdp, mail)
        VALUES($id, $prenom, $nom, $mdp, $mail, $role)");
    echo "Nouveau compte créé";
}
else
{
    $erreur = "Vos mots de passe ne sont pas identiques";
    header : ../sinscrire.php;
}
?>
