<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="06.php" method="POST">
        <input type="number" name="tempo" step="0.1" placeholder="Digite a qntd de anos"><br>
        <input type="number" name="quantidade" step="0.01" placeholder="Digite o qntd de cigarros por dia"><br>
        <input type="number" name="preco" step="0.01" placeholder="Digite o preço"><br>
        <button type="submit">Calcular</button>
    </form>

    <?php
    /* 06. Calcular a quantidade de dinheiro gasta por um fumante. Dados: o número de anos
    que ele fuma, o nº de cigarros fumados por dia e o preço de uma carteira. */
    
        if(!empty($_REQUEST)){
            $tempo = @$_REQUEST["tempo"];
            $quantidade = @$_REQUEST["quantidade"];
            $preco = @$_REQUEST["preco"];

            echo "Você gastou em ".$tempo." anos, R$".round($quantidade * $tempo * $preco, 2).".";
        }
    ?>

</body>

</html>