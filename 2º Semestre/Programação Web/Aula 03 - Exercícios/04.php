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
        4. Faça uma algoritmo que receba uma url completa do YouTube e mostre apenas o código do vídeo. I
    -->

    <form action="04.php" method="POST">
        <input type="link" name="link" placeholder="Cole o link aqui">
        <button type="submit">Enviar    </button>
    </form>

    <?php
        $link = $_REQUEST["link"]; // Link do video
        /* parse_str transforma string em variaveis. 
        parse_url vai retorna os componentes da url.
        PHP_URL_QUERY retorna o valor depois do "?".
        $arrayCode é o local de armazenamento dos valores.
        */
        parse_str(parse_url($link, PHP_URL_QUERY), $arrayCode); 
        echo "O codigo do video é ".$arrayCode["v"]; //Mostra o valor da variavel "v", ou seja, o codigo do video.

    ?>

</body>
</html>