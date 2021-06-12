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
    snack 7
    Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.
   -->

    <?php 
      $students = [
        [
          "name" => "Cosmin",
          "lastname" => "Ariton",
          "votes" => "[5, 7, 9, 2, 6]"
        ],
        [
          "name" => "Cosmin",
          "lastname" => "Ariton",
          "votes" => "[5, 7, 9, 2, 6]"
        ],
        [
          "name" => "Cosmin",
          "lastname" => "Ariton",
          "votes" => "[5, 7, 9, 2, 6]"
        ],
      ];
    ?>

  <ul>
    <?php foreach ($students as $student) { ?>
      <li>
        <?php echo $student['name'] ?> 
        <?php echo $student['lastname'] ?> 
        <?php echo number_format(array_sum($student["votes"]) / count($student["votes"]), 2, ',', '.') ?>
      </li>
    <?php } ?>
  </ul>

</body>
</html>