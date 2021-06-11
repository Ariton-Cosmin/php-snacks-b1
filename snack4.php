<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <!-- 
    snack 4 
    Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
  -->

  <?php 
  
    $numRandom = [];

    while (count($numRandom) < 15 ) {
      $num = rand(1, 100);

      if (!in_array($num, $numRandom)) {
        array_push($numRandom, $num);
      }
    }   

    var_dump($numRandom);

  ?>

</body>
</html>