<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $palavra1 = "primeiro";
        $palavra2 = "segundo";
        $palavra3 = "terceiro";
        $palavra4 = "quarto";

        $palavras = $palavra1 . $palavra2 . $palavra3 . $palavra4;
        $palavras = str_repeat("*", strlen($palavras));
        echo $palavras;
    ?>
</body>
</html>