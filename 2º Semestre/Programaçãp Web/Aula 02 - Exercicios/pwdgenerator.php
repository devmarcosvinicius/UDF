<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $name = "Marcos Vinicius";
    $birth = "1998";
    $pwdtxt = $name . $birth;
    $pwdtxt = str_replace(" ", "", $pwdtxt);
    $pwdshuffled = str_shuffle($pwdtxt);
    $pwd = substr($pwdshuffled, 0, 10);

    echo $pwd;

    ?>

</body>

</html>