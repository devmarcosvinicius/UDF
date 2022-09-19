<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="05.php" method="POST">
        <input type="number" name="distancia" placeholder="Distancia em KM"><br>
        <input type="number" name="consumo" step="0.01" placeholder="Consumo L/KM"><br>
        <input type="number" name="valor" step="0.01" placeholder="Preço do combustivel"><br>
        <button type="submit">Calcular</button>
    </form>

    <?php
        if(!empty($_REQUEST)){
            $distancia = @$_REQUEST["distancia"];
            $consumo = @$_REQUEST["consumo"];
            $valor = @$_REQUEST["valor"];

            echo "O carro irá consumir ". round($distancia/$consumo, 2)." Litros.<br>";
            echo "Você irá gastar R$". round(($distancia/$consumo)*$valor, 2).".";
        }
    ?>
</body>

</html>