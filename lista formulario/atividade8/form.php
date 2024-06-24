<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php

  $taboada = $_POST['taboada'];

  $i=1;

  echo "Tabuada do $taboada<br><br>";

  while($i<11){

      $r = ($taboada*$i);

      echo "$taboada X $i = $r <br>";
      $i++;
  }

  ?>
</body>
</html>