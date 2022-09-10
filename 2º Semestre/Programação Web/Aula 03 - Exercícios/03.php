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
        3. Faça um algoritmo que transforme um texto maiusculo em minusculo e dizer quantas palavras tem o texto.
    -->

    <form action="03.php" method="POST">
        <textarea name="texto" rows="10" cols="30" placeholder="Digite um texto"> </textarea><br>
        <button type="submit">Enviar</button>
    </form>

    <?php
        $texto = @$_REQUEST["texto"];
        $texto = strtolower($texto);
        echo $texto;
    ?>
    
</body>
</html>