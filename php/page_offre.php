<?php
  include('dbconnect.php');
  $offre = $db->prepare('SELECT * FROM offre ORDER BY date_limite DESC LIMIT 10');
  $offre->execute();

 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Page Offre</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css/style_page.css" />
  <script type="text/javascript" src="../js/jquery.js"></script>
  <script type="text/javascript" src ="../js/javascript.js"></script>
</head>

<body>
  <h1>Liste des Offres</h1>


    <?php while($o = $offre->fetch())
    {?>
      <div class="offre">
        <h3><?= $o['titre_offre']?></h3>
            <div class="desc"><?=$o['desc_offre']?></div>
            <span class="plusmoins">Voir plus...</span>



      </div>
    <?php
    }?>



</body>
</html>
