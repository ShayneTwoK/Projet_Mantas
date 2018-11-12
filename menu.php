<!DOCTYPE html>
<?php
  include ('langueConfig.php');
?>
<html>
<head>
  <meta charset="utf-8">
  <title>Ekara</title>
  <link rel="stylesheet" href="CSS/MenuDesign.css">
  <script type="text/javascript" src="JS/app.js"></script>
</head>
<div class="header">
  <h2>Ekara</h2>
  <div class="toggle">
    <a href="#" class="header__icon" id="header__icon">&#9776;</a>
  </div>
  <div class="Menu">
    <ul>
      <a href="./PHP/connexion.php" class="1"><?php echo MENU1; ?> </a><!--
      --><a href="#2" class="2"><?php echo MENU2; ?></a><!--
      --><a href="#3" class="3"><?php echo MENU3; ?></a>
      <li>
      <a href="#4">Langues</a>
        <ul>
          <img src="Images/france.png" alt="drapeau francais" style="width: 3%;"/>
          <img src="Images/anglais.png" alt="drapeau anglais" style="width: 3%;"/>
        </ul>
      </li>
    </ul>
    </div>
  </div>
</div>
</html>
