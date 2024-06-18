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
        $velocidade = $_POST['velocidade'];
        $distancia = $_POST['distancia'];
        $consumo = $_POST['consumo'];

        $horas = $distancia / $velocidade;
        $combustivel = $distancia / $consumo;

        echo "Total horas: ".number_format(round($horas, PHP_ROUND_HALF_UP), 2,".","")."<br>";
        echo "Total combustivel: ".number_format(round($combustivel, PHP_ROUND_HALF_UP), 2,".","")."<br>";
    ?>
</body>
</html>