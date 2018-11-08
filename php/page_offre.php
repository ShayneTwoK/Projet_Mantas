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
</head>

<body>
  <ul>

        <?php while($o = $offre->fetch())
        {?>

          <li><?= $o['titre_offre']?></li>
          <ul><?=$o['desc_offre']?></ul>
          <ul><?=$o['date_limite']?></ul>
  <?php }?>
  <ul>
</body>
</html>
