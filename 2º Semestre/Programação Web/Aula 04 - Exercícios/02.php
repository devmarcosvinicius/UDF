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
        2. Faça um programa que o usuário coloca uma data e ele indique qual a estação do ano a data refere-se (primavera, verão, outono ou inverno).
    -->

    <form action="02.php" method="POST">
        <input type="date" name="dataAtual" required>
        <button type="submit">Enviar</button>
    </form>

    <?php
        $dataAtual = @$_REQUEST["dataAtual"];
        $primavera = "09/22";
        $verao = "12/21";
        $outono = "05/20";
        $inverno = "09/20";

        if($dataAtual >= $primavera && $dataAtual < $primavera){
            echo "Hoje é primavera!";
        } elseif($dataAtual >= $verao && $dataAtual < $verao){
            echo "Hoje é verão!";
        } elseif($dataAtual >= $outono && $dataAtual < $outono){
            echo "Hoje é outono!";
        } elseif($dataAtual >= $inverno && $dataAtual < $inverno){
            echo "Hoje é inverno!";
        } else {
            echo "Digite a data";
        }
    ?>

</body>
</html>