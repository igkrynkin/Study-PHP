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
    $str = "Hello";
    echo "VAR: $str" . '!';
    echo "<input type=\"text\"><br>";
    
    $length = strlen($str);
    echo strtoupper(trim("  some    "));

    echo $length;
    echo md5("qwerty");

    ?>
</body>
</html>