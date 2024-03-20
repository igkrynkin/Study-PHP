<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP</title>
</head>
<body>
    <?php

    $rand = mt_rand(1, 20);
    $rand++;
    echo $rand. '<br>';

    echo min(2, 5, 6, 1, 8, 3, 6).'<br>';
    echo max(2, 5, 6, 1, 8, 3, 6).'<br>';

    ?>
</body>
</html>