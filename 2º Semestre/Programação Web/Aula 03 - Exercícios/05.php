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
        5. Faça um programa que receba numa variável seu nome e
        noutra o ano que nasceu e mostre a seguinte mensagem: 10 Meu nome é e tenho anos. Use o date().
    -->

    <form action="05.php" method="POST">
        <input type="text" name="nome" placeholder="Nome" required>
        <input type="number" name="ano" placeholder="Ano de nascimento" required>
        <button type="submit">Enviar</button>
    </form>

    <?php
        $nome = @$_REQUEST["nome"];
        $ano = @$_REQUEST["ano"];

        $idade = date("Y") - $ano;

        echo "Meu nome é " . $nome . " e tenho " . $idade . " anos.";
    ?>
    
</body>
</html>