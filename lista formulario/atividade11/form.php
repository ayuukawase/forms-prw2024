<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php

$prontuario = $_POST['prontuario'];
$nome = $_POST['nome'];
$idade = floatval($_POST['idade']);

$erro=0;

if(empty($nome)){ 
    echo "Favor digitar seu nome"; 
    $erro=1;
}
if(empty($prontuario)){ 
    echo "Favor digitar seu prontuário"; 
    $erro=1;
}

if($erro==0){ 
    echo "Todos os dados foram digitados corretamente!";
}

?>
</body>
</html>