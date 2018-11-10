<?php
// On se connecte à notre
// notre quoi ??
include('dbconnect.php');

if(isset($_POST) && !empty($_POST['login']) && !empty($_POST['pass'])) {
  extract($_POST);
  // on recupère le password de la table qui correspond au login du visiteur
  $sql = "select mdp from utilisateur where mail='".$login."'";
  $req = mysqli_query($connexion, $sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
  // pk ta mit une erreur sql là et pas dans inscription aussi ?
  // ce serait pourtant qi simple de le vérifié en même temps que $connexion dans
  // dbconnect.php....
  $data = mysqli_fetch_assoc($req);

  if($data['mdp'] != $pass) {
    echo '<p>Mauvais login / password. Merci de recommencer</p>';
    include('connexion.php'); // On inclut le formulaire d'identification
    // trop fort encore une fois sa me connecte tout le temps !!
    // Tu vérifie avec un required pour que a la final on se co avec n'importe quoi...
    exit;
  }
  else {
    session_start();
    $_SESSION['login'] = $login;

    header('Location: accueil.php');
    // ah tu la mit là la redirection mais tu l'utilise pas ???
    // psk evidemment tu a fait les variables de $_SESSION...
    // mais ou sont-t-elles ? Ah t'a pas encore copié colle...excuse moi.
  }
}
else {
  echo '<p>Vous avez oublié de remplir un champ.</p>';
   include('connexion.php'); // On inclut le formulaire d'identification
   exit;
}


?>
