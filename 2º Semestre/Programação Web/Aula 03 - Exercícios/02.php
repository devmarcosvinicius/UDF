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
        2. Faça um algoritmo que substitua 4 palavras por asteriscos
    -->

    <form action="02.php" method="POST">
        <textarea name="frase" rows="10" cols="30" placeholder="Digite o seu texto"></textarea><br>
        <a> As palavras censuradas são: "droga", "drogas", "burro", "morte", "matar".</a><br>
        <button type="submit">Enviar</button>
    </form>

    <?php
        $frase = @$_REQUEST["frase"];
        $palavras = array("droga", "drogas", "burro", "morte", "matar");

        echo str_replace($palavras, "****", $frase);
    ?>
</body>
</html>