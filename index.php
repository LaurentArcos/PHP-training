<?php
$aDeviner = 150;
?>

<pre>
  <?php var_dump($_GET) ?>
</pre>

<?php if ($_GET['chiffre'] > $aDeviner) : ?>
  Votre chiffre est trop grand ! 
<?php elseif ($_GET['chiffre'] < $aDeviner) : ?>
  Votre chiffre est trop petit !    
<?php else: ?>
  Bravo ! Vous avez deviné le chiffre <?= $aDeviner ?>
<?php endif ?>


<form action="/index.php" method="GET">
  <input type="number" name="chiffre" placeholder="entre 0 et 1000" value="<?=htmlentities($_GET['chiffre'])?>">
  <button type="submit">Deviner</button>
</form>