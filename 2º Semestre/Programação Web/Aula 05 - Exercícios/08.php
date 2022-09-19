<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="08.php" method="POST">
        <input type="number" name="cpf" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" placeholder="CPF" required><br>
        <input type="number" name="dependentes" placeholder="Numero de dependentes" required><br>
        <input type="number" name="renda" placeholder="Renda Mensal" required><br>
        <button type="submit">Calcular</button>
    </form>

    <?php
        function calcular(float $cpf, int $dependentes, float $renda){
            $salarioMinimo = 1212.00;
            $desconto = $dependentes;

            if($renda <= $salarioMinimo * 2){
                echo "Você está isento.";

            } elseif($renda >= $salarioMinimo * 3){
                $desconto = $dependentes * 5% - $salarioMinimo;
                echo "Você pagará R$".($renda * 12) - (7% + $desconto);

            } elseif($renda >= $salarioMinimo * 4){
                $desconto = $dependentes * 5% - $salarioMinimo;
                echo "Você pagará R$".($renda * 12) - (15% + $desconto);

            } elseif($renda >= $salarioMinimo * 5){
                $desconto = $dependentes * 5% - $salarioMinimo;
                echo "Você pagará R$".($renda * 12) - (22% + $desconto);

            } elseif($renda >= $salarioMinimo * 6){
                $desconto = $dependentes * 5% - $salarioMinimo;
                echo "Você pagará R$".($renda * 12) - (27% + $desconto);

            }
        }

        if(!empty($_REQUEST)){
            calcular(@$_REQUEST["cpf"], @$_REQUEST["dependentes"], @$_REQUEST["renda"]);
        }
    ?>

</body>

</html>