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

    <form action="09.php" method="POST">
        <input type="number" name="n1" placeholder="Digite um numero" required>
        <select name="operacao">
            <option value="soma">+</option>
            <option value="subtracao">-</option>
            <option value="divisao">/</option>
            <option value="multiplicacao">*</option>
        </select>
        <input type="number" name="n2" placeholder="Digite um numero" required>
        <button type="submit">=</button>
    </form>

    <?php
    /* 09. Faça um programa que receba 2 números e efetue as quatro operações de
        acordo com a escolha do usuário (soma, subtrair, multiplicar ou dividir); [if/else
        e switch/case] */

        if(!empty($_REQUEST)){
            $n1 = @$_REQUEST["n1"];
            $operacao = @$_REQUEST["operacao"];
            $n2 = @$_REQUEST["n2"];

            /*if ($operacao == "soma") {
                echo $n1 + $n2;
            } elseif ($operacao == "subtracao") {
                echo $n1 - $n2;
            } elseif ($operacao == "divisao") {
                echo $n1 / $n2;
            } elseif ($operacao == "multiplicacao") {
                echo $n1 * $n2;
            } else {
                echo "Digite os numeros e selecione a operação";
            }*/

            switch($operacao){
                case "soma":
                    echo $n1 + $n2;
                    break;
                case "subtracao":
                    echo $n1 - $n2;
                    break;
                case "divisao":
                    echo $n1 / $n2;
                    break;
                case "multiplicacao":
                    echo $n1 * $n2;
                    break;
                default:
                    echo "Digite os numeros e selecione a operação";
                    break;
            }
        }
    ?>

</body>

</html>