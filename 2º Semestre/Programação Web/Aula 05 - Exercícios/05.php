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
    /* 05. Maria quer viajar até a casa de sua irmã, de carro, e gostaria de saber,
        antecipadamente, quantos litros de gasolina irá gastar e qual o valor que terá de
        desembolsar pelo combustível gasto na viagem. Faça um script em PHP que receba via
        formulário:
        a. A distância da casa de Maria até a casa de sua irmã, em km;
        b. O consumo de seu carro, em km/litro;
        c. O preço da gasolina no posto onde Maria abastece.
        Em seguida, mostre para Maria o valor que a mesma gastará com combustível na
        viagem e quantos litros o carro consumirá; */
        
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