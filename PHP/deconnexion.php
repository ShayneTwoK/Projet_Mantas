<?php
session_start();
session_unset();
session_destroy();
header('Location: connexion.php');
exit();
// Eh beh trop fort, t'a déja fait déconnecté alors que le gars
// a même pas pu accéder un un bouton déconnecté... va pas
// trop vite et fini t'es pages déjà que ta voulu faire inscription
// ET connexion alors que c'etait ma tache et que tu fait de la merde...
?>
