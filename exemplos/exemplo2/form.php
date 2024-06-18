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
        echo "<h2>Cadastro</h2>";

        $username = $_POST['username'];
        $senha = $_POST['senha'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $erro = 0;

        if(strlen($username) < 5) {
            echo "O usuario deve possuir no mínimo 5 caracteres.<br>";
        }
        if(strlen($senha) < 5) {
            echo "O usuario deve possuir no mínimo 5 caracteres.<br>";
        }
        if(empty($cidade)) {
            echo "Favor digitar sua cidade.<br>";
        }
        if(strlen($estado)) {
            echo "Fvor digitar ser estado corretamente.<br>";
        }
        //verifica se houveram error
        if($erro==0) {
            echo "Todos os dados foram digitados corretamente.";
        }


        echo "<h3>Username:</h3>".$username;
        echo "<h3>Senha:</h3>".$senha;
        echo "<h3>Nome:</h3>".$nome;
        echo "<h3>Email:</h3>".$email;
        echo "<h3>Cidade:</h3>".$cidade;
        echo "<h3>Estado:</h3>".$estado;
    ?>
</body>
</html>