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

<?php
    $name = "Marcos Vinicius";
    $ano = mktime(0, 0, 0, 7, 0, 1998);

    echo "Meu nome é " . $name . date("Y", $ano);

?>
    
</body>
</html>