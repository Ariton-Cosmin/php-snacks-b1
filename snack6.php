<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
  .grey, .green{
    padding: 10px;
    text-align: center;
    color: white;
  }
    .grey{
      background-color: grey;
    }
    .green{
      background-color: green;
    }
  </style>

</head>
<body>

  <!-- 
    snack 6
    Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
   -->
  
  <?php  
    $db = [
      'teachers' => [
          [
              'name' => 'Michele',
              'lastname' => 'Papagni'
          ],
          [
              'name' => 'Fabio',
              'lastname' => 'Forghieri'
          ]
      ],
      'pm' => [
          [
              'name' => 'Roberto',
              'lastname' => 'Marazzini'
          ],
          [
              'name' => 'Federico',
              'lastname' => 'Pellegrini'
          ]
      ]
    ];     
  ?>

  <div class="grey">
    <ul>
      <?php foreach ($db['teachers'] as $dbs) { ?>
        <li> <?php echo $dbs['name'] ?> <?php echo $dbs['lastname'] ?> </li>
      <?php } ?>
    </ul>
  </div>

  <div class="green">
    <ul>
      <?php foreach ($db['pm'] as $pms) { ?>
        <li> <?php echo $pms['name'] ?> <?php echo $pms['lastname'] ?> </li>
      <?php } ?>
    </ul>
  </div>

</body>
</html>