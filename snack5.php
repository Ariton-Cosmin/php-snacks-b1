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
    snack 5
    Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
   -->
  <ul>
    <li>
      <?php 
        $paragrafo = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni sequi obcaecati asperiores consectetur quis, mollitia cumque nisi pariatur dicta labore repellendus at, earum in. Sequi impedit architecto in vero iure velit! Voluptate reiciendis velit, minima provident esse id asperiores est iusto obcaecati at illo mollitia itaque culpa porro accusantium sequi explicabo excepturi illum, perferendis alias ullam ab corporis? Nostrum, delectus.";
        var_dump($paragrafo);    
      ?>
    </li>

    <li>
      <?php 
         $porzione = explode('.', $paragrafo, -1);
         var_dump($porzione);
      ?>
    </li>
  </ul>
  

</body>
</html>