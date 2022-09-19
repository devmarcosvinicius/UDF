<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="03.php" method="POST">
        <input type="number" name="numero" placeholder="Digite um numero">
        <button type="submit">Enviar</button>
    </form>

    <?php
    if (!empty($_REQUEST)) {
        $numero = @$_REQUEST["numero"];

        echo "<h2>Soma</h2><table class='soma'>";
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr><td>" . $numero . "</td><td>+</td><td>" . $i . "</td><td>=</td> <td>" . $numero + $i . "</td></tr>";
        }
        echo "</table>";

        echo "<h2>Subtração</h2><table class='subtracao'>";
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr><td>" . $numero . "</td><td>-</td><td>" . $i . "</td><td>=</td> <td>" . $numero - $i . "</td></tr>";
        }
        echo "</table>";

        echo "<h2>Divisão</h2><table class='divisao'>";
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr><td>" . $numero . "</td><td>/</td><td>" . $i . "</td><td>=</td> <td>" . $numero / $i . "</td></tr>";
        }
        echo "</table>";

        echo "<h2>Mutiplicação</h2><table class='multiplicacao'>";
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr><td>" . $numero . "</td><td>*</td><td>" . $i . "</td><td>=</td> <td>" . $numero * $i . "</td></tr>";
        }
        echo "</table>";
    }
    ?>

    <style>
        h2 {
            margin-top: 50px;
        }

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