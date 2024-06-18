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
        $nome = $_POST['nome'];
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $frequencia = $_POST['frequencia'];

        $media = ($n1 + $n2) / 2;

        echo "Nome: ".$nome."<br>";
        echo "Media: ".$media."<br>";
        echo "Frequencia: ".$frequencia."<br>";

        if($media < 5) {
            echo "Reprova por nota";
        } else if($frequencia < 75) {
            echo "Reprova por frequencia";
        } else {
            echo "Aprovado";
        }

    ?>
</body>
</html>