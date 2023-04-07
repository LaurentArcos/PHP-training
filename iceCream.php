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
  $supplements = [
    'Pépites de chocolat' => 1,
    'Chantilly' => 0.5,
    'Nappache chocolat' => 1
  ];
  $ingredients = [];
  $total = 0;

  if (isset($_GET["parfum"])) {
    foreach ($_GET["parfum"] as $parfum) {
      if(isset($parfums[$parfum])) {
        $ingredients[] = $parfum;
        $total += $parfums[$parfum];
      }
    }
  }

  if (isset($_GET["supplement"])) {
    foreach ($_GET["supplement"] as $supplement) {
      if(isset($supplements[$supplement])) {
        $ingredients[] = $supplement;
        $total += $supplements[$supplement];
      }
    }
  }

  if (isset($_GET["cornet"])) {
    $cornet = $_GET['cornet'];
      if(isset($cornets[$cornet])) {
        $ingredients[] = $cornet;
        $total += $cornets[$cornet];
      }
  }


  function checkbox (string $name, string $value , array $data): string
  {
    $attributes ="";
    if (isset($data[$name]) && in_array($value, $data[$name] )){
      $attributes .= 'checked';
    }
    return <<<HTML
      <input type="checkbox" name="{$name}[]" value="$value">
      HTML;
  }

  function radio (string $name, string $value , array $data): string
  {
    $attributes ="";
    if (isset($data[$name]) && $value === $data[$name] ){
      $attributes .= 'checked';
    }
    return <<<HTML
      <input type="radio" name="{$name}" value="$value">
      HTML;
  }

  ?>

  <h1 class="ms-5 mt-5 mb-5">Composez votre glace :</h1>

  <div class="row">

    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <div class="card-title">
            <h5>Votre glace : </h5>
            <ul>
              <?php foreach($ingredients as $ingredient) : ?>
                <li><?= $ingredient?></li>
              <?php endforeach; ?> 
            </ul>
            <p>
              <strong>Prix : </strong><?= $total?> €
            </p>
          </div>
        </div>
      </div>
    </div>

    <form action="/iceCream.php" method="GET" class="col-md-8">
      
      <div class="form-group mt-3">
        <h2> Choisissez vos parfums </h2>
        <?php foreach ( $parfums as $parfum => $prix): ?>
          <div class="checkbox">
            <label>
              <?= checkbox('parfum', $parfum, $_GET) ?>
              <?=$parfum?> - <?=$prix?> €
            </label>
          </div>
        <?php endforeach ; ?>
      </div>
      
      <div class="form-group mt-3">
        <h2> Choisissez votre cornet </h2>
        <?php foreach ( $cornets as $cornet => $prix): ?>
          <div class="radio">
            <label>
            <?= radio('cornet', $cornet, $_GET) ?>
              <?=$cornet?> - <?=$prix?> €
            </label>
          </div>
        <?php endforeach ; ?>
      </div>
  
      <div class="form-group mt-3">
        <h2> Choisissez vos suppléments </h2>
        <?php foreach ( $supplements as $supplement => $prix): ?>
          <div class="checkbox">
            <label>
              <?= checkbox('supplement', $supplement, $_GET) ?>
              <?=$supplement?> - <?=$prix?> €
            </label>
          </div>
        <?php endforeach ; ?>
      </div>
  
    <button type="submit" class="btn btn-primary mt-3">Composer ma glace</button>
    </form>

  </div>


</body>

</html>