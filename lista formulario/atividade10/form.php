<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php

  $camisetap = $_POST['camisetap'];
  $camisetam = $_POST['camisetam'];
  $camisetag = $_POST['camisetag'];

  $tp = 10 * $camisetap;
  $tm = 12 * $camisetam;
  $tg = 15 * $camisetag;

  $valora = $tp + $tm + $tg;

  echo "O valor arrecadado é de R$$valora";

  ?>
</body>
</html>