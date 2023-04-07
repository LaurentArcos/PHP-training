<?php
$aDeviner = 150;

$erreur = null;
$succes = null;
$value = null;

if (isset($_GET['chiffre'])) {
    if ($_GET['chiffre'] > $aDeviner) {
      $erreur = "Votre chiffre est trop grand !";
    } elseif ($_GET['chiffre'] < $aDeviner) {
      $erreur = "Votre chiffre est trop petit !";
    } else {
      $succes = "Bravo ! vous avez deviné le nombre <strong>$aDeviner</strong>";
    }
    $value = (int)$_GET['chiffre'];
}

?>

<?php if ($erreur): ?>
  <div>
    <?= $erreur ?>
  </div>
  <?php elseif ($succes):?>
  <div>
    <?= $succes ?>
  </div>
<?php endif ?>


<form action="/index.php" method="GET">
  <input type="number" name="chiffre" placeholder="entre 0 et 1000" value="<?php $value ?>">
  <button type="submit">Deviner</button>
</form>
