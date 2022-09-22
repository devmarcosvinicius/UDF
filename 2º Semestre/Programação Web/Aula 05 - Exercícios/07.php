<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="07.php" method="POST">
        <input type="number" name="linhas" placeholder="Digite o numero de linhas"><br>
        <input type="number" name="colunas" placeholder="Digite o numero de colunas"><br>
        <input type="text" name="texto" placeholder="Digite o texto"><br>
        <button type="submit">Criar</button>
    </form>

    <?php
    /* 07. Escreva uma função que recebe, por parâmetro, o número de linhas, colunas e um
        conteúdo (texto) qualquer. Que serão utilizados para criar uma tabela HTML com essas
        características. */

    function criarTabela(int $linhas, int $colunas, string $texto){
        echo "<table>";
        for ($i = 1; $i <= $linhas; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= $colunas; $j++) {
                echo "<td>" . $texto . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }

        
        if (!empty($_REQUEST)) {
            $linhas = @$_REQUEST["linhas"];
            $colunas = @$_REQUEST["colunas"];
            $texto = @$_REQUEST["texto"];

            criarTabela($linhas, $colunas, $texto);
        }

    ?>

    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 25%;
        }

        th {
            text-align: center;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>

</body>

</html>