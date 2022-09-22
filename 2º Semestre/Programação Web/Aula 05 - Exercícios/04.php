<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="04.php" method="GET">
        <input type="number" name="a" placeholder="Digite o primeiro numero" style="width: 165px;" required><br>
        <input type="number" name="b" placeholder="Digite o segundo numero" style="width: 165px;" required><br>
        <input type="number" name="c" placeholder="Digite o terceiro numero" style="width: 165px;" required><br>
        <button type="submit">Enviar</button><br>
    </form>

    <?php
    /*  04. Crie um script em PHP que receba pela URL do navegador 3 valores numéricos e os 
        armazene nas variáveis $a, $b e $c. Em seguida, calcule e escreva o valor da expressão
        ($a - $b) * $c; */

        if(!empty($_REQUEST)){
            $a = @$_REQUEST["a"];
            $b = @$_REQUEST["b"];
            $c = @$_REQUEST["c"];

            echo "(".$a." - ".$b.") * ".$c." = ".($a - $b) * $c;
        }
    ?>
</body>
</html>