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

    <?php

    $nome = "Marcos Vinicius";
    $ano = 1998;
    $senha = $nome . $ano;
    $senha = str_replace(" ", "", $senha);
    $senha = str_shuffle($senha);
    $senha = substr($senha, 0, 10);

    echo $senha;

    ?>

</body>

</html>