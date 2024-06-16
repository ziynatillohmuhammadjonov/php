<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP learn</title>
</head>

<body>
    <?php require('header.php'); ?>
    <form action="/write.php" method="post">
        <h2>Fayllar bilan ishlsh</h2>
        <label for="message">Matnni kiriting</label><br>
        <textarea name="message" id="mes" cols="30" rows="10"></textarea>
        <br>
        <button type="submit">Yuborish</button>
    </form>
    <?php
    // Абсолютный путь к файлу для отладки
    // $file_path = __DIR__ . "/data/text.txt";

    // // Проверяем, существует ли файл
    // if (file_exists($file_path)) {
    //     // Попробуем открыть файл
    //     $file = fopen($file_path, "r");

    //     if ($file) {
    //         // Читаем первые 20 байт из файла
    //         echo fread($file, 20);
    //         // Закрываем файл
    //         fclose($file);
    //     } else {
    //         // Если файл не удалось открыть, выводим сообщение об ошибке
    //         echo "Не удалось открыть файл: " . $file_path;
    //     }
    // } else {
    //     // Сообщение, если файл не существует
    //     echo "Файл не существует: " . $file_path;
    // }

    // bsohqa usuli 
    echo file_get_contents('./data/text.txt') . '<br>'; //faylni o'qish
    // echo file_put_contents('./data/text.txt', 'Yangi'); //faylni o'zgartirish
    echo file_exists('./data/text.txt') . '<br>'; //faylni mavjudligini tekshiradi
    echo filesize('./data/text.txt') . ' Kb<br>'; //faylni o'lchamini beradi
    // rename('./data/text.txt', './data/data.txt');//faylni nomini o'zgartirish
    unlink('./data/data.txt'); //faylni o'chirish
    ?>



    <?php include('footer.php'); ?>
</body>

</html>