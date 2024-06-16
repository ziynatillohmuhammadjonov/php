<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP learn</title>
</head>

<body>
    <?php require('header.php'); ?>
    <h1>OOP</h1>
    <?php
    class User
    {
        const PASS = 'password';
        public $name;
        private $surname;
        private $login;
        private $pass;

        function __construct($name, $surname, $login) //bunda class chaqirilganda qiymatni birinchi bo'lib kiritiladi.
        {
            $this->name = $name;
            $this->surname = $surname;
            $this->login = $login;

            print self::PASS . '<br>'; //class ichida constantani ishlatish.

            $this->showInfo();
        }

        function showInfo()
        {
            echo 'Foydalanuvchi ismi: ' . $this->name . ' familiyasi: ' . $this->surname . ' logini: ' . $this->login . '<br>';
        }

        function __destruct() //bunda class sahifa oxirida xotiradan o'chirib tashlanadi.
        {
            print 'Yo\'qotilayapti: ' . __CLASS__ . '<br>'; //echo bilan print bir xil
        }
    }

    $admin = new User('Ziynatilloh', 'Muhammadjonov', 1997);
    print User::PASS . '<br>'; //constantan class ichida tashqarida foydalanish;
    $operator = new User('Nasibillo', 'Muhammadjonov', 2001);

    ?>
    <?php include('footer.php'); ?>
</body>

</html>