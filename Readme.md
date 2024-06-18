# 1-dars

- PHP ni internetdan topib uni c:\ ni ichiga istalgan joyiga papka ochib qo'yamiz

# 2-dars

- '' -oddiy tekstlar uchun ishltiladi.
- "" - murkkab narsalar uhun ishlatiladi va joyni '' dan ko'ra koproq eggallaydi.
- `//` - orqali faqat birta qotorni kommentriyaga oladi.
- `#` - ham bir qatorni
- `/**/` - ichida istalgancha qatorlar kommentariya qilinadi.
- `.` - esa ikkita matinni bir biriga qo'shish uchun ishlatiladi.

# 3-dars

O'zgaruvchilar, ularni turlari, konstantalar va ular bilan ishlash.

- O'zgaruvchilar e'lon qilinishidan avva `$` ishlatiladi.
- O'zgaruvchilar turlari:

1. Integer
2. Float
3. Boolean
4.

- Konstantalar ikki xil bo'ladi:

1. PHP ozini ichki qurilgan konstantalari
2. Biz ochadiga konstantalar

- `defined('PI' 3.14)` ishlatilishi `echo PI`

# 4-dars

Shart operatorlari `if` `trenary opertor` `switch case`

# 5-dars

Massivlar bilan ishlash.

PHP dagi massivlar Js dagi bo'lib unga qo'shimcha ravishda `Assootsiativ massiv` ham mavjud. Undan foydalanish:

```
$arr = array("short"=>"Dictionary", "lan"=>"Language")
echo $arr["short"]
```

Uni barcha elementlarini ko'rsatish uchun:

```
foreach($arr as $key=>$value)
    echo "Kaliti: ".$key." qiymati: ".$value
```

# 6-dars

Sikllar: `for; while, do while`

# 7-dars

Proyektga dinamik fayllarni ulash.
Proyekt ichidaga hamma sahifalarda takrorlanadigan qismlar header aside footer kabi ularni hamma sahifada qayta yozmasdan alohida qilib ulashga dinamik ulashlar deyiladi. Uni 4 xil ko'rinishi mavjud:

1. required(/file_name.php) - Faylni qidiradi agar mavjud bo'lmasa sahifani ummuman ishlatmay qo'yadi xatoni ko'rsatib.
2. include(/file_name.php) - Faylni qidiradi agar u bo'lmasa xato ko'rsatib qolgan kodni ham o'qitadi.
3. required_once() - faylni faqat bir marta ko'chirib qo'yadi
4. include_once() - bu ham

# 8-dars

Funksiyalar va o'zgaruvchilarni ko'rinish maydoni.

PHP o'zgaruvchilar Js kabi global va local bo'ladi. Lekin global o'zgaruvchini ichki funksiya ichida ishlatmoqchi bo'lsak uni global o'zgaruvchi ekanligini aytishimiz kerak ekan.

```
$words='Salom';
function printSome($name){
    global $words;
    return $words.' '.$name;
}
```

Agar qiymatni o'zgarishini har safar doimiy ravishda saqlamoqchi bo'lsak funksiya ichida:

```
function printSome(){
    static $num=0;
    return $num++;
}
```

# 9-dars

GET va POST metodlari, formalarni ochish.

# 10-dars

Fayllar bilan ishlash.

Fayllar bilan ishlanganda avval fay ochiladi , so'ng o'zgartirish kerak bo'lsa o'zgartiriladi, keyin yopiladi aks holda xotirani band qilib uni qotirib qo'yishi mumkin.

- `fopen('./data/text.txt', 'r')` - fayl yo'li, u bilan ishlash turi
- `fwrite('/data/text.txt, 'Yangi matn)` -
- `fclose('/data/text.txt')` -
  yoki bo'lamas boshqa yo'ldagi:
- echo file_get_contents('./data/text.txt') . '<br>'; //faylni o'qish
- echo file_put_contents('./data/text.txt', 'Yangi'); //faylni o'zgartirish
- echo file_exists('./data/text.txt') . '<br>'; //faylni mavjudligini tekshiradi
- echo filesize('./data/text.txt') . ' Kb<br>'; //faylni o'lchamini beradi
- rename('./data/text.txt', './data/data.txt');//faylni nomini o'zgartirish
- unlink('./data/data.txt'); //faylni o'chirish

# 11-dars

Sessionstore va Cookie

SessionStore bilanishlashda uni avval kerak bo'ladigan faylda `session_start()` bilan ishlatishimizni aytib olamiz. Keyin `$_SESSION['name'] = $_POST['name']; $_SESSION['email'] = $_POST['email'];` ko'rinishida yozib uni `$_SESSION['name']` da ishlatamiz.
Cookieni berib `setcookie(name, value, time()+son)` o'chirish uchun sonni teskarisini beramiz. Ishlatish `$_COOKIE['name']`

# 12-dars

Vaqt,ko'p sonli ichiki funksiyalar, global massiv, server.

Barcha funksiyalar yozildi qolganini netdan. Bundan tashqai $\_SERVER[] massivi orqali brauzer nomi ip sayt yo'li kabilar olinishi mumkin.

# 13-14-dars

OOP ga kirish.

```class User
    {
        public $name;
        private $surname;
        private $login;
        private $pass;

        function __construct($name, $surname, $login) //bunda class chaqirilganda qiymatni birinchi bo'lib kiritiladi.
        {
            $this->name = $name;
            $this->surname = $surname;
            $this->login = $login;

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
    $operator = new User('Nasibillo', 'Muhammadjonov', 2001);
```

bundan tashqari const ni class ichida ham e'lon qilib uni klassni ibyektga olmay ishlatish mumkin `USER::PASS` ko'rinishida.

# 15-dars

Meros olish va o'zgartirish ruxsatlari.

Class lar bilanishlashda 3 xil modifikatro mavjud:

1.  `public` - bu b/n belgilangan maydon klassni o'zlashtirgan obyekda va klassni ichida ishlatish mumkin. ( Bu xavfsizlik jihatidan tavsiya etilamaydi. )
2.  `private` - bunda maydon faqat shu klassni ichida ishlatilishi mumkin.
3.  `protected` - bunda maydon ham shu kalssda va uni meros olgan klassda ishlatiladi.
    Agar meros olishda ota klassni konstruktoridan ishlatish kerak bo'lsa ```class Car
    {
    protected $speed;
    protected $wheels;
    protected $color;

            function __construct($speed, $color)
            {
                $this->speed = $speed;
                $this->color = $color;
            }
        }

        class BMW extends Car
        {
            private $model;
            function __construct($speed, $color, $model)
            {
                parent::__construct($speed, $color);
                $this->model = $model;
                $this->showInfo();
            }
            function showInfo()
            {
                print 'Model: ' . $this->model . ' Tezlik: ' . $this->speed . ' Rangi: ' . $this->color . '<br>';
            }
        }
        $m3 = new BMW(250, 'Qora', 'M3');```
        ko'rinishida ishlatiladi.

# 16-dars

Inkapsulatsiya va polimorfizm.

- Inkapsulatsiya - bu turli xil parametrlarni foydalanuchilardan berkitish, modifikatorlar hisobiga. Tavsiya qilinadigan usul maydonlarni class ichida qoldirish yoki uni avlodlari ichida ham. Uni faqat funksiya, konstruktor yoki meros classlarda o'zgartirish.
- Polimorfizm - bunda meros olinayotgan klass ichida barcha metodlar abstrakt bo'lib bo'sh bo'ladi. Qachonki uni meros olgan class qayta ko'rsatilsa uni interpretator bola classdan olib ota klassdagini ustiga yozib yuboradi.

```
class Car {
protected $speed;
   function showInfo(){
    $this->speed.' =Tezlik'
   }
}
class BMW extendes Car{
    private $model;
    function showInfo(){
    $this->speed.' =Tezlik'
$this->model. ' =Model'
}
}
```

# 17-dars

Interfeysi, treyti va abstraktniy klass

- Interfeys - classlardan farqli ravishda bir nechtasini meros olib ishlash imkonini beradi.
- Treytlar - undan oddiy kod yoki funksiyadan qayta qayta foydalanishda class ichida ishlatiladi.
- Abstrakt klasslar - bu shunday klasslarki uni hech qanday obektga o'zlashtirib bo'lmaydi. Uni faqat meros olib foydalanish mumkin.


# 20-dars

Malumotlar omborida malumotlarni tanlash

- Dastlab MO ulanib olamiz 
```
  $user = 'root';
    $password= '';
    $db='testing';
    $host='localhost';

    $dns ='mysql:host='.$host.';dbname='.$db;
    $pdo = new PDO($dns, $user, $password);
```

- Keyin SQL so'rovni yuboramiz: 
```
 $query = $pdo->query('SELECT * FROM `users` LIMIT 2');
    while ($row = $query->fetch(PDO::FETCH_ASSOC)) { //::FETCH_OBJ - obyekt ko'rinishida oladi.
       print('<h3>Roli</h3>'.$row['login'].'<br>Ismi: '.$row['name']);
}
```
- `ORDER BY `${ustun nomi}`` - kerakli ustun bo'yicha filtr qiladi o'shish tartibida.
- `ORDER BY `${ustun nomi}` DESC` - teskari tartibda filtr qiladi. Bunda ularni so'rovni oxirida LIMIT dan avval berish kerak.
- Bazadan ma'lumotlarni tanlab olish uchun. Bunda nega ? larda foydalaniladi sababi shunda uni biz PDO orqali ximoyalashimiz mumkin foydalanuvchilarga ochiqlanmaslig uchun.
```
 $id='1';
    $name='Ziynatilloh';
    $sql= 'SELECT  `name`, `id`, `email` FROM `users` WHERE `name`= ?';// ?- buni o'rniga :name ko'rinishida qo'yishi mumkin.
    $query= $pdo->prepare($sql);
    $query->execute([$name]);
    // while( $row = $query->fetchAll(PDO::FETCH_ASSOC)) {
    //     echo'Email: '.$row['email'].' Name: '.$row['name']; 
    // }
    $users= $query->fetchAll(PDO::FETCH_ASSOC);
    print_r($users);
```
- Ikkita va undan ortiq shart bilan tekshirib olish uchun va assotsiativ array ko'rinishida ma'lumotlarni yuborish.
```
  $id=1;
    $name='Ziynatilloh';
    $sql= 'SELECT  `name`, `id`, `email` FROM `users` WHERE `name`= :name && `id`= :id';// ?- buni o'rniga :name ko'rinishida qo'yishi mumkin.
    $query= $pdo->prepare($sql);
    $query->execute(['name'=>$name, 'id'=>$id]);
    
    $user= $query->fetch(PDO::FETCH_OBJ);
    print_r($user);
```

# 21-dars 

INSERT, UPDATE, DELETE

- INSERT orqali biz ma'lumotlarni bazaga yozamiz. Bunda taribi to'g'ri kelishini kerak. Va assotsiativ array ko'rinishida ham yosa bo'ladi.
```
$login='codi999';
    $email= 'test@test.ru';
    $name='TestName';
    $surname= 'TestUsername';

    $sql = 'INSERT INTO users(login, email, name, surname) VALUES (?, ?, ?, ?)';

    $query = $pdo->prepare($sql);
    $query->execute([$login, $email, $name, $surname]);
```

- UPDATE - data, bunda assotsiativ arraydan foydalanish qulayik beradi.
```
 $id=4;
    $login='codiNewv';
    $name = 'TestName1';

    $sql = 'UPDATE `users` SET `login`=?, `name`=? WHERE `id`=?';
    $query = $pdo->prepare($sql);
    $query->execute([$login,$name, $id]);
```
- DELETE - data
```
$id=4;
    $sql = 'DELETE FROM `users` WHERE `id`=? ';
    $query=$pdo->prepare($sql);
    $query->execute([$id]);
```

# 23-dars

Foydalanuvchilarni ro'yxatdan o'tkazish va ularni bazaga yozish.
```
<?php
$username = filter_var($_POST['name'],FILTER_SANITIZE_STRING);
$email =filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
$login = filter_var($_POST['login'], FILTER_SANITIZE_STRING);
$pass=filter_var($_POST['pass'],FILTER_SANITIZE_STRING);


if(strlen($username) <= 3) {
    exit();
} elseif(strlen($email) <= 3) { 
    exit();
}elseif(strlen($login) <=3) {
    exit();
}elseif(strlen($pass) <= 3) {
    exit();
}

$hash = 'q1y1np@r0lch@';
$hashPass= md5($hash.$pass);

$user = 'root';
$password = '';
$db = 'testing';
$host = 'localhost';
$dns = 'mysql:host='.$host.';dbname='.$db;
$pdo = new PDO($dns, $user,$password);

// $sql='INSERT INTO users(name, email, login pass) VALUES(?, ?, ?, ?)';

// $query = $pdo->prepare($sql);
try {
    $sql = "INSERT INTO users (name, email, login, `pass`) VALUES (:name, :email, :login, :pass)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':name' => $username,
        ':email' => $email,
        ':login' => $login,
        ':pass' => $hashPass

    ]);
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}
```

Bunda passni ko'rinmaydiga qilish uchun uni `ichida` berdik sql so'rov vaqtida.

# 24-dars

Ajax so'rovlari bilan ishlash bizga sahifani yangilamasdan malumotlarni yuborish imkonini beradi.
```
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $('#reg_btn').click(function () {
            var name = $('#name').val();
            var email = $('#email').val();
            var login = $('#login').val();
            var pass = $('#pass').val();
            $.ajax({
                url: './reg/reg.php',
                type: 'POST',
                cache: false,
                data: { 'name': name, 'email': email, 'login': login, 'pass': pass },
                dataType: 'html',
                success: function (data) {
                    if (data == 'Всё готово') {
                        $('#reg_btn').text('Всё готово');
                        $('#error_block').hide();
                    }else{
                        $('#error_block').show();
                        $('#error_block').text(data);
                    }
                }
            });
        });
    </script>
```
undan keladigan succes bo'lgandagi `data` kerakli yo'naltirilgan url php dagi `echo` hisoblanadi.

# 25-dars

Avtorizatsiya va chiqish.

Buning uchun avtorizatsiya qilayotagnda login va parolni bazadagisi bilan tekshirib undan bazadan faqat id olamiz. Agar azada foydalanuvchi mavjud bo'lsa uni id si agar mavjud bo'lmasa uni o'rniga 0 raqami keladi. So'ng kelgan foydalanuvchi id tekshirilib u bo'lsa uni ma'lumotini cookie ga yozib qo'yamiz. 
- Chiqish jarayoni uchun yozilgan kukieni ochirib sahifani reload qilamiz.
Qo'shimcha ravishda shartni boshqacha ko'rinishida yozishni o'rgandik:
<?php
if(shart): // shart bajarilsa uni ostidagi kod ishlaydi.
?>
html kodni ko'rsatadi.
//yoki qo'shimcha ravishda
<?php
else://agar yuqoridagi shart bajarilmasa quyi ko'rsatildi
?>
html kod...
<?php
endif;//shart tugaganligini bildiradi
?>


# 26-dars

Maqola qo'shish.

Bunda maqolani qo'shish oddiy ko'rinishda INSERT INTO articles() VALUES() tartibida bo'ladi. Qo'shimcha ravishda agar sahifani kukie si yo'qlar uchun berkitmoqchi bo'lsak:
```
<?php 
    if(!isset($_COOKIE['login']) ){
        header('Location: /php/reg.php');
        exit() ;
    }
?>
```
ko'rinishida ishlatiladi. Hamda kukieni bira to'la nomini arraydan o'chirish uchun `unset($_COOKIE['log'])` ko'rinisha yoziladi. Bo'lmasa kuki qiymati o'chsa ham o'zi o'chmas ekan.