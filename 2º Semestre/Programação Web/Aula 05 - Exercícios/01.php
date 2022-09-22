<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="01.php" method="POST">
        <input type="number" name="primeiro">
        <label>+</label>
        <input type="number" name="segundo">
        <button type="submit">=</button>
    </form>

    <?php

    /* 01. Construir um algoritmo que leia 2 números e efetue a adição. Caso o valor
    somado seja maior que 20, este deverá ser apresentando somando-se a ele
    mais 8; caso o valor somado seja menor ou igual a 20, este deverá ser
    apresentado subtraindo-se 5 */


    if (@$_REQUEST["primeiro"] + @$_REQUEST["segundo"] > 20 && !empty($_REQUEST)) {
        echo @$_REQUEST["primeiro"] + @$_REQUEST["segundo"] + 8;
    } elseif (@$_REQUEST["primeiro"] + @$_REQUEST["segundo"] < 20) {
        echo @$_REQUEST["primeiro"] + @$_REQUEST["segundo"] - 5;
    }
    ?>
</body>

</html>