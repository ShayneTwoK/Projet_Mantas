<?php
  include('dbconnect.php');
//  $offre = $connexion->prepare('SELECT * FROM offre ORDER BY date_limite DESC LIMIT 10');
//  $offre->execute();
// c'est bon gars il y a ton msqli que t'aime tant psk tu casse les couilles
  $offre = 'SELECT * FROM offre ORDER BY date_limite LIMIT 10';
  $offre = mysqli_query($connexion, $offre);

 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Page Offre</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" type="text/css" href="../CSS/style_page_offre.css" />

</head>

<body>
  <h1>Liste des Offres</h1>

      <!--while($o = offre->fetch()) -->
    <?php while($o = mysqli_fetch_assoc($offre))
    {?>
      <div class="offre">
        <h3><?= $o['titre_offre']?></h3>
            <div class="desc"><?=$o['desc_offre']?></div>
            <div class="plusmoins" ><a href="" id="plus">Voir plus...</a></div>

      </div>
    <?php
    }?>

    <script src="../JS/jquery.js"></script>
  
</body>
</html>
