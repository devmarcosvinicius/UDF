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
        $link = "https://www.youtube.com/watch?v=4ZHwu0uut3k"; // Link do video
        /* parse_str transforma string em variaveis. 
        parse_url vai retorna os componentes da url.
        PHP_URL_QUERY retorna o valor depois do "?".
        $arrayCode é o local de armazenamento dos valores.
        */
        parse_str(parse_url($link, PHP_URL_QUERY), $arrayCode); 
        echo $arrayCode["v"]; //Mostra o valor da variavel "v", ou seja, o codigo do video.

    ?>

</body>
</html>