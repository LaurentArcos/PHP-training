<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Choose your ice cream</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>

  <?php
  $parfums = [
      'Pistache' => 4,
      'Vanille' => 3,
      'Chocolat' => 3,
      'Banane' => 4,
      'Citron' => 4,
      'Straciatella' => 5
  ];
  $cornets = [
    'Pot' => 2,
    'Cornet' => 3
  ];
  $supplement = [
    'Pépites de chocolat' => 1,
    'Chantilly' => 0.5,
    'Nappache chocolat' => 1
  ];
  ?>

  <h1 class="mx-auto mt-5 text-center">Composez votre glace :</h1>

  <form action="/iceCream.php" method="GET" class="mx-auto mt-5" style="width: 200px;">
    <div class="form-group">
      <?php foreach ( $parfums as $parfum => $prix): ?>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="parfum[]" value="<?=$parfum?>">
            <?=$parfum?> - <?=$prix?> €
          </label>
        </div>
      <?php endforeach ; ?>
    </div>
  <button type="submit" class="btn btn-primary mt-3">Composer ma glace</button>
  </form>

</body>

</html>