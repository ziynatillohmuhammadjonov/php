<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP learn</title>
</head>

<body>
    <?php
    $x = 10;
    $y = 15;
    if ($x == $y) {
        echo 'O\'zgaruvchilar teng';
    } else {
        echo "O'zgaruvchilar teng emas...";
    }

    echo $x == 12 && $y ? 'true' : 'false';
    ?>
</body>

</html>