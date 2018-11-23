<?php
$serveur = "localhost";
$base = "videorecrut";
$user = "root";
$pass = "gedimagination";
$encode = "charset=utf-8";

$mysqli = new mysqli($serveur, $user, $pass, $base);
if ($mysqli->connect_error) {
    die('Erreur de connexion ('.$mysqli->connect_errno.')'. $mysqli->connect_error);
}
?>
