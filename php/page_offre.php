<?php
  include('dbconnect.php');
  $offre = mysqli_query($mysqli, 'SELECT * FROM offre ORDER BY date_limite DESC LIMIT 10');
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Page Offre</title>
  <meta charset="utf-8">
</head>

<body>
  <ul>

        <?php while($o = $offre->fetch_assoc())
        {?>

          <li><?= $o['titre_offre']?></li>
  <?php }?>
  <ul>
</body>
</html>
