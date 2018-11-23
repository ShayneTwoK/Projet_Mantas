<!DOCTYPE html>

<?php
include ('Allinclude.php');
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ekara</title>
    <link rel="stylesheet" href="CSS/indexDesign.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="JS/app.js"></script>
  </head>
  <body>
    <div class="announcements">
      <h1>Liste des Offres</h1>
      <div class="box">

    <?php
      $offre = $mysqli->query('SELECT * FROM offre ORDER BY date_limite DESC LIMIT 10');
      while($o = mysqli_fetch_assoc($offre))
    {?>
        <div class="offre">
          <h3><?= $o['titre_offre']?></h3>
            <div class="desc"><?=$o['desc_offre']?></div>
            <span class="View">Voir plus...</span>
            <hr class="border">



        </div>
    <?php
    }?>
      </div>
    </div>
  </body>
</html>
