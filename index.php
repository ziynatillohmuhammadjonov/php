<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP learn</title>
</head>

<body>
    <?php
    require('header.php');
    $x = 10;
    $y = 15;
    if ($x == $y) {
        echo 'O\'zgaruvchilar teng';
    } else {
        echo "O'zgaruvchilar teng emas...";
    }

    echo $x == 12 && $y ? 'true </br>' : 'false </br>';

    // Massivlar

    $arr = array("short" => "Dictionary", "lang" => "Language", "Num" => 123);
    foreach ($arr as $key => $value)
        echo "Kaliti: " . $key . " qiymati: " . $value . "</br>";


    // Sikl operatorlari for; while; do while

    $arr_1 = array(3, 7, 4, 34.5, 9);
    $count = count($arr_1);
    $i = 0;
    do {
        echo "Qiymat " . ($i + 1) . ' - ' . $arr_1[$i] . '</br>';
        $i++;
    } while ($i < $count);
    include('footer.php');


    // Funksiya va uni ko'rinish maydonlari

    function printSome()
    {
        static $num = 0;
        return $num++;
    }

    echo printSome() . '<br>';
    echo printSome() . '<br>';
    echo printSome() . '<br>';
    ?>


</body>

</html>