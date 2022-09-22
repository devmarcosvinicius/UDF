<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="12.php" method="POST">
        <input type="text" name="letra" placeholder="Digite uma letra" required>
        <button type="submit">Enviar</button>
    </form>

    <?php
    /* 12. Faça um programa que receba uma letra e informe se é consoante ou vogal;
        [switch/case] */

        if(!empty($_REQUEST)){
            $letra = @$_REQUEST["letra"];

            switch($letra){
                case "a":
                    echo "Vogal";
                    break;
                case "e":
                    echo "Vogal";
                    break;
                case "i":
                    echo "Vogal";
                    break;
                case "o":
                    echo "Vogal";
                    break;
                case "u":
                    echo "Vogal";
                    break;
                default:
                    echo "Consoante";
                    break;
            }
        }
    ?>

</body>

</html>