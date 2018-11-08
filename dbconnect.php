<?php
$serveur = "localhost";
$base = "ekara";
$user = "root";
$pass = "gedimagination";

$mysqli = new mysqli($serveur, $user, $pass, $base);
if ($mysqli->connect_error) {
    die('Erreur de connexion ('.$mysqli->connect_errno.')'. $mysqli->connect_error);
}
?>
