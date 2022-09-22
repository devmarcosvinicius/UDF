<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="13.php" method="POST">
        <input type="number" name="numero" placeholder="Digite um numero" min="1" max="12" style="width: 125px;" required>
        <button type="submit">Enviar</button>
    </form>

    <?php
    /* 13. Faça um programa que entre com um número de 1 a 12 e ele informa o
        mês correspondente. [switch/case] */
        
        if(!empty($_REQUEST)){
            $numero = @$_REQUEST["numero"];
            
            switch($numero){
                case 1:
                    echo "Janeiro";
                    break;
                case 2:
                    echo "Fevereiro";
                    break;
                case 3:
                    echo "Março";
                    break;
                case 4:
                    echo "Abril";
                    break;
                case 5:
                    echo "Maio";
                    break;
                case 6:
                    echo "Junho";
                    break;
                case 7:
                    echo "Julho";
                    break;
                case 8:
                    echo "Agosto";
                    break;
                case 9:
                    echo "Setembro";
                    break;
                case 10:
                    echo "Outubro";
                    break;
                case 11:
                    echo "Novembro";
                    break;
                case 12:
                    echo "Dezembro";
                    break;
                default:
                    echo "Valor invalido.";
                    break;
            }
        }
    ?>

</body>

</html>