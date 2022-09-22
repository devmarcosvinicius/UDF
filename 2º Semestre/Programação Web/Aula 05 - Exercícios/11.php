<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="11.php" method="POST">
        <input type="number" name="numero" placeholder="Digite um numero" required>
        <button type="submit">Enviar</button>
    </form>

    <?php
    /* 11. Faça um programa que o usuário entre com um número e ele informa se é
        par ou ímpar. [if/else] */


    if(!empty($_REQUEST)){
        $numero = @$_REQUEST["numero"];

        if($numero % 2 == 0){
            echo "É par.";
        } else {
            echo "É impar.";
        }
    }
    ?>

</body>

</html>