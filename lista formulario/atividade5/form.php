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
        $base = floatval($_POST['base']);
        $altura = floatval($_POST['altura']);

        $area = $base * $altura;

        echo "a area do retangulo é ".number_format($area, 2, '.', '');
    ?>
</body>
</html>