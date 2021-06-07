<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
  $matches = [
    [
      'team1' => 'Virtus Bologna',
      'team2' => 'Olimpia Milano',
      'point_team_1' => '70',
      'point_team_2' => '45',
    ],
    [
      'team1' => 'Reyer Venezia Mestre',
      'team2' => 'Varese',
      'point_team_1' => '82',
      'point_team_2' => '83',
    ],
    [
      'team1' => 'Fortitudo Bologna',
      'team2' => 'Victoria Libertas',
      'point_team_1' => '72',
      'point_team_2' => '33',
    ],
    [
      'team1' => 'Cantù',
      'team2' => 'Reggiana',
      'point_team_1' => '72',
      'point_team_2' => '33',
    ],
  ];
  ?>

  <ul>
    <?php foreach ($matches as $match) { ?>

      <li>
        <?php echo $match['team1'] ?> - <?php echo $match['team2'] ?> | 
        <?php echp $match['point_team_1'] ?>-<?php echo $match['point_team_2'] ?>
      </li>

    <?php } ?>
  </ul>  

</body>
</html>