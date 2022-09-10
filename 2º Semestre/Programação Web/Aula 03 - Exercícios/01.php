<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!--
        1. Faça um algoritmo que gere uma senha aleatória de 10 dígitos com o seu nome completo e ano que você nasceu.
    -->

    <form action="01.php" method="POST">
        <input type="text" placeholder="Digite seu nome" name="name" required>
        <input type="number" placeholder="Digite o ano do seu nascimento" name="birth" required>
        <button type="submit">Enviar</button>
    </form>

    <?php

    $nome = @$_REQUEST["name"];
    $ano = @$_REQUEST["birth"];
    $senha = $nome . $ano;
    $senha = str_replace(" ", "", $senha);
    $senha = str_shuffle($senha);
    $senha = substr($senha, 0, 10);

    echo "A senha gerada foi: " . $senha;

    ?>

</body>

</html>