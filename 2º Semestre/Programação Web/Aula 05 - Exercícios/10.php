<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="10.php" method="POST">
        <input type="number" name="dia" placeholder="Dia" required>
        <select name="mes" style="width: 125px; height: 22px;" required>
            <option value="janeiro">Janeiro</option>
            <option value="fevereiro">Fevereiro</option>
            <option value="março">Março</option>
            <option value="abril">Abril</option>
            <option value="maio">Maio</option>
            <option value="junho">Junho</option>
            <option value="julho">Julho</option>
            <option value="agosto">Agosto</option>
            <option value="setembro">Setembro</option>
            <option value="outubro">Outubro</option>
            <option value="novembro">Novembro</option>
            <option value="dezembro">Dezembro</option>
        </select>
        <button type="submit">Enviar</button>
    </form>

    <?php
    /* 10. Faça um programa que o usuário coloca uma data e ele indique qual a
        estação do ano a data refere-se (primavera, verão, outono ou inverno). [if/else] */

        if(!empty($_REQUEST)){
            $dia = @$_REQUEST["dia"];
            $mes = @$_REQUEST["mes"];

            $verao = ["dezembro", "janeiro", "fevereiro", "março"];
            $outono = ["março", "abril", "maio", "junho"];
            $inverno = ["junho", "julho", "agosto", "setembro"];
            $primavera = ["setembro", "outubro", "novembro", "dezembro"];

            if(in_array($mes, $verao)){
                if(($mes == "dezembro" && $dia >= 21) || ($mes == "março" && $dia < 20)){
                    echo "É verão.";
                } elseif($mes == "dezembro" && $dia < 21){
                    echo "É primavera.";
                } elseif($mes == "março" && $dia >= 20) {
                    echo "É outono.";
                }

            } elseif(in_array($mes, $outono)){
                if(($mes == "março" && $dia >= 20) || ($mes == "junho" && $dia < 20)){
                    echo "É outono.";
                } elseif($mes == "março" && $dia < 20){
                    echo "É verao.";
                } elseif($mes == "junho" && $dia >= 20) {
                    echo "É inverno.";
                }

            } elseif(in_array($mes, $inverno)){
                if(($mes == "junho" && $dia >= 20) || ($mes == "setembro" && $dia < 22)){
                    echo "É Inverno.";
                } elseif($mes == "junho" && $dia < 20){
                    echo "É outono.";
                } elseif($mes == "setembro" && $dia >= 22) {
                    echo "É primavera.";
                }

            } elseif(in_array($mes, $primavera)){
                if(($mes == "setembro" && $dia >= 22) || ($mes == "dezembro" && $dia < 21)){
                    echo "É primavera.";
                } elseif($mes == "junho" && $dia < 20){
                    echo "É inverno.";
                } elseif($mes == "dezembro" && $dia >= 21) {
                    echo "É verão.";
                }
            }
        }
    ?>

</body>

</html>