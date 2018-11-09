<?
// On se connecte à notre
$connexion = mysqli_connect('localhost', 'root', 'root','videorecrut', '3333');

if(isset($_POST) && !empty($_POST['login']) && !empty($_POST['pass'])) {
  extract($_POST);
  // on recupère le password de la table qui correspond au login du visiteur
  $sql = "select mdp from utilisateur where mail='".$login."'";
  $req = mysqli_query($connexion, $sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

  $data = mysqli_fetch_assoc($req);

  if($data['mdp'] != $pass) {
    echo '<p>Mauvais login / password. Merci de recommencer</p>';
    include('connexion.php'); // On inclut le formulaire d'identification
    exit;
  }
  else {
    session_start();
    $_SESSION['login'] = $login;

    header('Location: accueil.php');
  }
}
else {
  echo '<p>Vous avez oublié de remplir un champ.</p>';
   include('connexion.php'); // On inclut le formulaire d'identification
   exit;
}


?>
