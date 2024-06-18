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
        $estado = $_POST['estado'];
        $capital = '';

        if($estado == 'AC') {
            $capital = 'Rio Branco';
        } else if($estado == 'AL') {
            $capital = 'Maceió';
        } else if($estado == 'AP') {
            $capital = 'Amapá';
        } else if($estado == 'AM') {
            $capital = 'Manaus';
        } else if($estado == 'BA') {
            $capital = 'Salvador';
        } else if($estado == 'CE') {
            $capital = 'Fortaleza';
        } else if($estado == 'DF') {
            $capital = 'Brasília';
        } else if($estado == 'ES') {
            $capital = 'Vitória';
        } else if($estado == 'GO') {
            $capital = 'Goiânia';
        } else if($estado == 'MA') {
            $capital = 'São Luís';
        } else if($estado == 'MT') {
            $capital = 'Cuiabá';
        } else if($estado == 'MS') {
            $capital = 'Cmapo Grande';
        } else if($estado == 'MG') {
            $capital = 'Belo Horizonte';
        } else if($estado == 'PA') {
            $capital = 'Belém';
        } else if($estado == 'PB') {
            $capital = 'João Pessoa';
        } else if($estado == 'PR') {
            $capital = 'Curitiba';
        } else if($estado == 'PE') {
            $capital = 'Recife';
        } else if($estado == 'PI') {
            $capital = 'Teresina';
        } else if($estado == 'RJ') {
            $capital = 'Rio de Janeiro';
        } else if($estado == 'RN') {
            $capital = 'Natal';
        } else if($estado == 'RS') {
            $capital = 'Porto Alegre';
        } else if($estado == 'RO') {
            $capital = 'Porto Velho';
        } else if($estado == 'RR') {
            $capital = 'Boa Vista';
        } else if($estado == 'SC') {
            $capital = 'Florianópolis';
        } else if($estado == 'SP') {
            $capital = 'São Paulo';
        } else if($estado == 'SE') {
            $capital = 'Aracaju';
        } else if($estado == 'To') {
            $capital = 'Palmas';
        }
        echo "A capital de ".$estado." é ".$capital."<br>";
    ?>
</body>
</html>