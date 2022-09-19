<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="02.php" method="POST">
        <label>1º</label><input type="number" name="primeiro">
        <label>2º</label><input type="number" name="segundo">
        <label>3º</label><input type="number" name="terceiro">
        <button type="submit">Enviar</button>
    </form>
    <?php
    $primeiro = @$_REQUEST['primeiro'];
    $segundo = @$_REQUEST['segundo'];
    $terceiro = @$_REQUEST['terceiro'];

    if ($primeiro > $segundo && $primeiro > $terceiro) {
        echo "1º " . $primeiro . " é o maior.";
    } elseif ($segundo > $primeiro && $segundo > $terceiro) {
        echo "2º " . $segundo . " é o maior.";
    } elseif ($terceiro > $primeiro && $terceiro > $segundo) {
        echo "3º " . $terceiro . " é o maior.";
    }
    ?>
</body>

</html>