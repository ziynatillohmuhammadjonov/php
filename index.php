<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP learn</title>
</head>

<body>
    <?php require('header.php'); ?>
    <?php
    // Vaqt bilan ishlash.
    date_default_timezone_set('Asia/Tashkent');
    echo time() . '<br>'; //hozirgi yilni birnichi yanvaridan boshlangan xisob.
    $data = date('Время: H:i:s', time() + 3600 * 5); //buni ma'lumotlari php date googleda bor.
    echo $data . '<br>';


    $date_now = new DateTime();
    $date_now->modify('+5 hour'); //bu yuqoridagini qulayroq ko'rinishi.
    echo $date_now->format('Время: H:i:s');

    // Massivlar bilan ishlash.
    $arr = [1, 3, 6, 2, 5.5, 4];
    echo count($arr) . '<br>'; //array element sonini beradi;
    print_r($arr); //istisno tariqasida dasturchilar foydalanishi uchun kod,
    echo '<br>';

    sort($arr); //massivni o'sish tartibida tartiblash
    print_r($arr); //istisno tariqasida dasturchilar foydalanishi uchun kod,
    echo '<br>';
    rsort($arr); //teskari tartiblash;

    $a_arr = ['a' => 102, "b" => 10, 'c' => 50];
    asort($a_arr); //ass.arr to'g'ri taribda faqat qiymatlari bo'yicha.
    arsort($a_arr); //teskari tartibda

    shuffle($arr); //massivni aralashtirish;
    echo in_array(12, $arr); //array ichida elment qidirish javob boolena;
    // unset($arr[2]); //arrayni indeksi bo'yicha o'chirish,
    // $arr_merge = array_merge($arr, $a_arr);//arraylarni birlashtirish
    // $slice_arr=array_slice($arr, 0,2);//belgilangan oraliqni o'chirish.

    // Turini tekshirish
    $x = 12;
    echo 'Raqammi ? ' . is_numeric($x) . '<br>';
    echo 'Butun sonmi ? ' . is_integer($x) . '<br>';
    echo 'Qoldiq sonmi ? ' . is_double($x) . '<br>';
    echo 'Satrmi ? ' . is_string($x) . '<br>';
    echo 'Mantiqiymi ? ' . is_bool($x) . '<br>';
    echo 'Massivmi ? ' . is_array($x) . '<br>';
    echo 'Turi qanday ? ' . gettype($x) . '<br>';

    // Satrlar bilan ishlash:
    $str = "Oddiy qator misoli.";
    echo strlen($str) . '<br>'; //
    echo strpos($str, 'Odd') === false ? '\'Odd\' topilmadi' : '\'Odd\' mavjud';
    echo '<br>';
    echo substr($str, 4) . '<br>'; //Boshidan 4 dan boshlab oxirigacha kesadi. agar 3-param berilsa 4 dan 3-param gacha kesadi.
    echo strtolower($str) . '<br>' . strtoupper($str) . '<br>'; //katta kichik qilish
    echo trim('    bosh joyli     matn   '); //matnni bosh joyini olish
    // phpinfo(); //barcha php haqida ma'lumot olishimkoniyati.
    ?>
    <?php include('footer.php'); ?>
</body>

</html>