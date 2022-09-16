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
        1. Faça um programa que receba 2 números e efetue as quatro operações de acordo com a escolha do usuário (soma, subtrair, multiplicar ou dividir);
    -->

    <form action="01.php" method="POST">
        <input type="number" name="primeiro" placeholder="Digite um numero" required>
        <select name="operacao">
            <option value="soma">+</option>
            <option value="subtracao">-</option>
            <option value="divisao">/</option>
            <option value="multiplicacao">*</option>
        </select>
        <input type="number" name="segundo" placeholder="Digite um numero" required>
        <button type="submit">=</button>
    </form>

<?php
    $primeiro = @$_REQUEST["primeiro"];
    $operacao = @$_REQUEST["operacao"];
    $segundo = @$_REQUEST["segundo"];

    if($operacao == "soma"){
        echo $primeiro + $segundo;
    } elseif($operacao == "subtracao"){
        echo $primeiro - $segundo;
    } elseif($operacao == "divisao"){
        echo $primeiro / $segundo;
    } elseif($operacao == "multiplicacao"){
        echo $primeiro * $segundo;
    } else {
        echo "Digite os numeros e selecione a operação";
    }
?>
    
</body>
</html>