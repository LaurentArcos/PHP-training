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

  <form action="/iceCream.php" method="GET" class="mx-auto mt-5" style="width: 200px;">
    <div class="form-group">
      <input type="checkbox" name="parfum[]" value="Fraise"> Fraise <br>
      <input type="checkbox" name="parfum[]" value="Pistache"> Pistache <br>
      <input type="checkbox" name="parfum[]" value="Vanille"> Vanille <br>
      <input type="checkbox" name="parfum[]" value="Chocolat"> Chocolat <br>
      <input type="checkbox" name="parfum[]" value="Banane"> Banane <br>
      <input type="checkbox" name="parfum[]" value="Citron"> Citron <br>
      <input type="checkbox" name="parfum[]" value="Straciatella"> Straciatella <br>
    </div>
  <button type="submit" class="btn btn-primary mt-3">Choisir</button>
  </form>
  <h2>GET</h2>
  <pre><?php var_dump($_GET) ?></pre>
  
</body>

</html>