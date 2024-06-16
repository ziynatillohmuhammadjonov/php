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
