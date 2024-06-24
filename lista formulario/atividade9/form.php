<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php

  $nome = $_POST['nome'];
  $horario = $_POST['horario'];

  if(date("$horario")<12){
      echo "Bom dia $nome";
  }
  elseif(date($horario)>12 && date("$horario")<18){
      echo "Bom tarde $nome";
  }
  else{
      echo "Bom noite $nome";
  }

  ?>
</body>
</html>