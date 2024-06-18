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
        $operacao = $_POST['operacao'];
        
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $resultado = 0;

        if($operacao == 'somar') {
            $resultado = $num1 + $num2;
        } else if($operacao == 'subtrair') {
            $resultado = $num1 - $num2;
        } else if($operacao == 'dividir') {
            $resultado = $num1 * $num2;
        } else if($operacao = 'multiplicar') {
            $resultado = $num1 / $num2;
        }

        echo "Resultado: ".$resultado."<br>";
    ?>
</body>
</html>